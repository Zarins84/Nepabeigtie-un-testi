<html>
<head>
<title>Product</title>
<a href="http://zarins.atwebpages.com/Test/adding.php">Add a product</a>
<a style="text-align: right"><input type="submit" name="delete" id="delete" value="Delete Records"></a>
<?php
include "dataB.php";

$sql = "SELECT * FROM Test";
$result = $conn-> query ($sql);

if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
        $SKU = $row['SKU'];
        $Name = $row['Name'];
        $Price = $row['Price'];
        $Attribute = $row['Attribute'];
        $ID = $row['ID'];
        ?>
        <div style="width: 300px; float:left; height:300px; background:lime; margin:50px; text-align: center">
        <input type='checkbox' name='checkbox[]' value='<?php $ID ?>'>
        <h1><?php echo $SKU ?></h1>
        <h1><?php echo $Name ?></h1>
        <h1><?php echo $Price ?></h1>
        <h1><?php echo $Attribute ?></h1></div>
        
        <?php
        }
}else {
        echo "No results";
}
$conn-> close();
?>
</head>
</html>