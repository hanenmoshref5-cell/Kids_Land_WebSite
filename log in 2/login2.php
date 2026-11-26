<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kids land</title>

    <!-- link to file css -->
    <link rel="stylesheet" href="style2.css">

    <!-- icon website -->
    <link rel="icon" href="image/logo/logo.jpg">

    <!-- some font family implemented -->
    <!-- 1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Matemasie&display=swap" rel="stylesheet">
    
<!-- 2 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

</head>
<body>

<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;}


?>


    <div class="divforshdow">
    <p id="p1"> <span id="kk">K</span><span class="ids_and">ids
        <span id="ll">L</span><span class="ids_and">and</span>
        <img src="image/logo for homepage.png" alt="logo" id="img1">
        </p> 
        
</div>


<div class="contener">

<p id="p2">Log In</p>

<form action="login2.php" method="post" >

<input type="text" id="uname" placeholder="User Name..." name="username"> 


<font color="red">
<?php
if(isset($_POST['submit'])){
if(empty($_POST['username'])){
echo "is requaerd";

}
else{
    $fullname=test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
        echo "Only letters";
        }
        
}

}
?>
</font>

<br>

<input type="password" id="password" placeholder="password..." name="password"> 


<font color="red">
<?php
if(isset($_POST['submit'])){
if(empty($_POST['password'])){
echo "is requaerd";
}
}
?>
</font>


<br>

<input type="submit" value="enter" id="submit" name="submit"> <br>
<input type="submit" value="log in as admin" name="enteradmin" id="admin">



</form>

<p id="p3">if you dont have account you can creat one   <a href="../sign up 3/signup.php"> sign up </a></p>

</div>

<!-- here is place  -->

<font style=" color:indianred; padding-left: 790px; position: absolute; bottom: 270px; font-family: cursive; font-size:small; " >
<?php
// معلومات الاتصال
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kids-land-data";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

   // التحقق مما إذا كانت حقول النموذج موجودة في `$_POST`
    if (isset($_POST['username']) && isset($_POST['password'])) {
    $user_input_username = $_POST['username'];
    $user_input_password = $_POST['password'];}

// استعلام للتحقق من صحة معلومات المستخدم
$sql = "SELECT * FROM users WHERE username = ? AND password = ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user_input_username, $user_input_password);
$stmt->execute();
$result = $stmt->get_result();

// التحقق من النتائج
if ($result->num_rows > 0) {

    echo "Login successful";
    header("Location:../products page 5/products page 5.php");
    exit();

    
} else {
    echo "Invalid username or password";
}

// إغلاق الاتصال
$stmt->close();
$conn->close();
?>

</font>





<font style=" color:indianred; padding-left: 790px; position: absolute; bottom: 220px; font-family: cursive; font-size:small; " >
<?php
// معلومات الاتصال
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kids-land-data";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

   // التحقق مما إذا كانت حقول النموذج موجودة في `$_POST`
    if (isset($_POST['username']) && isset($_POST['password'])) {
    $user_input_username = $_POST['username'];
    $user_input_password = $_POST['password'];}

// استعلام للتحقق من صحة معلومات المستخدم
$sql = "SELECT * FROM admins WHERE fullname = ? AND password = ? ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user_input_username, $user_input_password);
$stmt->execute();
$result = $stmt->get_result();

// التحقق من النتائج
if ($result->num_rows > 0) {

    echo "Login successful";
    header("Location:../home page 1/index1.php");
    exit();

    
} else {
    echo "Invalid adminname or password";
}

// إغلاق الاتصال
$stmt->close();
$conn->close();
?>

</font>






</body>




    











