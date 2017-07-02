
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

@include('nav')

  <div style="position: relative; color: #ffffff; margin-top:50px;min-height: calc( 100% - 50px ); display: flex; align-items: center; background-image: url('pictures/startup.png'); background-size: 100% 100%;">
    <div class="container">
      <div class="row align-middle">
        <div class="col-sm-4">
          <div style="background-color: #8d170e; opacity: 0.8; filter: alpha(opacity=80); min-height: 250px; min-width:100%; text-align: center; padding-top:10px;">
            <h1>Startups</h1><br>
            <div style="text-align: justify;margin-right:30px;margin-left:30px;"><h4 ">Since 2001, BANSEA has worked with thousands of entrepreneurs to fine-tune their business plans and provided mentoring and investment opportunities to fantastic teams and ideas.</h4>
                <h4 ">Regardless of where you are from, we welcome a conversation with you if your company is domiciled in Singapore or in the Southeast Asia region.</h4>
            <h4 ">We provide the following for entrepreneurs:</h4>
            <br></br>
            </div>

          </div>
        </div>
        <div class="col-sm-3 ">
          
        </div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </div>
  <div style="background-color:#8d170e; min-width:100%; min-height:150px; color:#ffffff; font-family:Helvetica; font-size:16pt; font-weight:500;padding-top:50px; padding-bottom:50px; line-height:24pt;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" style="text-align:right;text-align: justify;">
            iFund was established by a group of Singapore-based angel investors who are keen to help start-ups achieve traction and to meet their goals of value-creation to the community. iFund investors have a close networks of angel groups in China, Indonesia and Vietnam predominantly and close links to other regions in Southeast Asia.
        </div>
        <div class="col-sm-6" style="text-align:left; text-align: justify;">
            This is done through our networking events, educational workshops and conferences that we hold to facilitate an active angel networking ecosystem. Our niche lies in help Singapore start-ups have access to the China market as part of their developmental growth.
        </div>
      </div>
    </div>
  </div>
  <div style="display:flex; align-items: center; min-height:100px;">
    <div class="text-center" style="text-align:center; min-width:100%; font-family:Helvetica; color:#000000;">
      <h1>Portfolio</h1>
    </div>
  </div>
  <div style="display:flex; align-items: center; min-height:100px; color:#000000; text-align: center; padding:30px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8"><h3>With hundreds of companies invested in by BANSEA members over more than a decade, this is a non-exhaustive display of our members’ impressive track record.</h3></div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </div>
  <div style="display:flex; align-items: center; min-height:100px; color:#000000; text-align: center; padding:30px;">
    <div class="container">
      <div class="row">
        <div class="col-5"></div>
        <div class="col-5"></div>
        <div class="col-5"></div>
        <div class="col-5"></div>
        <div class="col-5"></div>
      </div>
    </div>
  </div>
  @include('fooder')
</body>
</html>