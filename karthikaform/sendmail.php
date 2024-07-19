<?php
echo "karthika"; 
$name = $_POST['name'];
$email = $_POST['e_mail_id'];
$mobilenumber = $_POST['mobile_number'];
$message = $_POST['message'];
echo $name;
echo $email;
mail("karthikad1412@gmail.com","Contactform",$message);
?>
