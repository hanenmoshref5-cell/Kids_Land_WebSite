<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kids land</title>

    <!-- link to file css -->
    <link rel="stylesheet" href="productspage5.css">

    <!-- icon website -->
    <link rel="icon" href="img/logo/logo.jpg">

    <!-- some font family implemented -->
    <!-- 1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Matemasie&display=swap" rel="stylesheet">
    
<!-- 2 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <!-- import some image icon like search-->

  <!-- 1 search icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- jps icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- favorit icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   
    <!-- your previous orders icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  

    <!-- view current cart icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  
        <!-- add to cart -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
     
        <!-- add to my favorit products -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
       
        <!-- bed icon -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        

        <!-- food -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        


        <!-- game  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        

        <!-- cloths -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

       


        <!-- stroller -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

       

        <!-- order -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

        
           

</head>


<body>


<div class="headd">

<p id="p1"> <span id="kk">K</span><span class="ids_and">ids
<span id="ll">L</span><span class="ids_and">and</span>

<img src="img/logo for homepage.png" alt="logo" id="aaaa2">
</p>

<span class="material-symbols-outlined" id="icon3">
    favorite
    </span>
<button id="button1"> 
<span id="p2">favorite <br>view</span>
</button>


<span class="material-symbols-outlined" id="icon4">
    shopping_bag
    </span>
<button id="button2">
        <span id="p2"> your previous <br> orders</span>
</button>



<span class="material-symbols-outlined" id="icon5">
    shopping_cart
    </span>
<button id="button3">
<span id="p2">view current <br> cart </span>
</button>



<div class="search">
<input type="text" id="boxsearch" placeholder="search about type..." >
<span id="searchicon" class="material-symbols-outlined">
    search
    </span>
</div>


<span class="material-symbols-outlined" id="icon2">
    location_on
    </span> 

<select name="" id="" >
<option value="" selected id="adress">
     select place of delivary</option>

<option value="">almazeh</option>
<option value="">share bagdad</option>
<option value="">almedan</option>
<option value="">alzahera</option>
<option value="">kfrsoseh</option>



</select>

</div>
</body>
<!-- ------------------------------------------------ -->

<p id="p3">Products Have Discounts:</p>

<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kids-land-data";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// جلب المنتجات المرئية فقط
$sql = "SELECT * FROM `discounts-prodact` WHERE visible = 1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
</head>
<body>
    <div class="discounts" style="display: flex; flex-direction: row; overflow: hidden; position: relative;">

        <?php while ($row = $result->fetch_assoc()): ?>
        <div class="dis">
           

         <img class="img1" src="<?php echo $row['img']; ?>" alt="Product Image" width="100"> 


            <p class="prag"><?php echo $row['prag']; ?></p>

            <button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button>
            <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button>

            <span class="cell"> <?php echo $row['cell']; ?></span>
            <br>
            <?php if ($row['del']): ?>
            <span  class="del"> <del><?php echo $row['del']; ?></span></del> 
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <div class="slider-prev" onclick="changeSlide(-1)">&#10094;</div>
        <div class="slider-next" onclick="changeSlide(1)">&#10095;</div>
    </div>

    <script src="prodactspage5.js"></script>
</body>
</html>
<?php
$conn->close();
?>

<!-- ---------------------------------------------- -->
 
<p class="p4">what are you looking fore in our wibsite: </p>



<br><br>
<button class="bed" onclick=" document.location='#x2' " > <span class="material-symbols-outlined">bed</span></button> 
<button class="food" onclick=" document.location='#x3' "  ><span class="material-symbols-outlined">restaurant</span></button> 
<button class="cloths" onclick=" document.location='#x6' "> <span class="material-symbols-outlined">apparel</span></button>
<button class="toys" onclick=" document.location='#x4' "><span class="material-symbols-outlined">toys</span></button>
<button class="stroller" onclick=" document.location='#x1' "> <span class="material-symbols-outlined">child_friendly</span></button>
<button class="dilevery" onclick=" document.location='#x7' "><span class="material-symbols-outlined">directions_bike</span></button>

<p id="par1">bed</p>
<p id="par2">food seat</p>
<p id="par3"> cloths</p>
<p id="par4"> toys</p>
<p id="par5"> stroller</p>
<p id="par6">free dilevery</p>

<br><br><br>
<!-- ------------------------------- -->
<p class="p4" >Baby Stroller Section:</p>

<div class="Discounts2" id="x1">
    <div class="dis2"><img src="img/عربايات/img1 150$ 110$.jpeg" alt="" class="img1"> <p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br><span class="del"><del>150$</del></span></p></div>
    <div class="dis2"><img src="img/عربايات/img2 170$ 130$.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 130$</span> <br><span class="del"><del>170$</del></span></p></div>
    <div class="dis2"><img src="img/عربايات/img3 140$ 120$.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br><span class="del"><del>140$</del></span></p></div>
    <div class="dis2"><img src="img/عربايات/img4.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 180$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img5.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img6.jpeg" alt="" class="img1"><p> <span class="prag">colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 100$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img7.jpeg" alt="" class="img1"><p> <span class="prag">colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img8.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 160$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img9.jpeg" alt="" class="img1"><p> <span class="prag">colorful baby stroller </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 150$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img10.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img11.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
    <div class="dis2"><img src="img/عربايات/img12.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
    <div class="slider-prev2" onclick="changeSlide2(-1)">&#10094;</div>
    <div class="slider-next2" onclick="changeSlide2(1)">&#10095;</div>
   </div>

<!-- --------------------- -->
<p id="p3">bed for children:</p>
<div class="Discounts3" id="x2">
 <div class="dis3"><img src="img/باركات/img4.jpeg" alt="" class="img1"> <p> <span class="prag"> bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
 <div class="dis3"><img src="img/باركات/img5.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 130$</span> <br></p></div>
 <div class="dis3"><img src="img/باركات/img6.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
 <div class="dis3"><img src="img/باركات/img1 200$180$.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 180$</span> <br><span class="del"><del>190$</del></span></p></div>
 <div class="dis3"><img src="img/باركات/img2 190$ 140$.jpeg" alt="" class="img1"><p> <span class="prag"> bed for childen</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br><span class="del"><del>150$</del></span></p></div>
 <div class="dis3"><img src="img/باركات/img3 90$ 60$.jpeg" alt="" class="img1"><p> <span class="prag">bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br><span class="del"><del>90$</del></span></p></div>
 <div class="dis3"><img src="img/باركات/img7.jpeg" alt="" class="img1"><p> <span class="prag">bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 150$</span> <br></p></div>
 <div class="dis3"><img src="img/باركات/img8.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 80$</span> <br></p></div>
 <div class="dis3"><img src="img/باركات/img9.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br></div>
 <div class="dis3"><img src="img/باركات/img10.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
 <div class="dis3"><img src="img/باركات/img11.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
 <div class="dis3"><img src="img/باركات/img12.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
 <div class="slider-prev3" onclick="changeSlide3(-1)">&#10094;</div>
 <div class="slider-next3" onclick="changeSlide3(1)">&#10095;</div>

</div>

<!-- ------------------------------------------------------------ -->
<p id="p3">stove for food:</p>
<div class="Discounts4" id="x3">
 <div class="dis4"><img src="img/كراسي طعام/img4.jpeg" alt="" class="img1"> <p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img5.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 130$</span> <br></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img6.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img7.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 180$</span> <br></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img8.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img9.jpeg" alt="" class="img1"><p> <span class="prag">stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img1 60$ 50$.jpeg" alt="" class="img1"><p> <span class="prag">stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br><span class="del"><del>60$</del></span></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img2 70$ 60$.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br><span class="del"><del>70$</del></span></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img3 70$ 50$.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br><span class="del"><del>70$</del></span></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img10.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 20$</span> <br></span></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img11.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br></p></div>
 <div class="dis4"><img src="img/كراسي طعام/img12.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br></p></div>
 <div class="slider-prev4" onclick="changeSlide4(-1)">&#10094;</div>
 <div class="slider-next4" onclick="changeSlide4(1)">&#10095;</div>
</div>
 <!-- -------------------------------- -->

 <p id="p3">game children scotter:</p>
 <div class="Discounts5" id="x4">
  <div class="dis5"><img src="img/سكوترات/img2.jpeg" alt="" class="img1"> <p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img3.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 130$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img4.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img5.jpeg" alt="" class="img1"><p> <span class="prag">game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 180$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img6.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img7.jpeg" alt="" class="img1"><p> <span class="prag">game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br></div>
  <div class="dis5"><img src="img/سكوترات/img8.jpeg" alt="" class="img1"><p> <span class="prag">game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img9.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img10.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img1 40$ 20$.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 20$</span> <br><span class="del"><del>40$</del></span></p></div>
  <div class="dis5"><img src="img/سكوترات/img11.jpeg" alt="" class="img1"><p> <span class="prag">game children scotter </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br></p></div>
  <div class="dis5"><img src="img/سكوترات/img12.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br></p></div>
  <div class="slider-prev5" onclick="changeSlide5(-1)">&#10094;</div>
  <div class="slider-next5" onclick="changeSlide5(1)">&#10095;</div>
 </div>

<!-- ----------------------------------------------------- -->

<p id="p3">games for children:</p>
<div class="Discounts6" id="x5">
    <div class="dis6"><img src="img/العاب اطفال/img 10.jpeg" alt="" class="img1"> <p> <span class="prag"> games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img 11.jpeg" alt="" class="img1"><p> <span class="prag"> games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 130$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img2.jpeg" alt="" class="img1"><p> <span class="prag"> games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img3.jpeg" alt="" class="img1"><p> <span class="prag"> games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 180$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img4.jpeg" alt="" class="img1"><p> <span class="prag"> games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img5.jpeg" alt="" class="img1"><p> <span class="prag">games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img6.jpeg" alt="" class="img1"><p> <span class="prag">games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img7.jpeg" alt="" class="img1"><p> <span class="prag"> games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img8.jpeg" alt="" class="img1"><p> <span class="prag"> games for children  </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img9.jpeg" alt="" class="img1"><p> <span class="prag"> games for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 20$</span> <br></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img1 20$ 10$.jpeg" alt="" class="img1"><p> <span class="prag"> games for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br><span class="del"><del>20$</del></span></p></div>
    <div class="dis6"><img src="img/العاب اطفال/img12.jpeg" alt="" class="img1"><p> <span class="prag"> games for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br></p></div>
    <div class="slider-prev6" onclick="changeSlide6(-1)">&#10094;</div>
    <div class="slider-next6" onclick="changeSlide6(1)">&#10095;</div>
   </div>
  

   <!-- ----------------------------------------------------------------------- -->
   <p id="p3">cloths for children :</p>
   <div class="Discounts7" id="x6">
    <div class="dis7"><img src="img/ملابس اطفال/img2.jpeg" alt="" class="img1"> <p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img3.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 130$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img4.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img5.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 180$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img6.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img7.jpeg" alt="" class="img1"><p> <span class="prag">cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img8.jpeg" alt="" class="img1"><p> <span class="prag">cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img9.jpeg" alt="" class="img1"><p> <span class="prag">cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img10.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children  </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img11.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 20$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img12.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children  </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br></p></div>
    <div class="dis7"><img src="img/ملابس اطفال/img1 20$ 10$.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br><span class="del"><del>20$</del></span></p></div>
    <div class="slider-prev7" onclick="changeSlide7(-1)">&#10094;</div>
    <div class="slider-next7" onclick="changeSlide7(1)">&#10095;</div>
   </div>


   <!--------------------------------------------------- -->

   <p id="p3">Products Have free dilevery:</p>
   <div class="Discounts8" id="x7">
    <div class="dis8"><img src="img/عربايات/img1 150$ 110$.jpeg" alt="" class="img1"> <p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br><span class="del"><del>150$</del></span></p></div>
    <div class="dis8"><img src="img/عربايات/img2 170$ 130$.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 130$</span> <br><span class="del"><del>170$</del></span></p></div>
    <div class="dis8"><img src="img/عربايات/img3 140$ 120$.jpeg" alt="" class="img1"><p> <span class="prag"> colorful baby stroller</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 120$</span> <br><span class="del"><del>140$</del></span></p></div>
    <div class="dis8"><img src="img/باركات/img1 200$180$.jpeg" alt="" class="img1"><p> <span class="prag"> bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 180$</span> <br><span class="del"><del>190$</del></span></p></div>
    <div class="dis8"><img src="img/باركات/img2 190$ 140$.jpeg" alt="" class="img1"><p> <span class="prag"> bed for childen</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 110$</span> <br><span class="del"><del>150$</del></span></p></div>
    <div class="dis8"><img src="img/باركات/img3 90$ 60$.jpeg" alt="" class="img1"><p> <span class="prag">bed for children</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br><span class="del"><del>90$</del></span></p></div>
    <div class="dis8"><img src="img/كراسي طعام/img1 60$ 50$.jpeg" alt="" class="img1"><p> <span class="prag">stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br><span class="del"><del>60$</del></span></p></div>
    <div class="dis8"><img src="img/كراسي طعام/img2 70$ 60$.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 60$</span> <br><span class="del"><del>70$</del></span></p></div>
    <div class="dis8"><img src="img/كراسي طعام/img3 70$ 50$.jpeg" alt="" class="img1"><p> <span class="prag"> stove for food </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 50$</span> <br><span class="del"><del>70$</del></span></p></div>
    <div class="dis8"><img src="img/سكوترات/img1 40$ 20$.jpeg" alt="" class="img1"><p> <span class="prag"> game children scotter</span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 20$</span> <br><span class="del"><del>40$</del></span></p></div>
    <div class="dis8"><img src="img/العاب اطفال/img1 20$ 10$.jpeg" alt="" class="img1"><p> <span class="prag"> games for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br><span class="del"><del>20$</del></span></p></div>
    <div class="dis8"><img src="img/ملابس اطفال/img1 20$ 10$.jpeg" alt="" class="img1"><p> <span class="prag"> cloths for children </span> <br><br><button class="add-to-card"><span class="material-symbols-outlined" id="icon6">add_shopping_cart</span></button> <button class="add-to-favorit"> <span class="material-symbols-outlined" id="icon7">heart_plus</span></button><span class="cell"> 10$</span> <br><span class="del"><del>20$</del></span></p></div>
    <div class="slider-prev8" onclick="changeSlide8(-1)">&#10094;</div>
    <div class="slider-next8" onclick="changeSlide8(1)">&#10095;</div>
    </div>
<br>
<hr>
<br>
        
    </body>

