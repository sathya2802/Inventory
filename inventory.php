<html>

<head>

<meta http-equiv="Cache-Control" content="no-store" />
    <title>INVENTORY</title>
    <link rel="stylesheet" type="text/css" href="style.css">  
    <script src="inventory.js"></script>
    </head>
    <body>
    
        <h1 align="center">Inventory Management</h1>
        
        <input type="button" name="submit" onclick="addNew()" value="ADD"><br/><br/>
        <table align="center">
            <div>
                <tr>
                    <th>SNO</th>
                    <th>PRODUCTNAME</th>
                    <th>PRODUCTDESCRIPTION</th>
                    <th>QTY</th>
                    <th>RATE</th>
                    <th>TOTAL_QTY</th>
                    <th>TOTAL_PRICE</th>
                    <th>ACTIONS</th>
                </tr>
            </div>
            <div>
                <tbody>
                    
                    <?php
                    $servername = "127.0.0.1";
                    $username = "root";
                    $password = "2802";
                    $database = "inventory";
                    $connection = new mysqli($servername,$username,$password,$database);
                    $TQ = "select SNO,PRODUCTNAME,PRODUCTDESCRIPTION,qty,RATE, (qty) as TOTAL_QTY,(qty*RATE) as TOTAL_PRICE from stock";
                    $result = $connection->query($TQ);

                    while($row = $result->fetch_assoc()){
                        //$editLink = "<a href='update.php?id=".$row[SNO]."'>edit</a></td>";
                    echo"
                <tr>
                    <td>$row[SNO]</td>
                    <td>$row[PRODUCTNAME]</td>
                    <td>$row[PRODUCTDESCRIPTION]</td>
                    <td>$row[qty]</td>
                    <td>$row[RATE]</td>
                    <td>$row[TOTAL_QTY]</td>
                    <td>$row[TOTAL_PRICE]</td>
                    <td><a href='update.php?id=$row[SNO]'>edit</a>
                    <a href='delete.php?id=$row[SNO]'>delete</a>
                    </td>
                </tr>";
                }
                    ?>
                    
            </tbody>
            </div> 
        </table>
    </body>
</html>