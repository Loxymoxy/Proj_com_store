<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

  require_once("../validation/validate.php");
  $Unit=$_POST["unit"];

  $UnitResult=validateUnit($Unit);


if($UnitResult){
$connect = mysqli_connect("localhost","root","","computerstore");
$sql = 'UPDATE stock 
SET Unit ="'.$_POST["unit"].'" 
WHERE StockID = "'.$_POST["stockid"].'"';

$result = mysqli_query($connect,$sql);


if(!$result){
    echo mysqli_error($connect).'<br>';
    die('Can not access database');
}else
    echo 'Edit Successful.<br><a href="productStock.php">Back</a>';
}else{
showStockUnitResult($UnitResult);
echo '<table border="1"><tr><td>Select Fail.</td></tr></table><a href="../">Product List</a>';

}


}else{
header("location:../");
}
?>
</body>
</html>




