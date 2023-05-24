<?php


// Method: POST, PUT, GET etc
// Data: array("param" => "value") ==> index.php?param=value
$appendApiKey = '?api_key=' . APIKEY . '&language=en-US';

function callAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return json_decode($result);
}


function getMovieDetails($id)
{
    $appendApiKey = '?api_key=' . APIKEY . '&language=en-US';
    return callAPI('GET', BASEURL . 'movie/' . $id . $appendApiKey);
}

function getCast($id)
{
    $appendApiKey = '?api_key=' . APIKEY . '&language=en-US';
    return callAPI('GET', BASEURL . 'movie/' . $id . '/credits' . $appendApiKey);
}

function getVideo($id)
{
    $appendApiKey = '?api_key=' . APIKEY . '&language=en-US';
    $movieVideo = callAPI('GET', BASEURL . 'movie/' . $id . '/videos' . $appendApiKey);
    $video = '';
    foreach ($movieVideo->results as $item) {
        if ($item->type == 'Trailer') {
            $video = $item->key;
            break;
        }
    }
    return $video;
}

function getSimilar($id)
{
    $appendApiKey = '?api_key=' . APIKEY . '&language=en-US';
    return callAPI('GET', BASEURL . 'movie/' . $id . '/similar' . $appendApiKey);
}
