<?php
if(isset($_POST['femail'])) {
 
    $email_to = "patrycja.chociej@gmail.com";
    $email_subject = "Nowa wiadomosc - Pani Programistka";  
 
    $fname = $_POST['fname'];
    $email_from = $_POST['femail'];
    $message = $_POST['ftextmessage'];
 
    $email_message = "Szczegoly wiadomosci:\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Imie: ".clean_string($fname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Wiadomosc: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

$_SESSION["message_sent"] = "success";
header("Location: index.php#contact"); 

 
}
?>