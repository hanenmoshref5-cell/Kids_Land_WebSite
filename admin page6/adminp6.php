
<!----الخطوة الاولى كانت مشان اذا بدي ضيف منتج وارفع معلوماتو على قاعدة البيانات -->
<br><br><br>
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

// حذف المنتج
if (isset($_POST['delete'])) {
    $product_id = $_POST['product_id'];
    $sql = "UPDATE `discounts-prodact` SET visible = 0 WHERE idd = $product_id";
    if ($conn->query($sql) === TRUE) {
        echo "Product has been hidden successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// عرض  المنتج المحذوف
if (isset($_POST['displaypro'])) {
    $product_id = $_POST['product_id'];
    $sql = "UPDATE `discounts-prodact` SET visible = 1 WHERE idd = $product_id";
    if ($conn->query($sql) === TRUE) {
        echo "Product has been display successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// تحديث سعر المنتج
if (isset($_POST['update'])) {
    $product_id = $_POST['product_id'];
    $new_price = $_POST['new_price'];
    $sql = "UPDATE `discounts-prodact` SET cell = '$new_price' WHERE idd = $product_id";
    if ($conn->query($sql) === TRUE) {
        echo "Product price has been updated successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}

// جلب جميع المنتجات
$sql = "SELECT * FROM `discounts-prodact`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Products</title>
</head>
<body>
    <h1>Admin - Manage Products</h1>
    <table border="1">
        <tr>
            <th>Product Name</th>
            <th>Price after discount</th>
            <th>Price before Discount</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['prag']); ?></td>
            <td><?php echo htmlspecialchars($row['cell']); ?>$</td>
            <td><?php echo htmlspecialchars($row['del']); ?>$</td>
            <td><img src="<?php echo htmlspecialchars($row['img']); ?>" width="100"></td>
            <td>
            <form action="adminp6.php" method="POST" enctype="multipart/form-data"> 
                    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($row['idd']); ?>">
                    <input type="text" name="new_price" placeholder="New Price" min="0" step="0.01">
                    <input type="submit" name="update" value="Update Price">
                    <input type="submit" name="delete" value="Hide Product">
                    <input type="submit" name="displaypro" value="display Product">
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>


<style>

body{
    background-color: #dfd8d0;

}



</style>