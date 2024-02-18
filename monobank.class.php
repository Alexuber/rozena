<?php

class mMono
{
    private $token;
    public function __construct($token)
    {
        $this->token = $token;
    }
    public function monoRequest($order_id, $amount, $reference, $redirectUrl, $webhookUrl)
    {
        echo $order_id;
        // echo $amount;
        // echo $reference;
        // echo $redirectUrl;
        // echo $webhookUrl;

        $data["amount"] = intval($amount) * 100;
        $data["merchantPaymInfo"]["reference"] = $reference . "-" . $order_id;
        $data["merchantPaymInfo"]["destination"] = 'Оплата замовлення №' . $order_id;
        $data["redirectUrl"] = $redirectUrl;
        $data["webHookUrl"] = $webhookUrl;

        $headers[] = "X-Token: " . $this->token;
        var_dump($data);
        // $result = json_decode(self::send_request("https://api.monobank.ua/api/merchant/invoice/create", $headers, "POST", $data), true);
        $result["result"] = json_decode(self::send_request("https://api.monobank.ua/api/merchant/invoice/create", $headers, "POST", $data), true);

        if (isset($result['result']['pageUrl'])) {
            // Запись ответа в лог файл
            error_log('MonoBank Response: ' . json_encode($result));
            header('Location: ' . $result['result']['pageUrl']);
            die(json_encode(array('return' => "mono", 'url' => $result['result']['pageUrl'])));
        } else {
            // Запись ошибки в лог файл, если ответ от Монобанка не содержит ожидаемые данные
            error_log('Error: Unexpected response from MonoBank');
            die(json_encode(array('return' => "mono", 'url' => null)));
        }


        // die(json_encode(array('return' => "mono", 'url' => $result['result']['pageUrl'])));
    }
    public static function send_request($url, $header, $type = 'GET', $param = [])
    {
        $descriptor = curl_init($url);
        if ($type != "GET") {
            curl_setopt($descriptor, CURLOPT_POSTFIELDS, json_encode($param));
            $header[] = 'Content-Type: application/json';
        }
        curl_setopt($descriptor, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($descriptor, CURLOPT_HTTPHEADER, $header);
        curl_setopt($descriptor, CURLOPT_CUSTOMREQUEST, $type);
        $itog = curl_exec($descriptor);
        curl_close($descriptor);
        return $itog;
    }
}
