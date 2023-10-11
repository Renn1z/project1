<?php 

$url = 'https://api.openweathermap.org/data/2.5/weather';

$options = array( 
    'q' => 'Ulyanovsk',
    'APPID' => '908caf775ae51fde21954c2daf60f06d',
    'units' => 'metric',
    'lang' => 'ru',
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // результат полученный в виде строки я буду обрабатывать вместо прямого вывода на экран
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo '<pre>';
print_r($data);




