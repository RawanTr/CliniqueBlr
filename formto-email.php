<?php 
if(isset($_POST['submitButton'])){
    echo"ERROR,Vou devez remplir le form!";
}
//COLLECT INFORMATION
$nom=$_POST['nom'];
$email=$_POST['email'];
$tel=$_POST['phone']
$subject=$_POST['subject'];
$message=$_POST['message'];

//VALIDATION 

if (empty($nom)||empty($email)){
    echo"Attention ,insérrez votre nom et votre adresse mail";
    exit;
}
//EMAIL CONSTRUCTION
$emailfrom=$_POST['email'];
$emailsubject="Nouveau mail CabBLR ";
$emailbody="Vous avez reçu un email de" .$nom."\n. Adresse mail:" .$email. "\n.Message:\n".$message."\n.";
$to="traboulsirawan1@gmail.com";
$headers="Mail de :".$emailfrom."\r \n.";

//SEND EMAIL
if(mail($to,$emailsubject,$emailbody,$headers);){
//Message successfully sent
    echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1>Email Sent Successfully.</h1>";
	echo "<p>Merci <strong>$first_name</strong>, votre message a été bien envoyé.</p>";
	echo "</div>";
	echo "</fieldset>"; 
}
else{
    echo"ERROR";
}

?>