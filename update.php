<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="links.css">
</head>
         
               <ul class="topnav">
               <li><a class="active" href="hp2.php">Home</a></li>
               <li><a href="profilepage.php">Profile</a></li>
               </ul>

            <br><br>

              <style>
                body {
                        background-image: url('untitled5.png');
                     }

                body {margin: 0;}

                ul.topnav {
                        list-style-type: none;
                        margin: 0;
                        padding: 0;
                        overflow: hidden;
                        background-color: rgb(214, 163, 33);
                          }

                ul.topnav li {float: left;}

                ul.topnav li a {
                       display: block;
                       color: white;
                       text-align: center;
                       padding: 14px 16px;
                       text-decoration: none;
                          }

                ul.topnav li a:hover:not(.active) {background-color: rgb(194, 154, 52);}

                ul.topnav li a.active {background-color: rgb(194, 154, 52);}

                ul.topnav li.right {float: right;}

                @media screen and (max-width: 600px) {
                ul.topnav li.right, 
                ul.topnav li {float: none;}
                          }

                table, td, th {
                border: 1px solid black;
                border-color: rgb(214, 163, 33);
                 text-align: center;
                          }
  
                 table {
                border-collapse: collapse;
                width: 60%;
                        }
   
                     th {
               height: 40px;
                        }
                        body {
              font-family: "Papyrus", "fantasy";
                        }


</style>

<body>
            <center>
            <form id="myFormId" method="post" action="<?php $_PHP_SELF?>">
             Title:<input type="text" name="post_title">
             Post:<input type="text" name="post_content">
             <br>
             <input  type="submit"  name="update" value="update" ><br><br>
             <br>
             </form>

            <?php
            
            include 'config.php'; 
           
              echo "<br>";
              echo 'Hello'." ".$_SESSION['email'];

           
                if(isset($_POST['update'])){
                 
                $post_title=$_POST['post_title'];
                $post_content=$_POST['post_content'];
                $post_id1= $_GET['post_id1'];

                $query="update posts set post_title ='$post_title',post_content ='$post_content' where post_id1= '$post_id1' ";
                if(!mysqli_query($conn,$query)){
                  echo " post updated sucessfully";
                   
                }else{
                      echo " Error: ".mysqli_error($conn);
                  }

                  }


            echo " <br>";

          include 'footer.php';

        ?>
  </center>
  
    </body>
    </html>