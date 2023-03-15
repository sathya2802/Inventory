<html>
<head>
    <title>STOCK ADDING</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
    <script src="inventory.js"></script>
    </head>
    <body>
    
        <h1 align="center">Inventory Management</h1>
        <h3>Add New Stock</h3>
    <form method="post" action="add.php" onsubmit="return validateData()"> 
        <label> Product name:</label><br/>
        <input type="text" name="productName" id="productName"><br/><br/>
        <label> Product description:</label><br/>
        <input type="text" name="productDescription" id="productDescription"><br/><br/>
        <label> Quantity:</label><br/>
        <input type="text" name="qty" id="qty"><br/><br/>
        <label> Rate:</label><br/>
        <input type="text" id="rate" name="rate"><br/><br/>
        <input type="submit" name="submit" value="ADD"><br/><br/>
    </form>
            <?php
            if(isset($_POST['submit']))
            {
                $servername = "127.0.0.1";
                $username = "root";
                $password = "2802";
                $database = "inventory";
                    $connection = new mysqli($servername,$username,$password,$database);
                    $sql = "INSERT INTO stock (PRODUCTNAME, PRODUCTDESCRIPTION, qty, RATE) VALUES ('".$_POST["productName"]."','".$_POST["productDescription"]."','".$_POST["qty"]."', '".$_POST["rate"]."')";
                    mysqli_query($connection,$sql);

                    header("Location: inventory.php");
                    exit();    
    }
                                    
                    ?>
    </body>
</html>