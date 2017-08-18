<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent = "From: $name \n Message: $message";
	$recipient = "hugo@hugomassarri.com";
	$subject = "Contact Form from hugomassarri.com";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	echo "Thank You!";
?>

		<!-- Contact Modal -->
	<div id="contact-modal" class="modal modal-fixed-footer">
		<div class="modal-content">
			<h4 class="pink-text text-lighten-3">Shoot me a message</h4>
			<div class="row">
				<form action="mail.php" method="POST" class="col s12">
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="name" type="text" class="validate pink-text pink-lighten-3" name="name">
							<label for="name" class="purple-text text-darken-3">Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">email</i>
							<input id="email" type="email" class="validate purple-text text-darken-3" name="email">
							<label for="email" class="purple-text text-darken-3" data-error="wrong" data-success="right">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">textsms</i>
							<textarea id="textarea1" class="materialize-textarea" data-length="100" name="message"></textarea>
							<label for="textarea1" class="purple-text text-darken-3">Message</label>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="modal-footer">
			<!--
			<a href="#!" class="modal-action modal-close waves-effect waves-pink btn-flat">Cancel</a>
			<a href="#!" class="modal-action modal-close waves-effect waves-pink btn-flat">Submit</a>
			-->
			<input type="submit" value="Send">
		</div>
	</div>