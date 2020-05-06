<?php

    require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

    if(isset($_POST["type"])) {
        switch($_POST["type"]) {
            case "payment":
                $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
                break;
            case "plan":
                $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
                break;
            case "subscription":
                $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
                break;
            case "invoice":
                $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
                break;
        }
    }

    if(isset($payment)) {
        http_response_code(200);
        return $payment;
    } else if (isset($plan)) {
        http_response_code(200);
        return $plan;
    } else {
        http_response_code(200);
        return json_encode(array(['status' => 'OK', 'code' => 200]));
    }

?>