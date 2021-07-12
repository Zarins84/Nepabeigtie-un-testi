<?php
include 'dataB.php';
?>
<head>
<link rel="shortcut icon" href="https://cdn1.iconfinder.com/data/icons/material-design-icons-light/24/settings-512.png">
</head>

<body>
<title>tests</title>
<div id="main">
<?php
include 'upgrade.html';
$sql = "SELECT * from person";
$result = mysqli_query($conn, $sql);
$userdata = array();

if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
                $userdata[] = $row;
        }
}
?>
<select>
        <option selected="selected">Izvēlēties</option>
        
<?php
foreach($userdata as $data){
        echo "<option value=" . $data['Klienta_ID'] . ">" . $data['Vards'] . " " . $data['Uzvards'] . "</option>";
     }
     
?>

</select>

<h2 id="header"></h2>

<script>
$('select').change(function() {

        var select = $(this).val();
        console.log(select);
        
));
</script>
</div>
</body>