<?php

system("clear");

$authFile = 'data.json';

if (file_exists($authFile)) {
    $auth = trim(file_get_contents($authFile));
    echo "Data yang disimpan sebelumnya :\n";
    echo "Auth : " . $auth . "\n\n";
} else {
    echo "Masukkan auth disini : ";
    $token = trim(fgets(STDIN));


    if (file_put_contents($authFile, $token)) {
        echo "Data berhasil disimpan ke data.json\n\n";
        $auth = $token;
    } else {
        echo "Gagal menyimpan data\n";
        exit;
    }
}
                                                                  sleep(3);
system("clear");                                                  
while(true) {                                                     
$Black =  "\e[0;30m";                                             $Red =    "\e[0;31m";
$r =      "\e[1;31m";                                             $Green =  "\e[0;32m";
$Yellow = "\e[0;33m";                                             $Blue =   "\e[1;34m";
$Purple = "\e[0;35m";
$Cyan =   "\e[1;36m";
$White =  "\e[1;37m";






echo "$Green\n[+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+]";
echo "$Green\n[+]                                                         [+]";
echo "$Green\n[+]  \e[1;33mBy    $White: \e[1;32mBrian                                          \e[0;32m[+]";
echo "$Green\n[+]  \e[1;33mGrup  $White: \e[1;32mhttps://t.me/Nightmare_money                   \e[0;32m[+]";
echo "$Green\n[+]  \e[1;33mSol   $White: \e[1;32mHFjAzAQYKVgJRYbFRv11Ner9Bbm25dTxrobczcMxCsNa   \e[0;32m[+]";
echo "$Green\n[+]  \e[1;33mEth   $White: \e[1;32m0x87322a1D0DFD1d47E29386cfde5b0b06744fd263     \e[0;32m[+]";
echo "$Green\n[+]  \e[1;33mBtc   $White: \e[1;32mbc1qqkxj04srchz8cxf5qjne3w8juetf3nqcyquqsz     \e[0;32m[+]";
echo "$Green\n[+]                                                         [+]";
echo "$Green\n[+]                  \e[1;31mHappy \e[1;33mFarming \e[0;32mBrother                  [+]";
echo "$Green\n[+]                                                         [+]";
echo "$Green\n[+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+][+]";
echo "\n\n\n\n";
echo "$Cyan";

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api.openloop.so/users/profile',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => [
            'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
            'authorization: Bearer ' . $auth,
            'origin: chrome-extension://effapmdildnpkiaeghlkicpfflpiambm',
            'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        ],
    ]);
    $res = curl_exec($curl);
    $json = json_decode($res);

    if (isset($json->message)) {
        echo "Login         $White: $Green" . $json->message . "\n";
    } else {
        echo "Login         $White: $GreenUnknown error\n";
    }


    echo "$Cyan";
    echo "Nama          $White: $Green" . ($json->data->name ?? "N/A") . "\n";


    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api.openloop.so/bandwidth/info',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
            'authorization: Bearer ' . $auth,
            'origin: chrome-extension://effapmdildnpkiaeghlkicpfflpiambm',
            'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        ],
    ]);
    $ban = curl_exec($curl);
    $json = json_decode($ban);

    echo "$Cyan";
    echo "Check balance $White: $Green" . ($json->message ?? "N/A") . "\n";
    echo "$Cyan";
    echo "Balance       $White: $Green" . ($json->data->balances->POINT ?? "0") . "\n";
    echo "\n";
$curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api.openloop.so/bandwidth/share',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
            'content-type: text/plain;charset=UTF-8',
            'authorization: Bearer ' . $auth,
            'origin: chrome-extension://effapmdildnpkiaeghlkicpfflpiambm',
            'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        ],
        CURLOPT_POSTFIELDS => '{"quality":65}',
    ]);
    $bal = curl_exec($curl);
    $json = json_decode($bal);

    echo "$Cyan";
    echo "Balance up $White-> $Green" . ($json->message ?? "N/A") . "\n";
    echo "$Cyan";
    echo "Balance up $White-> $Green" . ($json->data->balances->POINT ?? "0") . "\n";
    echo "\n";

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => 'https://api.openloop.so/users/dashboard',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'User-Agent: Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
            'authorization: Bearer ' . $auth,
            'origin: chrome-extension://effapmdildnpkiaeghlkicpfflpiambm',
            'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
        ],
    ]);
    $total = curl_exec($curl);
    $json = json_decode($total);

    echo "$Cyan";
    echo "Total balance $White: $Green" . ($json->data->totalPoint ?? "N/A") . "\n";
    echo "$r";
    echo "____________\n\n\n";
    echo "$r";
    for ($i = rand(10, 15); $i > 0; $i--) {
        echo "Silahkan tunggu . . . . . " . $i;
        sleep(1);
        echo "\r                                             \r";
    }
    sleep(1);
}
