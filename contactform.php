<?php
if(isset($_POST['submt'])) {

$msg = 'Name: ' .$_POST['name'] ."\n"
.'Email: ' .$_POST['email'] ."\n"
.'Comment: ' .$_POST['comment'];

mail('modoseinal@hotmail.com', 'Sample Contact Us Form', 
$msg);

header:('location: contact-us-thank-you.php');
} else {

header:('1ocation: contact-us.php');

exit(0);
}
?>