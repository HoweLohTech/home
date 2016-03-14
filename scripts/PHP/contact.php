<?php
$name = $_POST['name'];
$email = $_POST['email'];
$category = $_POST['category'];
$message = $_POST['message'];
$from = 'From: HoweLoh Tech';
$to = 'pshowell@howeloh.com';
$subject = 'Contact Form Submission: $category';
$body = 'From: $name\nEmail: $email\n Subject: $category\nMessage: $message';
$antispam = $_POST['antispam'];

if($_POST['submit'] && $antispam == '4'){
	if (mail ($to, $subject, $body, $from)){
		echo '<p>Your Message has been sent!</p>';
	} else {
		echo '<p>Something went wrong, go back and try again!</p>';
	}
} else if ($_POST['submit'] && $antispam != '4'){
	echo '<p>You answered the anti-spam question incorrectly!</p>';
}
?>