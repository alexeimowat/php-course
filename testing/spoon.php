<?php
    $curl = curl_init();

    

    curl_setopt_array($curl, [
        // CURLOPT_URL => "https://api.spoonacular.com/recipes/716429/information?apiKey=a1d424f72e474e8db3dec5e0baf85ba3&includeNutrition=true",
        CURLOPT_URL => "https://api.spoonacular.com/recipes/random?apiKey=a1d424f72e474e8db3dec5e0baf85ba3",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: spoonacular-recipe-food-nutrition-v1.p.rapidapi.com",
            "X-RapidAPI-Key: a1d424f72e474e8db3dec5e0baf85ba3"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
?>