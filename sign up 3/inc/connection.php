<?php




$conn = mysqli_connect('localhost','root','','kids-land-data');


if(!$conn){

    die('Error' .mysqli_connect_error());
}
else{

    echo'good';
}



?>