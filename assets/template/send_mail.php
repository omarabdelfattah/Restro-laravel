<?php

if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])  ){
	$name = $_POST['name']; // HINT: use preg_replace() to filter the data
	$email = $_POST['email'];
    $phone = $_POST['phone'];
 	$message = nl2br($_POST['message']);
	// if( mail($to, $subject, $message, $headers) ){
	// 	echo "success";
	// } else {
	// 	echo "The server failed to send the message. Please try again later.";
	// }
	require ('PHPMailer/src/PHPMailer.php');
	require ('PHPMailer/src/SMTP.php');
	require ('PHPMailer/src/Exception.php');


    $mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    
    // PHP Mailer  settings
    $debug = '';
    $mail->Debugoutput = function($str, $level) {
    $GLOBALS['debug'] .= "$level: $str\n";
    };

    //Server settings    
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('omar.mero200125@gmail.com', 'My Portfolio');
    $mail->addAddress('157018586d@mailox.biz', 'Joe User');     // Add a recipient
    $mail->addAddress('omar_abdo200125pay@yahoo.com');               // Name is optional
    // $mail->addReplyTo('omar.mero200125@gmail.com', 'Information');
    $mail->addCC('omar.mero200125@gmail.com');
    $mail->addBCC('omar.mero200125@gmail.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('img/ehda.jpg', 'EhdaScript.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->Subject = $s;

    $mail->Body    = '<div style="padding: 11px;background-color: #2c2e33;"><link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style>

                table{
                    width: 100%;
                    overflow: hidden;
                    margin: 31px 0px;
                }
                th{    
                    overflow: hidden;
                    padding-bottom: 17px;
                    font-family: raleway;
                    font-size: 22px;
                    font-weight: 600;
                    color:#fff;
                }
                td{
                    float: left;
                    overflow: hidden;
                    padding-bottom: 17px;
                    margin-right: 14px;
                    font-family: raleway;
                    color:#fff;
                }
        </style>    
            <h3 style="
            text-align: center;
            font-size: 25px;
            color: #FFF;
            font-family: raleway;
            letter-spacing: 1.8px;
            text-transform: uppercase;
        ">Hello Omar We have A new message for you !</h3>
            <h4>
         <table>
          <tbody><tr>
            <th>His name is : </th> <td>'.$name.'</td>
          </tr>
          <tr>
            <th>His phone is : </th> <td>'.$phone.'</td>
          </tr>  
          <tr>
          <th>His email is : </th> <td>'.$email.'</td>
          </tr>           
          <tr>
            <th>The Content is : </th> <td>'.$message.'</td>
          </tr> 
         </tbody></table>
        </h4>
        </div>';

    if($mail->send()){
        header('location:contact.php?s=t');
     }
} catch (Exception $e) {
    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    header('location:contact.php?s=f');

}
}