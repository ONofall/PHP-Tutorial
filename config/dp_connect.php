<?php
//connect to database
$conn = mysqli_connect("localhost", "pizza", "test123", "Nofal_pizza");
//check the connection
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . mysqli_connect_error();
}

?>