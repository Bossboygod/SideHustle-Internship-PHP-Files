<?php

// =============== ARRAYS ==========/
/* 
1). Numeric Arrays
2). Associative Arrays
3). Multi-dimensional Arrays
*/

        echo "<h1> Numeric Arrays </h1>";

                $name1= "Josh" ;
                $name2= "Ebun" ;
                $name3= "Faith" ;
                $name4= "Tamilore" ;


// array declaration
$usernames= array("Josh", "Ebun", "Faith", "tamilore", "shile");

echo "The first item in our array is: " .$usernames[0]."<br>";
echo "The Second item in our array is: " . $usernames[1]."<br>";
echo "The Third item in our array is: " .$usernames[2]."<br>";
echo "The Fourth item in our array is: " .$usernames[3]."<br>";
echo "The Fifth item in our array is: " .$usernames[4]."<br>";

$usernames[0] ="Tobi";
echo "The new Value for the third item is: " .$usernames[0];



echo "<h1>Associative Array</h1>";

$password = array(
                    "$usernames[0]" => "edeved",
                    "$usernames[1]" => "Kashimawo",
                    "$usernames[2]" => 1234.5,
                    "$usernames[3]" => "@goodday",

);
        echo "$usernames[0]'s password is <strong>".$password["$usernames[0]"]."</strong>"."<br>";
        echo "$usernames[1]'s password is <strong>".$password["$usernames[1]"]."</strong>";

    


echo "<h1>Multi-dimensional Array</h1>";
        
        $Restaurant = array(
                "African" => array("Ewedu and Amala", "Pounded yam and Efo riro", "Semovita and Oha"),
                "Carbohydrates" => array("Fried Rice", "Ofada Rice", "Jollof Rice"),
                "Breakfast" => array("Bread and tea", "English Breakfast" , "Toast and Juice"),
                "sides and tops" => array("Dodo and Peppered Chicken", "Barbeque and Coleslaw", "Sausage and Roasted Chicken")
        );

                 echo "At 7am this morning i had ".$Restaurant ["Breakfast"][0]."<br>"."<br>";
                 echo "I'd like to have ".$Restaurant ["Carbohydrates"][0]." alongside ". $Restaurant["sides and tops"][0]." for lunch thank you"."<br>"."<br>";
                 echo "My friend would also like " .$Restaurant["African"][1]." too";
?>