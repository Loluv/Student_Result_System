<?php
session_start();
include('connect.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    echo $username;
    echo $password;
    $select_query=mysqli_query($conn,"select * from Teacher where name='$username' and password='$password'")
    or die(mysqli_error($conn));
    $num=mysqli_num_rows($select_query);
    if($num==1){
        foreach($select_query as $record){
            $_SESSION['username']=$record['username'];
            $_SESSION['password']=$record['password'];
        }
          ?>
          <script>
          window.alert("successful");
          window.location.href="students.php";
          </script> 
          <?php 
        }else{
            ?>
          <script>
          window.alert("failed");
          window.location.href="index.html";
          </script> 
          <?php
        }
       
    }
?>
   
}
?>