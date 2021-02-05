<!DOCTYPE php>
<?php
  include_once('tools.php');
  top_module("ANZAC Douglas Raymond Baker - Contact");
?>
    <main>
      <article>
        <form class="grid-container" class="form" action="https://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post" target="_blank" onsubmit='return formCheck()' target='_blank'>

          <label class="grid-label" for="name">Name: </label>
          <div><input class="grid-input" type="text" id="name" name="name" placeholder="Jon Doe" required value="" onblur="nameCheck()"/><span id="name_validation" class="error"></span></div>

          <label class="grid-label" for="email">Email: </label>
          <div><input class="grid-input" type="email" id="email" name="email" placeholder="your-email@email.com" required value="" onblur="emailCheck()" /><span id="email_validation" class="error"></span></div>

          <label class="grid-label" for="mobile">Mobile: </label>
          <div><input class="grid-input" type="tel" id="mobile" name="mobile" minlength="8" maxlength="15" placeholder="0404 123 456" value="" onblur="mobileCheck()"/><span id="mobile_validation" class="error"></span></div>

          <label class="grid-label" for="subject">Subject:</label>
          <div><input class="grid-input" type="text" id="subject" name="subject" placeholder="Subject" value="" required onblur="subjectCheck()"/><span id="subject_validation" class="error"></span></div>

          <label class="grid-label" for="message">Message: </label>
          <div><textarea class="grid-input" id="message" rows="10" name="message" placeholder="Type your message here" value="" required onblur="messageCheck()"></textarea><span id="message_validation" class="error"></span></div>

          <div class="grid-item"></div>

          <label class="container">Remember me<input type="checkbox" name="remember-me" id="remember-me" checked="checked" /><span class="checkmark"></span></label>

          <div class="grid-item"></div>

          <input class="grid-input" type="submit" name="send" value="Send">
        </form>
      </article>
    </main>

    <?php
      footer_module();
    ?>
</php>