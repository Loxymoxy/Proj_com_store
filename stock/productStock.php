<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<?php
$connect = mysqli_connect('localhost','root','','computerstore');
$sql = 'SELECT ProductID,PName,PDetail,BrandID,CategoryID,StockID,Price,Unit 
FROM  product ,stock
where product.PStockID = stock.StockID'; 

$result = mysqli_query($connect, $sql);
if (!$result) {
    echo mysqli_error($connect) . '<br>';
    die('Can not access database!');
} else {
    $numrow = mysqli_num_rows($result);
    if ($numrow == 0)
        echo '<center><h3>Not found</h3></center>';

    else {
        echo '<table border = "1">';
        echo '<th>Product ID</th><th>Product Name</th><th>Product Detail</th>
    <th>Brand ID</th><th>Category ID</th><th>Stock ID</th><th>Price</th><th>Unit</th><th>#Select</th>';
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<form action="selectStock.php"method="post"><tr>';
            while (list($key, $value) = each($row)) {
                echo '<td><input type="hidden" name="'.$key.'" value="'.$value.'">' . $value . '</td>';
            }
            echo '<td><input type="submit" value="select"></td></form>';
        
        }
        echo '</table><br><br>';
    }

    echo '<a href="../">Back</a>';
    mysqli_close($connect);
}

?>
</body>
</html>
