<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
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
                          body {
              font-family: "Papyrus", "fantasy";
                        }


</style>

<body>
         <center> 

               <ul class="topnav">
               <li><a class="active" href="hp2.php">Home</a></li>
               <li><a href="profilepage.php">Profile</a></li>
               <li class="right"><a href="logout">Logout</a></li>
               </ul>

                <h2> -Add new Comment-</h2>

             <?php

             include 'config.php';
        
            $user_id= $_SESSION['user_id'];
             echo "<br>";
            $post_id1=$_GET['post_id1'];
        
            $sql = "select post_id1 , post_title , post_content from posts where post_id1='$post_id1' ";
            $result= mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
            while ($row= mysqli_fetch_assoc($result)){
            echo "Title: ".$row['post_title']."<br>";
            echo "Post: ".$row['post_content']."<br>";
         
         }
         }
  
             ?>

            <br>

            <form id="myFormId" method="post" action="<?php $_PHP_SELF ?>">
            Comment:<input type="text" name="comment" >
                    <input type="submit"  name="add" value ="add">
            <br>

           <?php 

            $post_id1=$_GET['post_id1'];   
            echo $post_id1;
            echo "<br>";
            if(isset($_POST['add'])) {
            $comment=$_POST['comment'];
            $sql3= "insert into comments (userid1,postid2,comment) values ('$user_id',$post_id1,'$comment') ";
            $result3=mysqli_query($conn,$sql3);
            if(!$result3){
            die ('Error'.mysqli_error($conn));
            }else{
            echo "comment inserted sucessfully";
               }
            }  

                 

?>
    
</center>
</body>
</html>
