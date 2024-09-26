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

// Bad Example: Abbreviated Variable Names Gone Wild
$ttlAmt = 1000; // Total amount
$acntBal = 500; // Account balance
$tran = 200; // Transaction amount
$tranFee = 10; // Transaction fee
$remBal = $ttlAmt - $tran - $tranFee; // Remaining balance

if ($remBal <= 0) {
    $msg = "Insufficient funds";
} else {
    $msg = "Transaction successful";
}

echo $msg;