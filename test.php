<?php

// Bad Example: Poor Error Handling
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
fclose($file);


// Improved Example: Efficient Looping
$numbers = [1, 2, 3, 4, 5];
$total = 0;
$length = count($numbers);
for ($i = 0; $i < $length; $i++) {
    $total += $numbers[$i];
}
echo "Total: " . $total;

// Bad Example: Inconsistent Formatting
$first_name = "John";
$lastName = "Doe";
$email= "john.doe@example.com";

if($lastName =="Doe"){
    echo "Welcome, " . $first_name . "!";
} else {
    echo "Unknown user.";
}
