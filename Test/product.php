<?
include 'dataB.php';

if (isset($_POST['submit'])) {


        $SKU = $_POST['SKU'];
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Attribute = $_POST['Attribute'];
        
        
        $sql = "INSERT INTO Test (SKU, Name, Price, Attribute) 
        VALUES ('$SKU','$Name','$Price','$Attribute')";

        if ($conn->query($sql) === TRUE) {
            echo "The Product has been added, proceed to the Product menu to see it";
        }else{
            echo "Error";
            mysqli_error($conn);
        }

    }
    
    if(isset($_POST['delete'])) {
     $chk = $_POST['checkbox'];
     foreach($chk as $ID) {
     mysqli_query($conn,"Delete From Test Where ID=".$ID);
     }
     header("Location:index.php");
     }
     mysqli_close($conn);



?>