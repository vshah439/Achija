<?php
$subjectPrefix = '[Contato via Site]';
$emailTo = 'vshah439@gmail.com';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name    = stripslashes(trim($_POST['name']));
    $email   = stripslashes(trim($_POST['email']));
    
    $message = stripslashes(trim($_POST['message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';
echo $name;
    if (preg_match($pattern, $name) || preg_match($pattern, $email) ) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if($name && $email && $emailIsValid  && $message){
        $subject = "Inquiry from website";
        $body = "Nome: $name <br /> Email: $email <br />  Mensagem: $message";

        $headers  = "MIME-Version: 1.1" . PHP_EOL;
        $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
        $headers .= "Content-Transfer-Encoding: 8bit" . PHP_EOL;
        $headers .= "Date: " . date('r', $_SERVER['REQUEST_TIME']) . PHP_EOL;
        $headers .= "Message-ID: <" . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . PHP_EOL;
        $headers .= "From: " . "=?UTF-8?B?".base64_encode($name)."?=" . "<$email>" . PHP_EOL;
        $headers .= "Return-Path: $emailTo" . PHP_EOL;
        $headers .= "Reply-To: $email" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;
        $headers .= "X-Originating-IP: " . $_SERVER['SERVER_ADDR'] . PHP_EOL;

        mail($emailTo, "=?utf-8?B?".base64_encode($subject)."?=", $body, $headers);
        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html>
<head>

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <section id="contact" class="main style3 secondary">
				<div class="content container">
					
					<div class="row ">
					<div class="4u 12u(mobile)">
					</br>
					<h3>Office Address :</h3>
					<p>146,Krishna bhavan,Room no -17,First floor,
					</br>Dr Vegas street,Kalbadevi road,Mumbai-400 002</p>
					<p><strong>Mobile no</strong> +91- 9867148405 / 9867470899</p>
					<div id="map"></div>
					</div>
					<div class="box container 8u 12u(mobile)">
				<header style="text-align: center">
					</br></br>
						<h1>Please send us your enquiry.</h1>
					</header>
						
					<!-- Contact Form -->
					 <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="contact-form" role="form" method="post">
					
							
								<div class="row 50%">
									<div class="6u 12u(mobile)"><input type="text" name="name" placeholder="Name"></div>
									<div class="6u 12u(mobile)"><input type="email" name="email" placeholder="Email"></div>
								</div>
								<div class="row 50%">
									<div class="6u 12u(mobile)"><input type="text" name="mobile" placeholder="Mobile No"></div>
								
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
								</div>
								<div class="row">
									<div class="12u" >
										<ul class="actions" style="float:right">
											<li><input type="submit" value="Send Message"></li>
										</ul>
									</div>
								</div>
					</form>

					</div>
					
		</div>
				</div>
			</section>
</head>

<body>
   
</body>
</html>
