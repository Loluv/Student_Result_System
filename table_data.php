<?php
include('process_login.php');
$conn=mysqli_connect("localhost","root","","schools")or die(mysli_error($conn));
$db_records=mysqli_query($conn,"select * from students")or die(mysqli_error($conn));
?>

<html>
    <head>
        <title>Database Records</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <script type="text/javascript" src="bootsrap/js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row"></div>
            <div class="row">
                <div class="col-sm-2" style="height:200px"><?php echo $_SESSION ['username']; echo $_SESSION ['password']?>
                <a href="logout.php" class="btn btn-info">logout</a>
                </div>
                <div class="col-sm-8">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Adm</th>
                            <th scope="col">name</th>
                            <th scope="col">class</th>
                            <th scope="col">math</th>
                            <th scope="col">comp</th>
                            <th scope="col">english</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($db_records as $record){?>
                        <tr>
                        <td><?php echo $record['adm'];?></td>
                        <td><?php echo $record['name'];?></td>
                        <td><?php echo $record['class'];?></td>
                        <td><?php echo $record['math'];?></td>
                        <td><?php echo $record['comp'];?></td>
                        <td><?php echo $record['english'];?></td>
                        <td>
                            <a href="view_student.php?id=<?php echo $record['id'];?>" class="btn-primary">view</a>
                            <a href="update_student.php?id=<?php echo $record['id'];?>" class="btn-info">upadate</a>
                            <a href="delete_student.php?id=<?php echo $record['id'];?>" class="btn-danger">delete</a>
                        </td>
                         </tr>
                    <?php }?>
                    </tbody>
                    </table>
                 
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </body>

</html>