
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>iFund</title>
 <link href="css/our_style.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/our_style.css" rel="stylesheet">
   <link href="css/bootstrap.css" rel="stylesheet">
   <script src="http://23.94.123.238/public/js/jquery-3.2.1.min.js"></script>
  <script src="http://23.94.123.238/public/js/bootstrap.min.js"></script>

<style>
@font-face {
  font-family: 'FontAwesome';
  src: url('http://localhost/ifound/public/fonts/fontawesome-webfont.eot?v=4.7.0');
  src: url('http://localhost/ifound/public/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),
  url('http://localhost/ifound/public/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),
  url('http://localhost/ifound/public/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),
  url('http://localhost/ifound/public/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),
  url('http://localhost/ifound/public/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');
  font-weight: normal;
  font-style: normal;
}
</style>



</head>

<body>

<?php echo $__env->make('nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div style="position: relative; color: #ffffff; margin-top:50px;min-height: calc( 100% - 50px ); display: flex; align-items: center; background-size: 100% 100%;">
  <div class="container">

        <!-- Marketing Icons Section -->

    <div class="row align-middle">
                      <div class="col-sm-4">
                                         
                                              <a href="<?php echo e(route('register')); ?>"><img src="pictures/logostartup.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236" href="<?php echo e(route('register')); ?>"></a>
                                         
                                    

                      </div>

                      <div class="col-sm-8">
                  
                                          
                                          <a href="<?php echo e(route('register')); ?>"><img src="pictures/logo.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236" ></a> 
                                          
                                      
                                    

                      </div>

      </div>
                        
                        
  </div>
</div>

  
  <?php echo $__env->make('fooder', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>