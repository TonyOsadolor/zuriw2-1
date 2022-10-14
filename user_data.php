<?php

if(isset($_POST["submit"])){
    $names = $_POST["names"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];

    $data = [$names, $email, $dob, $gender, $country];

    //Saving to File
    $file = fopen('userdata.csv', 'a');
    if(!$file){
        echo $file ." Could Not be Open";
        exit;
    } else{
        fputcsv($file, $data);
        fclose($file);
        
        //Print out Success Message
    echo "Form Submission Successful <br><br>";
    }    
    
    //Returnt the Data Sumbitted to the user
    print_r($data);
}