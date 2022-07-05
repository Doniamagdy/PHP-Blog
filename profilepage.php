
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link rel="stylesheet" href="links.css">
</head>

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

               <ul class="topnav">
                <li><a class="active" href="hp2.php">Home</a></li>
                <li><a href="profilepage.php">Profile</a></li>
                <li class="right"><a href="logout.php">Logout</a></li>
                <li class="right"><a href="updateuser.php">Update Profile</a></li>
                <li class="right"><a href="deleteuser.php">Delete Profile</a></li>
               </ul>
               
                     <h2> -Profile-</h2>
         <center>

      <?php

      session_start();



             include 'config.php';
              echo " <br>";
             

             $id = $_SESSION['user_id']; 
             $sql = "select * from users where user_id= '$id'";
             $results =mysqli_query($conn,$sql);
             if($results){
             if(mysqli_num_rows($results)>0){
             while($row =mysqli_fetch_assoc($results)){
             echo "Full Name: ".$row['firstname']." ".$row['lastname']."<br>";
             echo "Email : ".$row['email']."<br>";
             echo "Address: ".$row['address']. "  <br>"; 
    
              }
              }
              }

             ?>      


                  <h2> -My Posts-</h2>
             <form  align="center" method="post" action="profilepage.php">
            </form>
    
            <?php
           
            $id=$_SESSION['user_id'];                                           
            $sql2="select * from posts where user_id='$id'";
            if($result2=mysqli_query($conn,$sql2)){
            if(mysqli_num_rows($result2)>0){
                 echo '<table class="table table-bordered table-striped">';
                 echo "<thead>";
                 echo "<tr>";
                 echo "<th>Title</th>";
                 echo "<th>Post</th>";
                 echo "<th colspan=2>Action</th>";
                 echo "</tr>";
                 echo "</thead>";
                 echo "<tbody>";

                 while($row =mysqli_fetch_assoc($result2)){ 
                 echo "<td>" . $row['post_title'] . "</td>";
                 echo "<td>" . $row['post_content'] . "</td>";
                 echo "<td>".'<a href="update.php?post_id1='. $row['post_id1'] .' ">update</a>'."</td>";
                 echo "<td>".'<a href="profilepage.php?post_id1='. $row['post_id1'] .' ">delete</a>'."</td>";
                 echo "</td>";
                 echo "</tr>";
                }
                 echo "</tbody>";                           
                 echo "</table>"; 
                 } 
                 } 
      
                 ?>        

                  <h2> -Add new Post-</h2>
                  <form  align="center" method="post" action="profilepage.php">
                  Title:<input type="text" name="title" >
                  Post:<input type="text" name="post" ><br><br>
                       <button name="add" type="submit" >add</button><br><br>
                       
              <?php 
         
             
            $user_id= $_SESSION['user_id'];

            if( isset($_POST['add'])) {
            $title=$_POST['title'];
            $content=$_POST['post'];
            $sql3= "insert into posts (user_id,post_title,post_content) values ('$user_id','$title','$content')";
            $result3=mysqli_query($conn,$sql3);

            if(!$result3){
                die ('Error'.mysqli_error($conn));
                }else{
                      echo "post inserted sucessfully";
                  }


                  }  

                  $post_id1=$_GET['post_id1'];

         $query = "delete from posts where post_id1='$post_id1'"; 
         if(mysqli_query($conn,$query)){
         echo " post deleted successfully";
          }else {
         echo "Error: ".mysqli_error($conn);
          }

         
          echo " <br>";

          include 'footer.php';
       ?>

            </form>
          
         </center>


</body>
</html>


