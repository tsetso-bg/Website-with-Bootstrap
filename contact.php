<?php
$to = "bg_abv@abv.bg"; //имейла на който ще се пращат съобщенията
function alert($type, $mess)
{
echo '<div class="alert alert-'.$type.'">'.$mess.'</div>';
}
function mail_utf8($to, $from_user, $from_email, $subject = '(No subject)', $message = '')
   {
      $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
      $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

      $headers = "From: $from_user <$from_email>\r\n".
               "MIME-Version: 1.0" . "\r\n" .
               "Content-type: text/html; charset=UTF-8" . "\r\n";

     return mail($to, $subject, $message, $headers);
   }
 
if(isset($_POST['submit'])) 
{
   $name = htmlspecialchars($_POST['name']);
   $email = htmlspecialchars($_POST['email']);
   // $to = htmlspecialchars($_POST['to']);
   $subject = htmlspecialchars($_POST['subject']);
   $message = htmlspecialchars($_POST['message']);
    //валидация на имейла
    if (!filter_var($to, FILTER_VALIDATE_EMAIL)) { $error = alert('danger', 'Невалиден имейл за получаване'); } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $error = alert('danger', 'Невалиден имейл'); } else {
       mail_utf8($to, $name, $email, $subject, $message);
      $error = alert('success', 'Успешно изпратен имейл');
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="уеб дизайн, уеб дизайн Видин, уеб сайт, уеб сайт Видин, Интернет, компютри Видин , мрежи, видин, Цецо Видин, Web Design , web site design, web development ,site design, tsetso, netwark, Professional web design company,  web hosting, internet solutions, website design company,website design firm, corporate design, website design services, small business design,Bulgarian web design, professional web design, affordable web design, web design services, обяви, реклами">
	<link rel="stylesheet" href="css/style.css" />
	<meta name="author" content="© 2014,tsetso design">
    <link rel="icon" href="ico/favicon.ico">
    <title>Уеб дизайн и Интернет - TSETSO.NET </title>
    <script type="text/javascript" src="pic/skypeCheck.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap-st.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
     <!--  <div class="container"> -->
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://tsetso.net"><img src="img/logo.png" alt="logo"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.htm">НАЧАЛО</a></li>
                <li><a href="internet.htm">ИНТЕРНЕТ</a></li>
                <li><a href="service.htm">УСЛУГИ</a></li>
                <li class="active"><a href="contact.php">КОНТАКТИ</a></li>
              </ul>
            </div>
          </div>
        </div>
    </div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
	<div class="content">
      <div class="row featurette">
        <div class="col-lg-4">
          <div class="contact-data">
            <?php
            if(isset($error)) {
              echo $error;
            } 
            ?>
              <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Изпрати запитване</h2>
                <!-- <input type="email" class="form-control" placeholder="Имейла на който ще се праща съобщението" name="to" required autofocus> -->
                <input type="text" class="form-control" placeholder="Вашето име" name="name" required autofocus>
                <input type="email" class="form-control" placeholder="Email" name="email" required autofocus>
                <input type="text" class="form-control" name="subject" placeholder="Тема" required>
                <textarea type="text" class="form-control" name="message" maxlength="999"placeholder="Съобщение" required></textarea>
                <br>
                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Изпрати</button>
              </form>
          </div>
        </div>
        <div class="col-lg-8 ">
          <h2 class="featurette-heading">КОНТАКТИ</h2>
          <p class="lead">
            <p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1435.4202081821934!2d22.874168011639405!3d43.983349679384624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x978a8a0ef21307f6!2z0KPQtdCxINC00LjQt9Cw0LnQvSAtIHd3dy50c2V0c28ubmV0!5e0!3m2!1sbg!2sbg!4v1412721829514" width="100%" height="300" frameborder="0" style="border:0"></iframe>
            </p>
          </p>
        </div>
      </div>
  </div>
</div> 
<div class="clear"></div>
      <!-- /END THE FEATURETTES -->
	  <hr class="featurette-divider">
      <!-- FOOTER -->
      <footer class ="footer">
      	<div class="container footer">
      			<div class="col-sm-6">
      			  <div id="follow">
		          	<h4>ПОТЪРСЕТЕ НИ</h4>
		            <a id="facebook" href="https://www.facebook.com/tsvetozar.nikolov.5" class="social-button" target="_blank"></a>
		            <a id="youtube" href="https://www.youtube.com/channel/UC4FwmvpfJrTF-FK-3Ix6mMg" class="social-button" target="_blank"></a>
		            <a id="googleplus" href="https://plus.google.com/u/0/106743843238664012608" class="social-button" target="_blank"></a>
		            <a id="linkedin" href="http://bg.linkedin.com/pub/tsvetozar-nikolov/82/ba0/338" class="social-button"></a>
		            <p> <a href="#">2014 © TSETSO DESIGN </a></p>
		          </div>
      			</div>
      			<div class="col-sm-6 contact">
      				<h4>СВЪРЖЕРЕ СЕ С НАС</h4>
      			<p>	<a href="mailto:office@tsetso.net"><span class="glyphicon glyphicon-envelope"></span><span>  office@tsetso.net</span></a></p>
      	  			<p><span class="glyphicon glyphicon-earphone"></span><span>088 990 8844</span></p>  
                <p><img class="skype" src="pic/skype.png" alt="SKYPE ME">
              <span>
                <a href="skype:tsetso-bg?call"><img class="skype-img" src="pic/skype70x23.png" alt="Skype Me™!" /></a> 
              </span>
              </p>
      			</div>
      			<div class="clear">
	</div>
        </div>
      </footer>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <!--  // <script src="js/docs.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
