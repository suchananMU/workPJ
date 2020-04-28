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
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="http://localhost/projec/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#"></a> Reservation</li>
      </ol>
    </nav>
    <button  class="  text-primary btn btn-outline-white  ml-3">start</button>
    <button  class="bg-primary  text-white btn-outline-primary">contact Information</button>
    <button  class="  text-primary btn btn-outline-white">Guest Information</button>
    <br>
<button  class="bg-white  text-primary btn btn-outline-primary " onclick="window.location.href = 'http://localhost/projec/contec.php';">Previous</button>
<button  class="bg-white  text-primary btn btn-outline-primary  ml-9" onclick="window.location.href = 'http://localhost/projec/Guest_infor.php';">Next</button>
<br>
<br>
<div class="row">
    <div class="col-sm-2">
        
    </div>
    <div class="col-sm-2">
      <label class=text-primary>First Name</label> <br>
      <input type="text" id="fname" name="Firstname"><br>
      <label class=text-primary>Room Price</label> <br>
      <input type="text" id="rprice" name="rprice"><br>
    </div>
    <div class="col-sm-2">
      <label class=text-primary>Last Name</label> <br>
      <input type="text" id="Lname" name="Lastname"><br>
      <label class=text-primary>With Breakfast</label><br> 
        <select class="custom-select" id="inputGroupSelect01"><br>
          <option selected>Choose...</option>
          <option value="1">included</option>
          <option value="2">not included</option>
        </select><br> 
    </div>
    <div class="col-sm-2">
      <label class=text-primary>BF Pricel</label> <br>
      <input type="text" id="idbfp" name="bfprice">0.00<br> 
    </div>
    <div class="col-sm-2">
      <label class=text-primary>Phone</label><br> 
      <input type="text" id="phonenum" name="phone"><br>  
      <label class=text-primary>Total Price</label> <br>
      <input type="text" id="idTprice" name="tprice"><br>  
    </div>

</div>
<div class="row">
<div class="col-sm-6">
  <label class=text-primary>With Breakfast</label> <br>
  <input type="text" id="bf" name="bf"><br>
   </div>
   </div>

  
    
    

  
    
    

    
</body>
</html>
