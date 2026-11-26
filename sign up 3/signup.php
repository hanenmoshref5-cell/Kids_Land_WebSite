<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kids land</title>

    <!-- link to file css -->
    <link rel="stylesheet" href="signup.css">

    <!-- icon website -->
    <link rel="icon" href="img/logo for homepage.png">

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

    <p id="p1"> <span id="kk">K</span><span class="ids_and">ids
        <span id="ll">L</span><span class="ids_and">and</span>
        <img src="img/logo for homepage.png" alt="logo" id="img1">
<div id="forshadow"></div>
<div id="forshadow2"></div>
<div class="contener">

<p id="p2">Sign Up</p>
<form action="signup.php" method="post">

<fieldset class="fd1">
<legend class="l">User Name</legend>
<input type="text" id="uname" placeholder="Enter User Name" name="username">  


<font color="red">
<?php
if(isset($_POST['submit'])){
if(empty($_POST['username'])){
echo " ..the user name is requaerd..";

}
else{
    $fullname=test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
        echo "Only letters and white space allowed";
        }
        
}

// $username=($_POST['username']);
// $username=trim($username);   //delete unnecce character line mew line
// $username=stripslashes($username);    //يزيل كلشي سلاش عنا بلأسم
// $username=htmlspecialchars($username);  //يحول تعمليعمات اتش تي ام ال بلاأسم الى رموز لتجنب التهكير من قبل مهاجم
}
?>
</font>

</fieldset>

<fieldset class="fd">
<legend class="l">Password</legend>
<!-- <input type="text" id="password" placeholder="Enter The Password"> <br> -->
<input type="text" id="password2" placeholder="Conferm The Password" name="password">

<font color="red">
<?php
if(isset($_POST['submit'])){
if(empty($_POST['password'])){
echo " ..the password is requaerd..";
}
}
?>
</font>

</fieldset>



<fieldset class="fd">
<legend class="l">Email</legend>
<input type="text" id="email" placeholder="Enter Your Email" name="email">

<font color="red" >
<?php

$emailErr="";

if(empty($_POST["email"])){
    $emailErr=" email is requaert";
  }
  else{
      $email=test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
$emailErr= "Invalid email format";
}
    $email=($_POST["email"]);
  }

echo "$emailErr";

?>
</font>


</fieldset>

<fieldset class="fd">
<legend class="l">Date Of Birth</legend>
<input type="text" id="date" name="date" placeholder="enter your date" >

<font color="red" >
<?php
if(isset($_POST['submit'])){
if(empty($_POST['date'])){
echo " ..the date is requaerd..";
}
}
?>
</font>


</fieldset>


<fieldset class="fd"><br>
<legend class="l">Choose your gender</legend>
<label for="c1" id="l1">Man</label>
<input type="radio" id="c1" name="gender" value="man">
<label for="c2" id="l2">Women</label>
<input type="radio" name="gender" value="women" id="c2">

<font color="red" >
<?php
if(isset($_POST['submit'])){
if(empty($_POST['man']) && empty($_POST['women'])){
echo " ..the gender is requaerd..";
}
}
?>
</font>
</fieldset>


<input type="submit" value="Create account" id="submit" name="submit" >
<input type="reset" value="delet form" id="reset">

</form>
</div>

<!--   here is place   -->


</body>