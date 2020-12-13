<?php
    class category{
        public $id;
        public $name; 
    }
    $c1 = new category();
    $c1 -> id = 1;
    $c1 -> name = 'Cameras';
    $c2 = new category();
    $c2 -> id = 2;
    $c2 -> name = 'Mobiles';
    $c3 = new category();
    $c3 -> id = 3;
    $c3 -> name = 'Watches';
    $categories = [$c1,  $c2, $c3];


    class camera{
        public $id;
        public $name;
        public $price;
        public $image;
    }
    $cam1 = new camera();
    $cam1 -> id = 1;
    $cam1 -> name = 'Sony Alpha a6400 Mirrorless Digital Camera with 16-50mm f/3.5-5.6 OSS Lens';
    $cam1 -> price = '158,499';
    $cam1 -> image ='12.jpg';

    $cam2 = new camera();
    $cam2 -> id = 2;
    $cam2 -> name = 'SJCAM SJ8 Pro 4K Action Camera (Black)';
    $cam2 -> price = '28,999';
    $cam2 -> image = '22.jpg';

    $cam3 = new camera();
    $cam3 -> id = 3;
    $cam3 -> name = 'Canon ixus 430 digital camera';
    $cam3 -> price = '33,999';
    $cam3 -> image = '3.jpg';

    $cam4 = new camera();
    $cam4 -> id = 4;
    $cam4 -> name = 'Canon PowerShot G1 X Mark III Digital Camera';
    $cam4 -> price = '115,999';
    $cam4 -> image = '4.jpg';

    $cam5 = new camera();
    $cam5 -> id = 5;
    $cam5 -> name = 'Sony DSC-W800 Compact Camera with 5x Optical Zoom';
    $cam5 -> price = '15,499';
    $cam5 -> image = '5.jpg';

    $cam6 = new camera();
    $cam6 -> id = 6;
    $cam6 -> name = 'Nikon COOLPIX A100 Digital Camera';
    $cam6 -> price = '12,999';
    $cam6 -> image = '6.jpg';

    $cam7 = new camera();
    $cam7 -> id = 7;
    $cam7 -> name = 'Canon PowerShot SX730 HS 20.3 MP Camera';
    $cam7 -> price = '36,499';
    $cam7 -> image = '7.jpg';
    
    $cam8 = new camera();
    $cam8 -> id = 8;
    $cam8 -> name = 'Canon M6 Mark 2 Mirrorless Digital Camera';
    $cam8 -> price = '145,999';
    $cam8 -> image = '8.jpg';

    $cameras =[$cam1, $cam2, $cam3, $cam4, $cam5, $cam6, $cam7, $cam8]
?>

<?php

class mobile{
    public $id;
    public $name;
    public $price;
    public $image;
}
$m1 = new mobile();
$m1 -> id = 1;
$m1 -> name = 'Samsung Galaxy S20 FE';
$m1 -> price = '119,999';
$m1 -> image ='1.jpg';

$m2 = new mobile();
$m2 -> id = 2;
$m2 -> name = 'Vivo V20';
$m2 -> price = '59,999';
$m2 -> image = '2.jpg';

$m3 = new mobile();
$m3 -> id = 3;
$m3 -> name = 'Realme7 Pro';
$m3 -> price = '54,999';
$m3 -> image = '3.jpg';

$m4 = new mobile();
$m4 -> id = 4;
$m4 -> name = 'Oppo F17 Pro';
$m4 -> price = '51,999';
$m4 -> image = '4.jpg';

$m5 = new mobile();
$m5 -> id = 5;
$m5 -> name = 'Oppo F17';
$m5 -> price = '39,999';
$m5 -> image = '5.jpg';

$m6 = new mobile();
$m6 -> id = 6;
$m6 -> name = 'Samsung Galaxy A51 8GB';
$m6 -> price = '54,999';
$m6 -> image = '6.jpg';

$m7 = new mobile();
$m7 -> id = 7;
$m7 -> name = 'Huawei Y9a';
$m7 -> price = '43,999';
$m7 -> image = '7.jpg';

$m8 = new mobile();
$m8 -> id = 8;
$m8 -> name = 'Vivo V20 SE';
$m8 -> price = '45,999';
$m8 -> image = '8.jpg';

$mobiles =[$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8]
?>

<?php

class watch{
    public $id;
    public $name;
    public $price;
    public $image;
}
$w1 = new watch();
$w1 -> id = 1;
$w1 -> name = 'Fitbit Versa 3 GPS Health And Fitness Smartwatch';
$w1 -> price = '44,999';
$w1 -> image ='1.jpg';

$w2 = new watch();
$w2 -> id = 2;
$w2 -> name = 'Haylou Solar LS05 Smart Watch';
$w2 -> price = '6,599';
$w2 -> image = '2.jpg';

$w3 = new watch();
$w3 -> id = 3;
$w3 -> name = 'Apple Watch Series 6 44mm GPS Blue Aluminum Case Deep Navy Sport Band M00J3';
$w3 -> price = '79,999';
$w3 -> image = '3.jpg';

$w4 = new watch();
$w4 -> id = 4;
$w4 -> name = 'Huawei Watch GT2 Classic Edition 46mm';
$w4 -> price = '29,999';
$w4 -> image = '4.jpg';

$w5 = new watch();
$w5 -> id = 5;
$w5 -> name = 'Fitbit Versa 2 - Emerald / Copper Rose Aluminum - Large';
$w5 -> price = '40,999';
$w5 -> image = '5.jpg';

$w6 = new watch();
$w6 -> id = 6;
$w6 -> name = 'Fitbit Versa 2 Special Edition - Navy & Pink Woven / Copper Rose Aluminum - Large';
$w6 -> price = '44,999';
$w6 -> image = '6.jpg';

$w7 = new watch();
$w7 -> id = 7;
$w7 -> name = 'Fitbit Versa 2 - Bordeaux / Copper Rose Aluminum - Small';
$w7 -> price = '40,999';
$w7 -> image = '7.jpg';

$w8 = new watch();
$w8 -> id = 8;
$w8 -> name = 'Xiaomi Amazfit Stratos Multisport GPS Smart Watch';
$w8 -> price = '23,999';
$w8 -> image = '8.jpg';

$watches =[$w1, $w2, $w3, $w4, $w5, $w6, $w7, $w8]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
    body{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
    img{
        width: 200px !important;
        /* height: 150px !important; */


    }
    .card-text{
        display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
    }    
    span{
        font-size: 16px !important;
        font-weight: bold;

    }
    .cards{
        background-color: rgba(58, 58, 58, .2)
    }
    .card:hover{
        box-shadow: 2px 4px 8px 2px rgba(58, 58, 58, .5);
    }
    
    </style>
</head>
<body>
<div class="container  ">
<div class="row">
<div class="col-lg-3 col-sm-12 col-md-12">
<nav class="navbar navbar-expand navbar-light bg-light w-25 d-block mt-5 ">
  
<h1>Categories</h1>
  <div class="" id="navbarText">
    
    
    <ul class="navbar-nav d-block ">

    <?php 
        foreach ($categories as $item) {
         
     
    ?>
    <li class="nav-item active">
        <a class="nav-link" href="assignment.php?cid=<?php echo $item -> id  ?>"> <?php echo $item -> name  ?> </a>
      </li>
    
       <?php
            
        }
        ?>  
    </ul>
   
</nav>
    
       
</div>

         
          
            <div class="col-lg-9 col-md-12 col-sm-12 pt-5 cards" >
            <div class="row ">
            <?php
            
                if (isset($_GET['cid'])) {
                    if ($_GET['cid'] == 1) { 
                        foreach ($cameras as $camera) { 
            ?>
            <div class=" d-flex mr-auto ml-auto my-3">
                <div class="card text-center" style="width:300px !important; height: 300px !important">
  <img src="images/camera/<?php echo $camera -> image ?>" class="card-img-top ml-auto mr-auto mt-4" alt="...">
  <div class="card-body">
    <p class="card-text mb-1"> <?php echo $camera -> name  ?>               </p>
     <span style="color: red; display:block;"> Rs: <?php echo $camera -> price  ?></span>
  </div>
</div>    
</div>   
            <?php 
                        }
                    }
            elseif ($_GET['cid'] == 2) {    
                foreach ($mobiles as $mobile) {
                    # code...
                ?>
             <div class=" d-flex mr-auto ml-auto my-3">
                <div class="card text-center" style="width: 250px !important; height: 400px !important">
  <img src="images/mobiles/<?php echo $mobile -> image ?>" class="card-img-top ml-auto mr-auto mt-4" alt="..." style="height: 250px !important">
  <div class="card-body">
    <p class="card-text mb-1"> <?php echo $mobile -> name  ?>
                    
     </p>
     <span style="color: red; display:block;"> Rs: <?php echo $mobile -> price  ?></span>
  </div>
</div>    
</div>     
          
          <?php  }
                }
                else{
                    foreach ($watches as $watch) {
                        # code...
                        ?>
                         <div class=" d-flex mr-auto ml-auto my-3">
                <div class="card text-center" style="width: 250px !important; height: 400px !important">
  <img src="images/watches/<?php echo $watch -> image ?>" class="card-img-top ml-auto mr-auto mt-4" alt="..." height="250px">
  <div class="card-body">
    <p class="card-text mb-1"> <?php echo $watch -> name  ?>
                    
     </p>
     <span style="color: red; display:block;"> Rs: <?php echo $watch -> price  ?></span>
  </div>
</div>    
</div> 
              <?php      }
                }
            
                }
        ?>  
          </div>
            </div>
            </div>
         
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script></body>
</html>