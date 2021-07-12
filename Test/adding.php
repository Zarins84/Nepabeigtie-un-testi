<html>
<head>
<body>
       <title>Produktu ievade</title>
  
  
  <?php include 'product.php' ?>
  <a href="http://zarins.atwebpages.com/Test/">Product Menu</a>
    <form method="post">
    <input type="text" name="SKU" id="SKU" placeholder="SKU"><br>
    <input type="text" name="Name" id="Name" placeholder = "Product Name"><br>
    <input type="text" name="Price" id="Price" placeholder="Product Price"><br>
<label>Attribute</label>
<select name="Attribute">
<option value="dvd">DVD</option>
<option value="furniture">Furniture</option>
<option value="book">Book</option>
</select>
<br>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</head>
</html>