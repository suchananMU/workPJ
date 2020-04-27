<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Document</title>



</head>
<body>




        <?php 

            $host = "127.0.0.1";
            $username = "root";
            $password = "usbw"; 
            $database = "hermes";
            $conn = new mysqli(
                $host, $username, $password, $database
            );

            if($conn->connect_errno){
                die("error:". $conn->connect_error);
            }

            $sql = "select * from rooms";
            $result = $conn->query($sql); 
            if($conn->errno){
                die("error :" .$conn->error); 
            }

            $data = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){
                array_push($data, $row);
            }
            
        ?>

    <h1>Main Page</h1>
    <button  class="bg-primary  text-white btn-outline-primary ml-3">start</button>
    <button  class="  text-primary btn btn-outline-white">contact Information</button>
   
    <div class="container-fluid">

            <table  border=2 class="table table-striped ">
                
                    <tr class="text-center">
                        <th class="bg-primary text-white">^</th>
                        <th class="bg-primary text-white">Room Name</th>
                        <th class="bg-primary text-white">Building</th>
                        <th class="bg-primary text-white">Type</th>
                        <th class="bg-primary text-white">View</th>
                        <th class="bg-primary text-white">Price</th>
                        <th class="bg-primary text-white">#Guest</th>
                        <th class="bg-primary text-white">Status</th>
                    </tr>
                
                    <?php foreach($data as $k => $room){ ?>
                    <tr class="text-center">
                        <td><input type="checkbox" id="" name="" value=""></td>
                        <td><?php echo $room['room_name'] ?></td>
                        <td><?php echo $room['room_building'] ?></td>
                        <td><?php echo $room['room_type'] ?></td>
                        <td><?php echo $room['room_view'] ?></td>
                        <td><?php echo $room['room_price'] ?></td>
                        <td><?php echo $room['room_guest'] ?></td>
                        <td><?php echo $room['room_status'] ?></td>
                        
                <?php } ?>
            </table> 
        </div>
        <button  class="bg-white  text-primary btn btn-outline-primary" onclick="window.location.href = 'http://localhost/projec/contec.php';">Next</button>
    </body>
</html>