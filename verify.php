  <?php
  require_once('recaptchalib.php');
  require_once('credentials.php');
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
	  // Your code here to handle a successful verification

$link = $_POST['link'];
$message = $_POST['message'];
$to = 'trump6@gmail.com'; 
$email_subject = "Website Contact Form";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nLink: " . $link . "\n\nMessage:\n" . $message;
$headers = "From: trump6@gmail.com\n"; 
mail($to,$email_subject,$email_body,$headers);
return true;
}
echo "Thank you!";
?>
