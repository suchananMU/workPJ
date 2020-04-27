<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<?php
    
    error_reporting(1);
    $host = "127.0.0.1";
    $dbname = "hermes";
    $username ="root";
    $passwd = "usbw";

    $conn = new mysqli($host,$username,$passwd,$dbname);
    if($conn->connect_errno){
        die("error".$conn->connect_error);
        //exit();
    }
    mysqli_set_charset($conn, "utf8mb4");
?>

</head>
<body>
    <h1>Add Page</h1>
    <h2> <a href="index.php">หนัาหลัก</a> <a href="add.php">เพิ่มข้อมูล</a>    <a href="search.php">ค้นหาข้อมูล</a>    <a href="edit.php">แก้ไขข้อมูล</a>    <a href="del.php">ลบข้อมูล</a></h2>
    <form action="add.php" method="get">
        <table>
            <tr>
                <th>รหัสเมนู</th>
                <td><input type="text" name="menu_id" 
                    value="" required pattern="[m][0-9]{4}"
                    /></td>
            </tr>
            <tr>
                <th>ชื่อเมนู</th>
                <td><input type="text" name="menu_name" required  maxlength="50" value=""/></td>
            </tr>
            <tr>
                <th>ประเภทอาหาร</th>
                <td>
                <select required  name="menu_type">
                    <option value="1">อาหารคาว</option>
                    <option  value="2">อาหารหวาน</option>
                    <option  value="3">อาหารว่าง</option>
                </select>
                </td>
            </tr>
            <tr>
                <th>ราคา</th>
                <td><input type="number" name="menu_price" maxlength="4" min=0 max=9999 value=""/></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="เพิ่มข้อมูล" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>