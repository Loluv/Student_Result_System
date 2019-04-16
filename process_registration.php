<?php

if(isset($_POST["submit"])){
    $conn=mysqli_connect("localhost","root","","schools") or die(mysqli_error($conn));

    $name=$_POST['name'];
    $adm=$_POST['adm'];
    $class=$_POST['class'];
   

    echo $name;
    echo $adm;
    echo $class;

    $insert=mysqli_query($conn,"INSERT INTO students(name,adm,class)
    VALUE('".$name."','".$adm."','".$class."')")or die(mysli_error($conn));
    if($insert){
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
          window.location.href="index.php";
          </script> 
          <?php
    }
}
?>