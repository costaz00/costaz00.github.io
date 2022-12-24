<!-- CONTACT.HTML -->
<form method='post' action='mailform.php'>
  Email: <input name='email' type='text' /><br />
  Subject: <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='40'>
  </textarea><br />
  <input type='submit' />
</form>

<!-- MAILFORM.PHP PD -->
<?php
if (isset($_REQUEST['email'])) {

  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("costaszafolias@gmail.com", $subject,
  $message, "From:" . $email);

  echo "Thank you! Your request has been submitted to our webmaster.";

} else {

  echo "Error: Please complete the form.";

}
?>