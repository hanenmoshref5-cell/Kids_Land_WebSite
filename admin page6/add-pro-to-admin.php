<?php
// إعدادات الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kids-land-data";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التحقق من استلام البيانات بعد إرسال النموذج
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_name = $_POST['prag']; // اسم المنتج
    $price_after_discount = $_POST['cell']; // السعر بعد الخصم
    $price_before_discount = $_POST['del']; // السعر قبل الخصم (يمكن أن يكون فارغًا)
    $idd = $_POST['idd'];


    // إعدادات رفع الصورة
    $target_dir = "uploads/";  // مجلد تخزين الصور
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // التحقق من أن الملف المرفوع هو صورة
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // التحقق من حجم الملف (2 ميجا بايت كحد أقصى)
    if ($_FILES["img"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // السماح بأنواع معينة من الملفات فقط
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
        $uploadOk = 0;
    }

    // إذا كان الرفع صحيحًا، يتم رفع الصورة وإدخال البيانات في قاعدة البيانات
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {


            // استعلام إدخال البيانات في قاعدة البيانات
            $sql = "INSERT INTO `discounts-prodact` (idd, prag, cell, del, img) 
            VALUES ('$idd', '$product_name', '$price_after_discount', '$price_before_discount', '$target_file')";

            if ($conn->query($sql) === TRUE) {
                echo "Product has been added successfully.";
            // إعادة توجيه إلى نفس الصفحة لتفريغ البيانات
            header("Location: " . $_SERVER['PHP_SELF']);
            exit(); // تأكد من استخدام exit بعد header

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // إغلاق الاتصال بقاعدة البيانات
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>Add New Product</h1>
    <form action="add-pro-to-admin.php" method="POST" enctype="multipart/form-data" >


        <label for="idd">Product id:</label><br>
        <input id="a1" type="number" id="idd" name="idd" required><br>

        <label for="prag">Product Name:</label><br>
        <input  id="a1" type="text" id="prag" name="prag" required><br>


        <label for="cell">Price after discount:</label><br>
        <input id="a1" type="text" id="cell" name="cell" required><br>

        <label for="del"> Price before discount:</label><br>
        <input  id="a1" type="text" id="del" name="del"><br>

        <label for="img1">Upload Image:</label><br>
        <input  id="a2" type="file" id="img1" name="img" required><br><br>

        <input id="a3" type="submit" value="Add Product">
    </form>
    
</body>
</html> 

<style>


h1{
padding-left: 30px;
padding-top: 60px;
padding-bottom: 20px;
color: black;
font-family: cursive;
}

body{
    background-color: #dfd8d0;

}

form{

    margin: 30px 0px 0px 30px;
font-family: cursive;
font-size: larger;

}

#a1{


    width: 200px;
    height: 20px;
    background-color: #ede7e7;
    border-radius: 19px;
    border-width: 1px;
    border-color: #00000066;
    box-shadow: 0px 0px 6px indianred;
    margin: 8px 0px 13px 86px;


}




#a3{

    margin: 36px 0px 0px 89px;
        height: 33px;
        width: 190px;
        border-radius: 3px;
        border-width: 1px;
        border-color: #ff8a8a60;
        box-shadow: 0px 0px 117px indianred;
        background: linear-gradient(to right, #9a7467d9, #a59090); 
}


#a3:hover{
    box-shadow: 0px 0px 20px rgb(231, 165, 187),0px 0px 60px lightblue;
    background: linear-gradient(to right, #8ba7ced9 ,  #8ba7ced9 ); 
}




</style>