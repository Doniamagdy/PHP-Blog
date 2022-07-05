<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registeration Form</title>
	<link rel="stylesheet" href="links.css">
</head>

<body>
	       <h1>Dardasha Blog</h1>
	       <h2> Welcome to Dardasha </h2>

       <style>

                     body {
                        background-image: url('untitled5.png');
                        }
                     body {
              font-family: "Papyrus", "fantasy";
                        }

       </style>


        <form  align="center" method="post" action="<?php $_PHP_SELF ?>">
        <font size="4" face="Georgia, serif"><b> Create an account</b></font><br><br>

	    First Name:   <input   type="text" name="firstname" pattern="[a-zA-Z0-9]+" placeholder="Write your first name"><br><br>
	    Last Name:    <input   type="text" name="lastname" pattern="[a-zA-Z0-9]+" placeholder="Write your last name"><br><br>
	    Address:      <input   type="text" name="address" pattern="[a-zA-Z0-9]+" placeholder="Write your address"><br><br>
	    Email:        <input   type="email" name="email"  placeholder="Write your email"><br><br>
	    Password:     <input   type="password" name="password" placeholder="password" ><br><br>
	 
	 <button name="create" type="submit" >Create an account</button><br><br>
	 <font size="3" face="Georgia, serif"><b>Already have an account?</b></font><a href="login.php">login </a> <br><br>
        </form>
        <center>

	<?php 

       include 'config.php';
 
       echo "<br>";

       if (isset($_POST['create'])){
	    $firstname=$_POST['firstname'];
	    $lastname=$_POST['lastname'];
	    $address=$_POST['address'];
	    $email=$_POST['email'];
	    $password=$_POST['password'];

        $query="insert into users(firstname,lastname,address,email,password) values('$firstname','$lastname','$address','$email','$password')";
	    if(mysqli_query($conn,$query)){
  		echo "Data inserted Successfully";
	    }else{
		  echo "Error:".mysqli_error($conn);
	    }
        }

        echo " <br>";

        include 'footer.php';
?> 
</center>

</body>
</html>