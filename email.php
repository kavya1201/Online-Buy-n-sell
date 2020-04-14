<?php
require "function/connection.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
session_start();
?>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OFFERUP| SIGN UP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <body>
      <?php
      include ("include/header1.php");
      ?>
            <div class="container user_log">
                <div class="row basic_user_log_area" >
                    <h3 class="text-center"> SEND EMAIL</h3>
                    <div class="col-md-7 signup" style="left:180px">
                        <form method="POST" action="#" name="semail" id="semail" class="form-group">

                            <p>
                                <label>Email ID of the seller :</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Full Email" required>
                            </p>
                            <p>
                                <label>Subject :</label>
                                <input type="text" name="sub" id="sub" class="form-control" placeholder="Enter Email subject" required>
                            </p>
                            <p>
                                <label>Message :</label>
                                <input type="text" name="msg" id="msg" class="form-control" placeholder="Enter Message" required>
                            </p>
                            <input type="submit" value="Send" id="send" name="send" class="btn-success btn-sm" style="margin-left: 180px">

                        </form>
                    </div>
                </div>
            </div>
            <?php
                    include ("include/footer.php");
                ?>
<?php
$name=$_SESSION['username'];
if(isset($_POST['send'])){
	$sub = $_POST['sub'];
	$msg = $_POST['msg'];
  $name=$_SESSION['username'];
	$selleremail = $_POST['email'];
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';

  $mail->Port = 587;
  $mail->SMTPAuth = true;
  //Username to use for SMTP authentication - use full email address for gmail
  $mail->Username = "test75063@gmail.com";

  //Password to use for SMTP authentication
  $mail->Password = 'test@1212';

  //Set who the message is to be sent from
  $mail->setFrom($selleremail, $name);

  $mail->addAddress($selleremail, $name);

  $mail->Subject = $sub;
  $mail->isHTML(true);
  $mail->Body = $msg;

  $mail->AltBody = 'This is a plain-text message body';

  if (!$mail->send()) {
      echo 'Mailer Error: '. $mail->ErrorInfo;
  } else {
    echo "<script>alert('Email Sent Successfully! ');
  window.history.go(-2);
</script>";

  }

}


?>


    </body>

    </html>
