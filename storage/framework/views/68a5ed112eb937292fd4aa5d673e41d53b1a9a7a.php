<?php $__env->startSection('content'); ?>

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

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>