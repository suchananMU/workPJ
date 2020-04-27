<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.5.0.min.js"></script>
    <style>
    input[type=text ] {
     width: 30%;
     padding: 5px 5px;
     margin: 1px 0;
     box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #3366cc;
    }
    input[type=text1] {
     width: 15%;
     padding: 5px 5px;
     margin: 1px 0;
     box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #3366cc;
    }
    input[type=text2] {
     width: 90%;
     padding: 5px 5px;
     margin: 1px 0;
     box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #3366cc;
    }
    select[class=custom-select] {
     width: 30%;
     padding: 5px 5px;
     margin: 1px 0;
     box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #3366cc;
    }
    
    </style>

    <script>
   
    
    
    </script>
</head>
<body>
<h1>Main Page</h1>
    <button  class="  text-primary btn btn-outline-white  ml-3">start</button>
    <button  class="bg-primary  text-white btn-outline-primary">contact Information</button>
    <br>
<button  class="bg-white  text-primary btn btn-outline-primary " onclick="window.location.href = 'http://localhost/projec/addbooking.php';">Previous</button>
<button  class="bg-white  text-primary btn btn-outline-primary  ml-9" onclick="window.location.href = 'http://localhost/projec/contec.php';">Next</button>
<br>
<br>
<div class="row">
    <div class="col-sm-4">
  <label class=text-primary>code</label> <br>
  <input type="text1" id="idcode" name="code"><br>
  <label class=text-primary>First Name</label> <br>
  <input type="text" id="fname" name="Firstname"><br>
  <label class=text-primary>Mobile Phone</label> <br>
  <input type="text" id="MBnum" name="phone"><br>
   </div>
  <div class="col-sm-4">
  <label class=text-primary>Agency</label><br> 
  <select class="custom-select" id="inputGroupSelect01"><br>
    <option selected>Choose...</option>
    <option value="1">Walk In</option>
    <option value="2">By Phone</option>
    <option value="3">Booking</option>
    <option value="3">Olympusintech</option>
  </select><br>
  <label class=text-primary>Last Name</label> <br>
  <input type="text" id="Lname" name="Lastname"><br>
  <label class=text-primary>Email</label> <br>
  <input type="text" id="idmail" name="mail"><br>  
    </div>
</div>
<div class="row">
<div class="col-sm-6">
  <label class=text-primary>Note</label> <br>
  <input type="text2" id="idcode" name="code"><br>
   </div>
   </div>

  
    
    

  
    
    

    
</body>
</html>