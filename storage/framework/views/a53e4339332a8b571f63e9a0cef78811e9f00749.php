
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

  <div style="position: relative; color: #ffffff; margin-top:50px;min-height: calc( 100% - 50px ); display: flex;background-size: 100% 100%;">
  <div>



  <div>
    <h2 style="padding-left: 40px; color :#a92c2c">Investor Profile<h2>
  </div>

        <div class="col-xs-3" style="padding-left: 100px;">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-right">
                <li class="active"><a href="#home-r" data-toggle="tab">Profile</a></li>
                <li><a href="#profile-r" data-toggle="tab">Company profile</a></li>
                <li><a href="#messages-r" data-toggle="tab">Project</a></li>
            </ul>
        </div>
        <div class="col-xs-9" style="padding-left: 200px;">

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home-r">

                 <h3>Profile</h3>
      <form class="form-horizontal" role="form">
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Username</label>
          <div class="col-lg-8">
            <input class="form-control" value="Username" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Name</label>
          <div class="col-lg-8">
            <input class="form-control" value="Tsenguun" type="text">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label">Password</label>
          <div class="col-md-8">
            <input class="form-control" value=""type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Email</label>
          <div class="col-md-8">
            <input class="form-control" value="Tsenguun.koko@yahoo.com" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Web</label>
          <div class="col-md-8">
            <input class="form-control" value="www.songoltsoft.info">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-danger" value="Save Changes" type="button">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>

          </div>

                <div class="tab-pane" id="profile-r">

                
                <div class="text-center">
        <img src="https://fb-s-b-a.akamaihd.net/h-ak-xfa1/v/t1.0-1/c9.0.160.160/p160x160/420257_10151474103567424_1224916620_n.jpg?oh=0932a7be9adb74fd949d0211d9128ad7&oe=58BA7A17&__gda__=1488564886_feb0fc02d6307304a3d43aecff5a804a" class="avatar img-circle img-thumbnail" alt="Logo">

        <input type="file" class="text-center center-block well well-sm">
      </div>

               <h3>Company Profile</h3>
      <form class="form-horizontal" role="form">
        
        <div class="form-group">
          <label class="col-lg-3 control-label">Company name</label>
          <div class="col-lg-8">
            <input class="form-control" value="StartUp" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Address</label>
          <div class="col-lg-8">
            <input class="form-control" value="carmenestelasi@gmail.com" type="text">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label">Phone</label>
          <div class="col-md-8">
            <input class="form-control" value="+97699859535" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Email</label>
          <div class="col-md-8">
            <input class="form-control" value="Tsenguun@gmail.com">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Web</label>
          <div class="col-md-8">
            <input class="form-control" value="www.songoltsoft.info">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-danger" value="Save Changes" type="button">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>

                </div>
                <div class="tab-pane" id="messages-r">Invest</div>
            </div>
        </div>

</div> 
  </div>
  <?php echo $__env->make('fooder', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>