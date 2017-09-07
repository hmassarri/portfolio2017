<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<?php
    if (isset($_POST['send'])) {
        $to = 'hugo@hugomassarri.com';
        $subject = 'Feedback from my site';
        
        $message = 'Name: ' . $_POST['name'] . "\r\n";
        $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
        $message .= 'Comments: ' . $_POST['comments'];
        
        $headers = "From: website@hugomassari.com\r\n";
        $headers .= 'Content-Type: text/plain; charset=utf-8';
        
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if ($email) {
            $headers .= "\r\nReply-To: $email";
        }
        
        $success = mail($to, $subject, $message, $headers);
    }
?>

<div class="container">
    <div class="row">
        <div class="col s12 m12 l12 center-align">
            <div class="gap-small">&nbsp;</div>
            <?php 
                if(!empty($_POST['url'])){        
                    if (isset($success) && $success) { ?>
                <h4 class="pink-text text-lighten-3">Awesome! and Thank you.</h4>
                <p>Thanks for message.  I'll get back to you soon.</p>
            <?php } } else { ?>
                <h4 class="pink-text text-lighten-3">What did you do??  It didn't work.</h4>
                <p>I guess something happened.  Let's try again.</p>
            <?php } ?>
            <div class="gap-small">&nbsp;</div>
        </div>
    </div>
</div>


<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/javascript.php'; ?>