<?php
#recieve form with password input
$password = $_POST['password'];
# check the password 
if ($password == 'unhackablepassword') {
    echo "cssn{V@l!d@t3_!nput_$3rV3r_S!de}";
} else {
    echo "Bad password, try again";
}
?>
