<?php
    ob_start();
    session_start();
    include_once 'dbconnect.php';

    if ( isset($_POST['signup']) ) 
    {
        $uname=$_SESSION['username'];
        echo $uname;
        $Roomtype=$_POST['Roomtype'];
        $Packages=$_POST['Packages'];
        $Checkin=$_POST['Checkin'];
        $Checkout=$_POST['Checkout'];
        $extrabeds=$_POST['extrabeds'];
        $qq=$_POST['qq'];
        $quilts=$_POST['quilts'];
        $qq1=$_POST['qq1'];
        $hotwater=$_POST['hotwater'];
        $query="INSERT INTO Booking(bid,uname,roomtype,packages,checkin,checkout,extrabeds,qq,quilts,qq1,hotwater) VALUES('','$uname','$Roomtype','$Packages','$Checkin','$Checkout','$extrabeds','$qq','$quilts','$qq1','$hotwater')";
        $res=mysql_query($query);
        if($res)
        {
            echo "Booking Successfull";
        }
        else
        {
            echo "Error";
        }
    }
    if ( isset($_POST['cancel']) )
    {
        header("Location: cancelbooking.php");
    }

    if ( isset($_POST['logout']) )
    {
        unset($_SESSION['username']);
        session_unset();
        session_destroy();
        header("Location: home.html");
    }
    if ( isset($_POST['feedback']) )
    {
        header("Location: feedback.php");
    }
?>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
    margin: 8px 0;   
}






div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}


.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


.container input {
    position: absolute;
    opacity: 0;
}


.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}


.container:hover input ~ .checkmark {
    background-color: #ccc;
}


.container input:checked ~ .checkmark {
    background-color: #2196F3;
}


.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}


.container input:checked ~ .checkmark:after {
    display: block;
}


.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 72px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 50px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} 
.button3 {background-color: #f44336;} 
.button4 {background-color: #e7e7e7; color: black;} 
.button5 {background-color: #555555;} 
</style>
<body>

<BR><h2><center>BOOKING PAGE</center></h2><br><BR>
<form method="post">
<center><button class="button" name="feedback">Feedback</button>
</form>
<form method="post">
<button class="button button3" name="cancel">Cancel Booking</button>
</form>
<form method="post">
<button class="button button5" name="logout">Logout</button></center><BR><BR>
</form>

<div>
  <form method="post">
    <label for="Roomtype">Room Type</label>
    <select id="Roomtype" name="Roomtype">
      <option value="Standard">Standard</option>
      <option value="Deluxe">Deluxe</option>
      <option value="Executive">Executive</option>
</select>

   
   

<label for="packages">Packages</label>
    <select id="Packages" name="Packages">
      <option value="none">none</option>
      <option value="2 Days + 1 Night">2 Days + 1 Night</option>
      <option value="3 Days + 2 Nights">3 Days + 2 Nights</option>
<option value="3 Days + 3 Nights">3 Days + 3 Nights</option>
<option value="4 Days + 4 Nights">4 Days + 4 Nights</option>
<option value="5 Days + 5 Nights">5 Days + 5 Nights</option>
    </select>

 
    <label for="checkin">Checkin:</label>
    <input type="text" id="ckin" name="Checkin">


    <label for="Checkout">Checkout:</label>
    <input type="text" id="Checkout" name="Checkout">

  <label for="es">Extra Services:</label><br><Br>
<label class="container">Extra beds
  <input type="checkbox" checked="checked" name="extrabeds">
  <span class="checkmark"></span>
</label>

 <label for="qq">No. of beds:</label>
    <input type="text" id="qq" name="qq">

<label class="container">Extra quilts
  <input type="checkbox" name="quilts" >
  <span class="checkmark"></span></label>

 <label for="qq1">No. of quilts:</label>
    <input type="text" id="qq1" name="qq1">


<label class="container">Hot Water service
  <input type="checkbox" name="hotwater">
  <span class="checkmark"></span>
</label>



  
    <button type="submit" name="signup">Submit</button>
  </form>
</div>

</body>
</html>
