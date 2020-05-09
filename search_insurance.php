<?php
function doctor_insurance($insurance)
{
    require("config.inc"); //contains api key
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.betterdoctor.com/2016-03-01/doctors?insurance_uid=$insurance&skip=0&limit=10&user_key=$api_key",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            //"x-rapidapi-host: betterdoctor.p.rapidapi.com",
            //"x-rapidapi-key: 6ef62fb384mshda00ddd53ab6f19p1ecb67jsnfd6611800a67"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    return $response;//json_encode($response);
}
?>