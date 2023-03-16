<html>
<head>
    <title>UPDATE STOCK</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
    <script src="inventory.js"></script>
    </head>
    <body>
    <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "2802";
        $database = "inventory";
        $connection = new mysqli($servername,$username,$password,$database);
        $id = $_GET["id"];
        if(isset($_POST['submit'])==false)
        {
        $sel = "select * from stock where sno=$id";
            $result = $connection->query($sel);
            $row = $result->fetch_assoc();
            $sno = $row["SNO"];
            $prodName = $row["PRODUCTNAME"];
            $prodDescription = $row["PRODUCTDESCRIPTION"];
            $qty = $row["QTY"];
            $rate = $row["RATE"];
        }
    ?>
        <h1 align="center">Inventory Management</h1>
        <h3>Update Stock</h3>
    <form method="post" action="update.php?id=<?php echo $id ?>" onsubmit="return validateData()"> 
        <label> Product name:</label><br/>
        <input type="text" name="productName" id="productName" value='<?php echo $prodName ?>'><br/><br/>
        <label> Product description:</label><br/>
        <input type="text" name="productDescription" id="productDescription" value='<?php echo $prodDescription ?>'><br/><br/>
        <label> Quantity:</label><br/>
        <input type="text" name="qty" id="qty" value='<?php echo $qty ?>'><br/><br/>
        <label> Rate:</label><br/>
        <input type="text" id="rate" name="rate" value='<?php echo $rate ?>'><br/><br/>
        <input type="submit" name="submit" value="Update"><br/><br/>
    </form>
            <?php
            if(isset($_POST['submit']))
            {
                    $sql = " update stock set PRODUCTNAME = '".$_POST["productName"]."', PRODUCTDESCRIPTION = '".$_POST["productDescription"]."', qty = ".$_POST["qty"].", RATE = ".$_POST["rate"]." where SNO=".$id;
                    mysqli_query($connection,$sql);
                    header("Location: inventory.php");
                    exit();    
    }
                                    
                    ?>
    </body>
</html>