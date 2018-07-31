<?php
    ob_start();
    session_start();
    include_once 'dbconnect.php';
    if ( isset($_POST['signup']) ) 
    {
        $uname=$_SESSION['username'];
        $feedback1=$_POST['feedback'];
        $Ratings=$_POST['Ratings'];
        $query="INSERT INTO feedback(fid,uname,feedback1,rating) VALUES('','$uname','$feedback1','$Ratings')";
        $res=mysql_query($query);
        if($res)
        {
            echo "Thanks for your feedback";
        }
        else
        {
            echo "Error";
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

<BR><h3><center>FEEDBACK</center></h3><br><BR>

<div>
  <form method="post">

   <label for="fdfk">Enter your feedback message here:</label>
    <input type="text" name="feedback">

    <label for="Ratings">Ratings</label>
    <select id="Ratings" name="Ratings">
      <option value="1">1.</option>
      <option value="2">2.</option>
      <option value="3">3.</option>
<option value="4">4.</option>
<option value="5">5.</option>
    </select>
  
    <button type="submit" name="signup">Submit</button>
  </form>
</div>

</body>
</html>
