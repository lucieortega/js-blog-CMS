<?php
    ini_set('display_errors', 1);     //SHOW ERRORS FOR DEBUGGING

$firstName =    "Lucie" ;                // String type variable
$lastName = "Ortega" ;                   // String type variable
$age = 28;                               // Integrer type variable
$married = true;                         // Boolean type variable
$childrenNames = array("Alice", "Bob");  // Array type variable

$fullName = $firstName . " " . $lastName        // Concatenation operator
$dogYears = $age/7;                             // Arithmetic operator
$isAdult = $isAdult and $married;               // Integrer type variable

function getFullName($firstName, $lastName) {   // Function name
     return $firstName . " " . $lastName;       // Return values
}

$FullName = getFullName($firstName, $lastName);  // using variable
$fullName = getFullName("Alice", "Ortega")       // using values

function getIsSettled($age, $married) {         // function name
    $dogYears = $age/7;
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $married; 
    return $isSettled;                          //returned values
}

$isSettled = getIsSettled($age, $married);      // using variable
$isSettled = getIsSettled(5, false);            // using values

if ($isSettled) {
    echo $fullName . " is settled.";
} else {
    echo $fullName . " is not settled.";
}
foreach($childrenNames as $childName) {
    echo "<li>" . $childName . "</li>"; 
}
echo "<li> <a href='/post.php?title=Blog Post 1' . $postTitle . ">" . $postTitle . 
"</a></li>"; 
?>