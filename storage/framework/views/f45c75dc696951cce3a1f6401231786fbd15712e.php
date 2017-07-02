<!DOCTYPE html>

<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'iFund')); ?></title>


   <link href="css/our_style.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="css/our_style.css" rel="stylesheet">
   <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
 
  

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
    <div id="app">
        <?php echo $__env->make('nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div style="padding-top: 70px">
        <?php echo $__env->yieldContent('content'); ?>
        
        </div>
        <?php echo $__env->make('fooder', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
