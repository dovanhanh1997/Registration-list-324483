<?php

function readFileJason($filePath)
{
    $getData = file_get_contents($filePath);
    return json_decode($getData, true);
}

function saveFileJason($data, $filePath)
{
    $dataDecode = readFileJason($filePath);
    array_push($dataDecode, $data);
    $dataNew = json_encode($dataDecode);
    file_put_contents($filePath, $dataNew);
}

function addUser($user, $email, $phone)
{
    $info = [
        "Name: " => $user,
        "Email: " => $email,
        "Phone: " => $phone
    ];

    return $info;
}