<?php
  error_reporting(0);
    $a = $_GET["name"];
    $b = $_GET["Designation"];
    $c = $_GET["ID_NO"];
    $d = $_GET["E-mail_NO"];
    $e = $_GET["Phone_NO"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>id card</title>
</head>
<body>
    <h1>Input your Data</h1>
    <form method="GET">
        <label for="">Name :</label>
        <input type="text" name="name" placeholder="Enter Your Full Name"><br><br>
        <label for="">Designation :</label>
        <input type="text" name="Designation" placeholder="Enter Your Designation"><br><br>
        <label for="">ID NO :</label>
        <input type="text" name="ID_NO" placeholder="Enter Your ID NO"><br><br>
        <label for="">E-mail NO:</label>
        <input type="text" name="E-mail_NO" placeholder="Enter Your E-mail NO"><br><br>
        <label for="">Phone NO :</label>
        <input type="text" name="Phone_NO" placeholder="Enter Your Phone NO"><br><br>
       <input type="submit" value="CREATE ID CARD"> 
                    
    </form>
  


    <table border="1" width="30%" align="center">
        <tr>
            <td colspan="2"><?php echo $a; ?></td>
        </tr>
        <tr>
            <td colspan="2"><?php echo $b; ?></td>
        </tr>
        <tr>
            <td>ID NO:</td>
            <td><?php echo $c; ?></td>
        </tr>
        <tr>
        <td>E-mail NO:</td>
        <td><?php echo $d ?></td>
        </tr>
        <tr>
        <td>Phone NO:</td>
        <td><?php echo $e; ?></td>
        </tr>
    </table>
    <button onclick='window.print()'>print</button>
</body>
</html>