
<?php

if (@$_POST['check'] == 'go') {

$name = $_POST['name'];
$emailAddress = $_POST['emailAddress'];
$phoneNumber = $_POST['phoneNumber'];
$question = $_POST['question'];

$to = "info@alphamensedge.com";

$debug = "nicka.kelly@gmail.com";



if ($name == "") {
echo '<p class="error">Oooops, it seems you forgot to enter your name. Please go back and try again.</p><input type="submit" name="submit" value="Go Back" style="margin: 0 0 15px 25px;" onClick="history.go(-1);return true;">';
}

else if ($emailAddress == "") {
echo '<p class="error">Oooops, it seems you forgot to enter your email address. Please go back and try again.</p><input type="submit" name="submit" value="Go Back" style="margin: 0 0 15px 25px;" onClick="history.go(-1);return true;">';
}

else if ($question == "") {
echo '<p class="error">Oooops, it seems you forgot to enter your question. Please go back and try again.</p><input type="submit" name="submit" value="Go Back" style="margin: 0 0 15px 25px;" onClick="history.go(-1);return true;">';
}

else {

$message = "Name: " . $name . "\nEmail: " . $emailAddress . "\n\n Message: " . $question;

if(!mail($to, 'Alpha Men\'s Edge', $message, 'From: ' . $emailAddress)) {
    die('Error: ' . error_get_last());
}
else {
    echo '<script>
            window.location="http://kelleyscache.com/questions.php";
          </script>'; 
}

}

}//end isset if

else {
echo '
        
        <form name="contact" method="post" id="quote">
      <br />

            <table>
                   <tr><td>Name:</td><td><input id="form" type="text" name="name" value=""></td></tr>
                   <tr><td>Email:</td><td><input id="form" type="text" name="emailAddress" value=""></td></tr>
                   <!--<tr><td>Phone number: </td><td><input id="form" type="text" name="phoneNumber" value=""></td></tr>-->
                    <tr><td>Question:</td><td><textarea id="form" columns="5" rows="5" name="question"></textarea></td></tr>
            </table>
            <br /><br />
            <input type="hidden" name="check" value="go">
            <input id="submit" type="submit" name="submit" value="">
         
</form>
';
}
?>