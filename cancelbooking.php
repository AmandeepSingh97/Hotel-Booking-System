<?php
    ob_start();
    session_start();
    include_once 'dbconnect.php';
    $uname=$_SESSION['username'];
    if ( isset($_POST['cancel']) ) 
    {
        $bid=$_POST['bid'];
        $query="DELETE from Booking WHERE bid='$bid' and uname='$uname'";
        $res=mysql_query($query);
        $query="SELECT * from Booking Where bid='$bid'";
        $res=mysql_query($query);
        $count=mysql_num_rows($res);
        if($count==0)
        {
            echo "Deleted";
            header("Location: bookingpage.php");
        }
        else
        {
            echo "Wrong Booking ID";
        }
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
</style>
<body>

<BR><h2><center>CANCEL BOOKING</center></h2><br><BR>

<div>
  <form method="post">
    <label for="aa">Enter Booking ID:</label>
    <input type="text" id="aa" name="bid">
  
    <button type="submit" name="cancel">Submit</button>
  </form>
</div>

</body>
</html>
