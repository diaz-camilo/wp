<?php
include_once('tools.php');

$nameError = '';
$emailError = '';
$mobileError = '';
$subjectError = '';
$messageError = '';
$subject = '';
$message = '';
$formOutcome = '';
$errorsFound = false;

// $post = print_r($_POST, true);
// echo "<h3>\$_POST contains:</h3>
//     <pre>
//         $post
//     </pre>";

if (!empty($_POST)) {
    // sanitize subject and message strings and raise an error flag if the result is empty
    if (isset($_POST["subject"])) {
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP);
        if (preg_match("/^[ ]+$/", $subject)) {
            $subjectError = 'Subject can not be blank';
            $errorsFound = true;
        } else
            $subjectError = 'no errors in subject';
    } else
        $subjectError = 'subject is not set';

    if (isset($_POST["subject"])) {
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH | FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP);
        if (preg_match("/^[ ]+$/", $message)) {
            $messageError = 'message can not be blank';
            $errorsFound = true;
        } else
            $messageError = 'no errors in message';
    } else
        $messageError = 'message is not set';


    if (isset($_POST["name"])) {
        if (preg_match("/^[a-zA-Z \-.']{1,100}$/", $_POST['name'])) {
            // echo "<h3>Name matches regex and is not empty - {$_POST["name"]} </h3>";
            $nameError = "No errors - name";
        } else {
            // echo "<h3>Name does <b>NOT</b> match regex and is not empty - {$_POST["name"]} </h3>";
            $errorsFound = true;
            $nameError = "name must match regex - ^[a-zA-Z \-.']{1,100}$ - you entered: {$_POST["name"]}";
        }
    } else {
        // echo "<h3>It is <b>blank</b> - {$_POST["name"]} </h3>";
        $nameError = "Name cannot be blank";
        $errorsFound = true;
    }
    // echo "<p>{$nameError}</p>";

    if (isset($_POST["mobile"]) && ($_POST["mobile"] !== "")) {
        if (preg_match("/^((\(04\)|04|\+614)( ?\d){8})$/", $_POST['mobile'])) {
            // echo "<h3>Mobile matches regex and is not empty - {$_POST["mobile"]} </h3>";
            $mobileError = "No errors - mobile";
        } else {
            // echo "<h3>Mobile does <b>NOT</b> match regex and is not empty - {$_POST["mobile"]} </h3>";
            $errorsFound = true;
            $mobileError = "mobile must match regex - ^(((\(04\)|04|\+614)( ?\d){8}))$ - you entered: {$_POST["mobile"]}";
        }
    } else {
        // echo "<h3>Mobile is <b>blank</b> - {$_POST["mobile"]} </h3>";
        $mobileError = "mobile is blank";
    }
    // echo "<p>{$mobileError}</p>";

    if (isset($_POST["email"])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // echo "<h3>{$_POST["email"]} is a valid email</h3>";
            $emailError = "No errors - email";
        } else {
            $sanEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            // echo "<h3>email is <b>NOT</b> a valid email and is not empty - you entered: {$_POST["email"]}, did you mean {$sanEmail} </h3>";
            $errorsFound = true;
            $emailError = "email must match must pass email validation filter- you entered: {$_POST["email"]}";
        }
    } else {
        // echo "<h3>email is <b>blank</b> - {$_POST["email"]} </h3>";
        $emailError = "email can not be blank";
        $errorsFound = true;
    }
    // echo "<p>{$emailError}</p>";

   
    if (!$errorsFound)
        $formOutcome = "Thank you for your message!";
        // set placeholders to reflect inputs

        // append to csv 
        
    else
        $formOutcome = "There are errors in your form";
}
?>

<!DOCTYPE php>
<?php
include_once('tools.php');
top_module("ANZAC Douglas Raymond Baker - Contact");
?>
<main>
    <article>
        <span><h1><?php if($formOutcome != '') echo $formOutcome;?></h1></span>
        <form class="grid-container" class="form" id='contactForm' action='processing.php' method="post" target="_blank" onsubmit='return formValidate()' novalidate>

            <!-- add required -->
            <label class="grid-label" for="name">Name: </label>
            <div><input class="grid-input" type="text" id="name" name="name" placeholder="Jon Doe" value="" onblur="nameCheck()" /><span id="name_validation" class="error"><?php echo $nameError; ?></span></div>

            <!-- add required -->
            <label class="grid-label" for="email">Email: </label>
            <div><input class="grid-input" type="email" id="email" name="email" placeholder="your-email@email.com" value="" onblur="emailCheck()" /><span id="email_validation" class="error"><?php echo $emailError; ?></span></div>

            <label class="grid-label" for="mobile">Mobile: </label>
            <div><input class="grid-input" type="tel" id="mobile" name="mobile" minlength="8" maxlength="15" placeholder="0404 123 456" value="" onblur="mobileCheck()" /><span id="mobile_validation" class="error"><?php echo $mobileError; ?></span></div>

            <label class="grid-label" for="subject">Subject:</label>
            <div><input class="grid-input" type="text" id="subject" name="subject" placeholder="Subject" value="" required onblur="subjectCheck()" /><span id="subject_validation" class="error"><?php echo $subjectError; ?></span></div>

            <label class="grid-label" for="message">Message: </label>
            <div><textarea class="grid-input" id="message" rows="10" name="message" placeholder="Type your message here" value="" required onblur="messageCheck()"></textarea><span id="message_validation" class="error"><?php echo $messageError; ?></span></div>

            <div class="grid-item"></div>

            <label class="container" onclick="rememberMe()">Remember me<input type="checkbox" name="remember-me" id="remember-me" checked="checked" /><span class="checkmark"></span></label>

            <div class="grid-item"></div>

            <input class="grid-input" type="submit" name="send" id="send" value="Send">

            <div class="grid-item"></div>

            <label class="container" >disable client side validation<input type="checkbox" name="no_validate" onclick="document.getElementById('contactForm').noValidate = this.checked;" checked="checked" /><span class="checkmark"></span></label>
        </form>
    </article>
</main>

<?php
footer_module();
?>
<script>
    retriveUser();
</script>
</php>

<?php

?>