<?php
$conn=mysqli_connect("localhost","root","","schools")or die(mysqli_error($conn));
$id=$_GET['id'];
echo $id;
$delete_query=mysqli_query($conn,"delete from students where id=$id")or die(mysqli_error($conn));
if($delete_query){
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
          window.location.href="all.php";
          </script> 
          <?php
}
?>
       
          