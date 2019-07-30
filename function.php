<?php

function readFileJason($filePath)
{
    $getData = file_get_contents($filePath);
    return json_decode($getData, true);
}

function saveFileJason($data, $filePath)
{
    $getData = file_get_contents($filePath);
    $dataDecode = json_decode($getData, true);
    $array = [];
    array_push($array, $data);
    $dataNew = json_encode($array);
    file_put_contents($filePath, $dataNew);
}

function addUser ($user,$email,$phone){
    $info = [
      "Name: "=> $user,
      "Email: "=> $email,
      "Phone: "=> $phone
    ];

    return $info;
}