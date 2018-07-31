<?php
	ob_start();
	session_start();
	include_once 'dbconnect.php';

	if ( isset($_POST['signup']) ) {
		// clean user inputs to prevent sql injections
		$fname =$_POST['fname'];
		$lname =$_POST['lname'];
		$gender  =$_POST['gender'];
		$email =$_POST['email'];
		$username= $_POST['uname'];
		$street=$_POST['street'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];
        if($password==$repassword)
        {
		$query="INSERT INTO users(username,fname,lname,sex,email,street,city,state,password) VALUES('$username','$fname','$lname','$gender','$email','$street','$city','$state','$password')";
		$res=mysql_query($query);
		if($res)
        {
            echo "You may login now";
			header("Location: home.html");
        }
		else
			echo "Not inserted";
    }
    else
        echo "Two passwords do not match";
    }
?>
<style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn,.signupbtn {float:left;width:50%}


.container {
    padding: 16px;
}

.modal {
    display: block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<html>
<body>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="container">
        <label><b>First Name</b></label>
        <input type="text" placeholder="Enter FirstName" name="fname" required>
        <label><b>Lname</b></label>
        <input type="text" placeholder="Enter LastName" name="lname" required>
        <label id="gender"><b>Sex:</b></label>
        <select class="browser-default"  name="gender">
						<option value="" disabled selected>Choose your option</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
		</select>
		<br>
		<br>
        <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
        <label><b>UserName</b></label>
        <input type="text" placeholder="Enter UserName" name="uname" required>
        <div class="address">
            <label><p><b>Address</b></p></label>
            <div class="street">
                <label><b>Street :</b></label>
                <input type="text" placeholder="Enter the street name" name="street"/>
                <label><p><b>City</b></p></label>
                <input type="text" placeholder="Enter the city name" name="city" />
                <label><b>State: </b></label>
                <input type="text" placeholder="Enter the state name" name="state"/>
            </div>
        </div>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="repassword" required>
      
     

      <div class="clearfix">
        <button type="button" href="home.php">Cancel</button>
        
        <button type="submit" name="signup">Sign Up</button>
        <a href="home.html" class="btn btn-sucess">Back to Home Screen</a>
      </div>
    </div>
  </form>
</div>


</body>
</html>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>