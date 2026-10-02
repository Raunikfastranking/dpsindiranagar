<?php
$api_url = "https://allenhouse-dps.fastranking.cloud";
function fetchMultipleApiData($endpoints)
{
    $baseUrl = "https://allenhouse-dps.fastranking.cloud/api";
    $mh = curl_multi_init();
    $curlHandles = [];
    $responses = [];
    // Create all curl handles
    foreach ($endpoints as $key => $endpoint) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // disable SSL check if needed
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_multi_add_handle($mh, $ch);
        $curlHandles[$key] = $ch;
    }
    $running = null;
    do {
        $status = curl_multi_exec($mh, $running);

        if ($status > CURLM_OK) {
             break;
        }
        curl_multi_select($mh);
        usleep(10000);
    } while ($running > 0);

    // Collect responses
    foreach ($curlHandles as $key => $ch) {
        $content = curl_multi_getcontent($ch);
        $responses[$key] = json_decode($content, true);
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    return $responses;
}
$endpoints = [
    'home_data'   => '/pages/home-page-indiranagar',
 ];

$data = fetchMultipleApiData($endpoints);
$home_data   = $data['home_data'];
 
?>