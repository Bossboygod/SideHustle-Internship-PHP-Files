<?php
   echo "<h1> PHP PROJECT</h1>";

    // ===== Function to get username and password =====

    function getmyusernameandpassword(){

    // My Array of usernames
    $usernames = ["Josh", "Faith", "Kamse", "Jade", "Nisha"];

    // My Array of Password Headers
    $passwordHeaders = ["kil", "hyt", "asd", "bnm", "cxz"];

    // Generating the 3 random numbers
    function myrandomNumbers(){
        for ($i=0; $i < 3; $i++) { 
            $random = rand(350, 999);
            return $random;
        }    
    }

    // Creating new array

    foreach($usernames as $usernames => $names){

        $Addingthenumbers = myrandomnumbers(); // generate 3 random numbers

        if(strlen($names) < 6){

            $defaultUsername[$usernames]  = $names.$Addingthenumbers;

        } 
        // when the length of the username is less than 6 add the random numbers

        elseif(strlen($names) >= 6 && strlen($names) < 8){

            $defaultUsername[$usernames] = $names;

        } 
        // When the length is greater than 6 and less than 8 let the username remain the same

        else{

            echo "Username cannot be less than 6 or more than 8 characters";

            return;

        } 
        // if username is > 8 echo error
    }
    
    //  Generate password for each header in password headers

    foreach($passwordHeaders as $pass =>$keys){

        $addingthenumbers = myrandomnumbers();

        $password = $keys.$addingthenumbers.$keys;

        $passwords [$pass] = $password;
    }
    
    // Display Username and Password on the browser
    for ($i=0; $i < count($defaultUsername); $i++) { 
        echo "<h3>Username : {$defaultUsername[$i]} <br/> password : {$passwords [$i]}</h3>";
    }
    return;
}

        // ==== Call the function ====
        getmyusernameandpassword();


?>