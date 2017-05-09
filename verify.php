<?php
$access_token = 'Owu3WXE0Xuwn4whkFXd0EA336IKbyvNFI+ok8ku70M1LhblTq+0I7sO1wMSSPTW9beuvDa8IpzVOolmQC/NZPZpl+ecYcquLHA1QVvAmgKhkyoBlNdUQmc1QNluaZHZrRN/KF1bBE9NOTAZcoHpOAQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
