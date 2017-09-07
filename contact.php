<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<?php
    if (isset($_POST['envia']) && $_POST['envia'] == 'ok') {
        $result = file_get_contents( 'https://www.google.com/recaptcha/api/siteverify', false, stream_context_create(array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query(array(
                    'response' => $_POST['g-recaptcha-response'],
                    'secret' => '6LdBzi8UAAAAAJu-3IHBz34LM50G1imvf_8i7w1x'
                )),
            ),
        )));
        $result = json_decode($result);
        var_dump($result->success );
    }
?>

	<div class="container">
        <div class="gap-small">&nbsp;</div>
	    <h4 class="pink-text text-lighten-3">Shoot me a message</h4>
        <div class="row">
            <form id="contactform" method="post" action="acknowledge.php" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="name" name="name" type="text" class="validate pink-text pink-accent-2">
                        <label for="name" class="grey-text text-darken-4">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" name="email" type="email" class="validate pink-text text-accent-2">
                        <label for="email" class="active" data-error="Come on, that's not an email address ..." data-success="Thank you">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">textsms</i>
                        <textarea id="comments" name="comments" class="materialize-textarea" data-length="100"></textarea>
                        <label for="comments" class="grey-text text-darken-4">Message</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="g-recaptcha right" data-sitekey="6LdBzi8UAAAAADVb2ijWPdPr40FO2Bhq7PqlPGPD" data-theme="dark light" data-type="image"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <button class="btn waves-effect modal-close waves-light-blue blue right g-recaptcha" type="submit" name="send">Submit <i class="material-icons right">send</i></button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="gap-small">&nbsp;</div>
	</div>

<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/javascript.php'; ?>