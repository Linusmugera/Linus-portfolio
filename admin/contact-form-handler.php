<?php
if(isset($_POST[send]))
{
$name = $_POST['name'];
$email = $_POST['name'];
$message = $_POST['name'];

if(empty(name) || empty($email) || empty($message))
{
  header('location:contact.html?error');
}
else {
  $to = "mugeralinus3@gmail.com";
  if(mail($to, $email, $message))
  {
    header("location:contact.html?success");
  }
}
}
else {
  header("location:contact.php");
}
 ?>
