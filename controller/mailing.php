<?php

$mail = 'bupatrickpublim@gmail.com';

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)){
  $sautLigne = "\r\n";
} else {
  $sautLigne = "\n";
}

$message_txt = $_POST['corps'];
$message_html = "<html><head></head><body>".$_POST['corps']."</body></html>";

$limite = "-----=".md5(rand());

$sujet = $_POST['objet'];

$header = "From: \"".$_POST['pseudo']."\"<".$_POST['adresse'].">".$sautLigne;
$header.= "Reply-to: \"Papeterie Montparnasse\" <".$_POST['adresse'].">".$sautLigne;
$header.= "MIME-Version: 1.0".$sautLigne;
$header.= "Content-Type: multipart/alternative;".$sautLigne." limite=\"$limite\"".$sautLigne;


$message = $sautLigne."--".$limite.$sautLigne;
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$sautLigne;
$message.= "Content-Transfer-Encoding: 8bit".$sautLigne;
$message.= $sautLigne.$message_txt.$sautLigne;

$message.= $sautLigne."--".$limite.$sautLigne;

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$sautLigne;
$message.= "Content-Transfer-Encoding: 8bit".$sautLigne;
$message.= $sautLigne.$message_html.$sautLigne;
$message.= $sautLigne."--".$limite."--".$sautLigne;
$message.= $sautLigne."--".$limite."--".$sautLigne;


mail($mail,$sujet,$message,$header);

if(mail($mail, $sujet, $message, $header)){
  echo 'Votre message a bien été envoyé ';
} else {
  echo "Votre message n'a pas pu être envoyé";
}
header("location:../views/viewContact.php");

?>
