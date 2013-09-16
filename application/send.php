<?php
if ("POST" !== $_SERVER['REQUEST_METHOD']) { header('Location: contact.php'); }

$to      = $_POST['email'];
$subject = $_POST['subject'];
$message = sprintf("Votre message a bien été envoyé. Pour mémoire, voici son contenu : \r\n %s", $_POST['message']);
 
if (is_email($to)) { header('Location: contact.php'); }
 
$headers = sprintf("MIME-Version: 1.0 \r\n From: %s \r\n Reply-To: %s \r\n X-Mailer:PHP/ %s",
                   $to,
                   $to,
                   phpversion());
 
mail($to, $subject, $message, $headers);
header('Location: contact.php');

/**
 * This method clean form message
 *
 * @param string - dirty string
 * @return string - clean string
 *
 */
function clean($text) {
    $text = htmlspecialchars(trim($text), ENT_QUOTES);
    if (1 === get_magic_quotes_gpc()) {
        $text = stripslashes($text);
    }
    $text = nl2br($text);
    return $text;
}
/**
 * This method check email format
 *
 * @param email
 * @return boolean
 *
 */
function is_email($email) {
    $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    return (($value === 0) || ($value === false)) ? false : true;
}