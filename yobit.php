<?php 

$apikey='ED41CF91CDEEDAB472D5F86CEBD62F0C';
$apisecret='ed6af616572eb144dbbd854de86ca8fc';

        $headers = array(
                'Sign: '.$sign,
                'Key: '.$apikey,
        );

    $nonce=time();
    $uri='https://yobit.net/tapi/';
    $sign=hash_hmac('sha512',$uri,$apisecret);
    $ch = curl_init($uri);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array($headers));
    $execResult = curl_exec($ch);
    $obj = json_decode($execResult, true);

?>