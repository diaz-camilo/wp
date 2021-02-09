<?php
include_once('tools.php');


$subject = '';
$message = '';
$formOutcome = '';
$errorMessages = [
  "name" => '',
  "email" => '',
  "mobile" => '',
  "subject" => '',
  "message" => ''
];
$placeholders = [
  "name" => 'Your name',
  "email" => 'your.email@domain.com',
  "mobile" => 'Australian mobile numbers only',
  "subject" => 'What is the subject',
  "message" => 'Type your message here.'
];
$errorsFound = false;
$filename = "mail.txt";

if (!empty($_POST)) {

  if (isset($_POST["name"]) && !preg_match("/^()$/", $_POST['name'])) {
    if (!preg_match("/^([a-zA-Z \-.']{1,100})$/", $_POST['name'])) {
      $errorsFound = true;
      $errorMessages['name'] = "Name must match regex - ^[a-zA-Z \-.']{1,100}$ - you entered: {$_POST["name"]}";
    }
  } else {
    $errorsFound = true;
    $errorMessages['name'] = "Name cannot be blank";
  }

  if (
    isset($_POST["mobile"])
    && ($_POST["mobile"] !== "")
    && !preg_match("/^((\(04\)|04|\+614)( ?\d){8})$/", $_POST['mobile'])
  ) {
    $errorsFound = true;
    $errorMessages['mobile'] = "Mobile must match regex - ^(((\(04\)|04|\+614)( ?\d){8}))$ - you entered: {$_POST["mobile"]}";
  }


  if (isset($_POST["email"]) && !preg_match("/^()$/", $_POST['email'])) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $sanEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $errorsFound = true;
      $errorMessages['email'] = "Email must match must pass email validation filter- you entered: {$_POST["email"]}, did you mean {$sanEmail}";
    }
  } else {
    $errorMessages['email'] = "Email can not be blank";
    $errorsFound = true;
  }

  // sanitize subject and message strings and raise an error flag if the result is empty
  if (isset($_POST["subject"])) {

    $subject = filter_input(
      INPUT_POST,
      'subject',
      FILTER_SANITIZE_STRING,
      FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH |
        FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW | FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP
    );

    $_POST["subject"] = $subject;
    if (preg_match("/^([ ]+)|()$/", $subject)) {
      // $subject = 'Subject can not be blank';
      $errorMessages['subject'] = 'Subject can not be blank';
      $errorsFound = true;
    }
  } else
    $subject = 'Subject is not set';

  if (isset($_POST["subject"])) {

    $message = filter_input(
      INPUT_POST,
      'message',
      FILTER_SANITIZE_STRING,
      FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH |
        FILTER_FLAG_STRIP_BACKTICK | FILTER_FLAG_ENCODE_LOW |
        FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_AMP
    );

    $_POST["message"] = $message;
    if (preg_match("/^([ ]+)|()$/", $message)) {
      // $message = 'message can not be blank';
      $errorMessages['message'] = 'Message can not be blank';
      $errorsFound = true;
    }
  } else
    $message = 'Message is not set';

  if (!$errorsFound) {
    // message summary as placeholders for user to see.
    $formOutcome = "Thank you for your message!";
    $placeholders["name"] = $_POST["name"];
    $placeholders["email"] = $_POST["email"];
    $placeholders["mobile"] = ($_POST["mobile"] == '' ? 'Mobile not provided.' : $_POST["mobile"]);
    $placeholders["subject"] = $subject;
    $placeholders["message"] = $message;

    // append to csv 
    $areHeadings = true;
    $keys = array_keys($_POST);

    if (($fp = fopen($filename, "r")) && flock($fp, LOCK_SH) !== false) {
      $headings = fgetcsv($fp, 0, "\t");
      flock($fp, LOCK_UN);
      fclose($fp);

      for ($i = 0; $i < count($keys); $i++) {
        if ($keys[$i] != $headings[$i]) // bound to break here if keys is longer that headings
          $areHeadings = false;
      }
    }
    if (!$areHeadings) {
      if (($fp = fopen($filename, "w")) && flock($fp, LOCK_EX) !== false) {
        fputcsv($fp, $keys, "\t");
        flock($fp, LOCK_UN);
        fclose($fp);
      }
    }
    if (($fp = fopen($filename, "a")) && flock($fp, LOCK_EX) !== false) {
      fputcsv($fp, $_POST, "\t");

      flock($fp, LOCK_UN);
      fclose($fp);
    }
  } else
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
    <span>
      <h1><?php if ($formOutcome != '') echo $formOutcome; ?></h1>
    </span>
    <form class="grid-container" class="form" id='contactForm' action='contact.php' method="post" onsubmit='return formValidate()' novalidate>


      <label class="grid-label" for="name">Name: </label>
      <div><input class="grid-input" type="text" id="name" name="name" placeholder="<?php echo $placeholders['name'] ?>" value="" onblur="nameCheck()" required /><span id="name_validation" class="error"><?php echo $errorMessages['name']; ?></span></div>

      <label class="grid-label" for="email">Email: </label>
      <div><input class="grid-input" type="email" id="email" name="email" placeholder="<?php echo $placeholders['email'] ?>" value="" onblur="emailCheck()" required /><span id="email_validation" class="error"><?php echo $errorMessages['email']; ?></span></div>

      <label class="grid-label" for="mobile">Mobile: </label>
      <div><input class="grid-input" type="tel" id="mobile" name="mobile" minlength="8" maxlength="15" placeholder="<?php echo $placeholders['mobile'] ?>" value="" onblur="mobileCheck()" /><span id="mobile_validation" class="error"><?php echo $errorMessages['mobile']; ?></span></div>

      <label class="grid-label" for="subject">Subject:</label>
      <div><input class="grid-input" type="text" id="subject" name="subject" placeholder="<?php echo $placeholders['subject'] ?>" value="" required onblur="subjectCheck()" /><span id="subject_validation" class="error"><?php echo $errorMessages['subject']; echo $subject;?></span></div>

      <label class="grid-label" for="message">Message: </label>
      <div><textarea class="grid-input" id="message" rows="10" name="message" placeholder="<?php echo $placeholders['message'] ?>" value="" required onblur="messageCheck()"></textarea><span id="message_validation" class="error"><?php echo $errorMessages['message']; echo $message; ?></span></div>

      <div class="grid-item"></div>

      <label class="container" onclick="rememberMe()">Remember me<input type="checkbox" name="remember-me" id="remember-me" checked="checked" /><span class="checkmark"></span></label>

      <div class="grid-item"></div>

      <input class="grid-input" type="submit" name="send" id="send" value="Send">

      <div class="grid-item"></div>

      <label class="container">disable client side validation<input type="checkbox" name="no_validate" onclick="document.getElementById('contactForm').noValidate = this.checked;" checked="checked" /><span class="checkmark"></span></label>
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