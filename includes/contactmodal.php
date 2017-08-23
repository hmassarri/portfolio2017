<?php 

    if (isset($_POST['email'])) {
        
        //email information
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $formcontent = "From: $name \n Message: $message";
        $recipient = "hugo@hugomassarri.com";
        $subject = "Contact Form from hugomassarri.com";
        $mailheader = "From: $email \r\n";
        $thankyou = "Thank you.";
        
        //send email
        mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	
        //response
        echo "Thank You!";    
    }

    else {

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
							<input id="name" type="text" class="validate pink-text pink-accent-2" name="name">
							<label for="name" class="grey-text text-darken-4">Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">email</i>
							<input id="email" type="email" class="validate pink-text text-accent-2" name="email">
							<label for="email" class="active" data-error="Come on, that's not an email address ..." data-success="Thank you">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">textsms</i>
							<textarea id="textarea1" class="materialize-textarea" data-length="100" name="message"></textarea>
							<label for="textarea1" class="grey-text text-darken-4">Message</label>
						</div>
					</div>
				</form>
			</div>
		</div>
        <div class="modal-footer">
		    <button class="btn waves-effect modal-close waves-light-blue blue" type="submit" name="action">Submit <i class="material-icons right">send</i></button>
            <button class="btn mocal-action modal-close waves-effect waves-light-blue blue">Cancel</button>
		</div>
	</div>
<?php 
    }
?>