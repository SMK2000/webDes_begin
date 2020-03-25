<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tester");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Escape user inputs for safety 
// Here, pm - PMID ,tt- title, fa - First Author 
// $_REQUEST refers to the 'name' attribute of the <input> tags
// We use these vars to make our code less verbose
$pm = mysqli_real_escape_string($link, $_REQUEST['PMID']);
$tt = mysqli_real_escape_string($link, $_REQUEST['Title']);
$fa = mysqli_real_escape_string($link, $_REQUEST['Author']) ;

// Fairly easy SQL Query
$sql = "INSERT INTO corona 
VALUES ('$pm', '$tt', '$fa')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
