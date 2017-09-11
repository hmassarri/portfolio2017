<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/navbar.php'; ?>

<?php
    if (isset($_POST['send'])) {
        $to = 'test@testemail.com';
        $subject = 'Feedback from hugomassarri.com';
        
        $message = 'Name: ' . $_POST['name'] . "\r\n";
        $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
        $message .= 'Comments: ' . $_POST['comments'] . "\r\n";
        
        $headers = "From: test@testemail.com\r\n";
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
            
            <?php 
                if (empty($_POST['email'])) {
            ?>
                        <i class="large material-icons pink-text text-lighten-3">warning</i>
                        <h4 class="pink-text text-lighten-3">What did you do?? Oh boy ...</h4>
                        <p class="center-align">It looks likes some of the form fields weren't filled out.</p>
                        <p>&nbsp;</p>
                        <p class="center-align">No worries. Everything will be ok.</p>
                        <p class="center-align">Hit back and fill out the form again.</p>
                        <i class="pink-text text-lighten-3 medium material-icons">favorite</i>
            <?php 
                } 
                else {
                    if (!empty($_POST['email'])) {
                        if (isset($success) && $success) { 
            ?>      
                            <h4 class="pink-text text-lighten-3">Awesome! and Thank you.</h4>
                            <i class="pink-text text-lighten-3 large material-icons">thumb_up</i>
                            <p>Thanks for message.  I'll get back to you soon.</p>
            <?php 
                        } 
                    }
                }
            ?>
            <div class="gap-small">&nbsp;</div>
        </div>
    </div>
</div>


<?php require_once 'includes/footer.php'; ?>
<?php require_once 'includes/javascript.php'; ?>