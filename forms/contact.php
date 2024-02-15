<?php

$nameErr = isset($_POST['name']) ? (empty($_POST['name']) ? 'Le champ nom est requis' : (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name']) ? 'Seuls les lettres et les espaces blancs sont autorisés' : '')) : '';
$emailErr = isset($_POST['email']) ? (empty($_POST['email']) ? 'Le champ email est requis' : (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? 'Format d\'email invalide' : '')) : '';
$subjectErr = isset($_POST['subject']) ? (empty($_POST['subject']) ? 'Le champ sujet est requis' : (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['subject']) ? 'Seuls les lettres et les espaces blancs sont autorisés' : '')) : '';
$messageErr = isset($_POST['message']) ? (empty($_POST['message']) ? 'Le champ message est requis' : (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['message']) ? 'Seuls les lettres et les espaces blancs sont autorisés' : '')) : '';

$name = isset($_POST['name']) ? validateInput($_POST['name']) : '';
$email = isset($_POST['email']) ? validateInput($_POST['email']) : '';
$subject = isset($_POST['subject']) ? validateInput($_POST['subject']) : '';
$message = isset($_POST['message']) ? validateInput($_POST['message']) : '';

$showMessage = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  try {
    $pdo = new PDO('mysql:host=' . $db_host . ';port=' . $db_port . ';dbname=' . $db_name, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stm = $pdo->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)");

    $stm->bindParam(':name', $name);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':subject', $subject);
    $stm->bindParam(':message', $message);

    $stm->execute();

    if ($stm->rowCount() > 0) {
      $_SESSION['message'] = [
        'text' => "Votre message est envoyé avec succès. Merci!",
        'type' => 'success'
      ];
    } else {
      $_SESSION['message'] = [
        'text' => "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer plus tard.",
        'type' => 'error'
      ];
    }
  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'text' => "Erreur de connexion : " . $e->getMessage(),
      'type' => 'error'
    ];
  }
  
}

function validateInput($input)
{
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}