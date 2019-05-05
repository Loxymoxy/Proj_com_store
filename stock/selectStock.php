<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<form action="selectStock_2.php" method="post"><table>';
        echo '<tr><td>Product ID :</td><td> <input type="text" value="' . $_POST["ProductID"] . '" disabled></td></tr>';
       

        echo '<tr><td>Product Name :</td><td> <input type="text"  name="pname" value="' . $_POST["PName"] . '" disabled></td></tr>';

        echo '<tr><td>Product Detail:</td> <td><input type="text" name="pdetail" value="'.$_POST['PDetail'].'" disabled></td></tr>';

        echo '<tr><td>Brand:</td> <td><input type="text" name="brandid" value="'.$_POST['BrandID'].'" disabled></td></tr>';

        echo '<tr><td>Category ID:</td> <td><input type="text" name="categoryid" value="'.$_POST['CategoryID'].'" disabled></td></tr>';

        echo '<tr><td>Stock ID :</td> <td><input type="text" name="stock_id" value="'.$_POST['StockID'].'" disabled></td></tr>';
        echo '<input name="stockid" type="hidden" value="' . $_POST["StockID"] . '">';

        echo '<tr><td>Price :</td> <td><input type="text" name="price" value="'.$_POST['Price'].'" disabled></td></tr>';


        echo '<tr><td>Unit :</td><td><input type="number" name="unit" value="'.$_POST["Unit"].'" ></td></tr>';

        echo '<tr><td><input type="submit" value="Submit"></td></form>';
        echo '<td><form action="productStock.php"> <input type="submit" value="Cancle"></td></tr></table>';
    } else {
        header('location:../');
    }
    ?>
</body>
</html>

