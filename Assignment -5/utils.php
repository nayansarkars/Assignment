<?php
// writeDataFile("username,email,password,role");
// $userData = getRegisteredUsersData();
// print_r($userData);
// $userData[1]["role"]="manager";
// $data = getRegisteredUsersDataToFileWriteable($userData);
// overwriteDataFile($data);
// appendDataFile("username3,email,password,role");
function readDataFile(){
    $dataFile="";
    if(!file_exists("data.txt")){
        initializeDataFile();
    } 
    $dataFile = fopen("data.txt","r");
    $data = array();
    while (!feof($dataFile)) {
        $dataFileLine = fgets($dataFile);
        if($dataFileLine != false){
            $dataFileLine = trim($dataFileLine);
            array_push($data, $dataFileLine);
        }
    }
    fclose($dataFile);
    return $data;
}

function initializeDataFile(){
    $dataFile = fopen("data.txt","w");
    fwrite($dataFile,"admin,admin@gmail.com,123456,admin\n");
    fclose($dataFile);
}

function appendDataFile($data){
    $dataFile = fopen("data.txt","a");
    fwrite($dataFile,$data."\n");
    fclose($dataFile);
}

function overwriteDataFile($data){
    $dataFile = fopen("data.txt","w");
    foreach ($data as $line) {
        fwrite($dataFile,$line."\n");
    }
    fclose($dataFile);
}

function getRegisteredUsersDataFromFileContent($data){
    $userData = array();
    foreach ($data as $item) {
        $itemArray = explode(",",$item);
        if(sizeof($itemArray) == 4){
            array_push($userData, array("username"=>$itemArray[0],"email"=>$itemArray[1],"password"=>$itemArray[2],"role"=>$itemArray[3]));
        }
    }
    return $userData;
}

function findUserByEmail($email){
    $userData = getRegisteredUsersData();
    $foundUser = null;
    foreach ($userData as $user) {
        if($user["email"]==$email){
            $foundUser = $user;
        }
    }
    return $foundUser;
}
function findIndexByEmail($email){
    $userData = getRegisteredUsersData();
    $foundIndex = -1;
    for ($i=0; $i < sizeof($userData); $i++) { 
        if($userData[$i]["email"]==$email){
            $foundIndex = $i;
        }
    }
    return $foundIndex;
}

function getRegisteredUsersData(){
    $fileContent = readDataFile();
    $userData = getRegisteredUsersDataFromFileContent($fileContent);
    return $userData;
}

function getRegisteredUsersDataToFileWriteable($userData){
    $data = array();
    foreach ($userData as $item) {
        array_push($data, $item["username"].",".$item["email"].",".$item["password"].",".$item["role"]);
    }
    return $data;
}

function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>