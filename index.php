<!DOCTYPE html>
<html>
<head>
	<title>Virgie Contact Form</title>
</head>
<body>
		<main>
			<p>Send E-mail</p>
			<form class="contact-form" action="contactform.php" method="post">
				<input type="text" name="name" placeholder="Name">
				<input type="text" name="mail" placeholder="Your Email Address">
				<input type="text" name="subject" placeholder="Subject">
				<textarea name="message" placeholder="Message"></textarea>
				<button type="submit" name="submit">Send</button>
			</form>
		</main>
</body>
</html>