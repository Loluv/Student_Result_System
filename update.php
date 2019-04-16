<?php
include('nav.html');
?>
<?php
$conn=mysqli_connect("localhost","root","","schools")or die(mysqli_error($conn));
$id=$_GET['id'];
echo $id;
$select_query=mysqli_query($conn,"select * from students where id=$id")or die(mysqli_error($conn));
foreach($select_query as $record){
    $id=$record['id'];
    $name=$record['name'];
    $adm=$record['adm'];
    $math=$record['math'];
    $comp=$record['comp'];
    $class=$record['class'];
    $english=$record['english'];
        
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-8">
                
            </div>
        </div>

        <div class="content mt-3">

            
            <!--/.col-->
            
                <section class="card">
                     <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                    <div class="twt-feed blue-bg">
                        <div class="corner-ribon black-ribon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="fa fa-twitter wtt-mark"></div>

                        <div class="media">
                            
                            <div class="media-body">
                              <h2 class="text-white display-6">Update Student Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="weather-category twt-category">
                    	<form action="" method="POST">
                           <div class="form-group">
                                     <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="<?php echo $name?>">
                                </div>
                                <div class="form-group"> 
                                 <label for="adm"> Admission Number</label>
                                 <input type="text" name="adm" class="form-control" id="name"value="<?php echo $adm?>" >
                                 </div>
                                  
                                    <div class="form-group">
                                    <label for="class">Class</label>
                                    <input type="text" name="class" class="form-control" id="name" value="<?php echo $class?>">
                                    </div>
                                     <div class="form-group">
                                     <label for="math">Math</label>
                                    <input type="text" name="math" class="form-control" id="math" value="<?php echo $math?>">
                                    </div>
                                     <div class="form-group">
                                    <label for="comp">Comp</label>
                                    <input type="text" name="comp" class="form-control" id="comp" value="<?php echo $comp?>">
                                    </div>
                                     <div class="form-group">
                                    <label for="english">English</label>

                                    <input type="text" name="english" class="form-control" id="english" value="<?php echo $english?>">
                                    </div>
                                    
                            
 									<div class="form-group" style="width: 725px">
                    				<input type="submit" name="submit" class="btn btn-info btn-fill pull-right" id="submit" value="Update Record">
                    				</div>
                    				
                			</form>	
                				
                    </div>
                        <div class="col-sm-1"></div>
                    </div>
                  
        
                </section>
           


           


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $adm=$_POST['adm'];
     $class=$_POST['class'];
    $comp=$_POST['comp'];
    $math=$_POST['math'];
    $english=$_POST['english'];
   

    $update_query=mysqli_query($conn,"update students set name='$name',adm='$adm',class='$class',math='$math',comp='$comp',english='$english' where id='$id'")or die(mysqli_error($conn));

    if($update_query){
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
}
?>