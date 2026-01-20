<?php

include('db_connex.php');
    session_start();

// Vérification du rôle
if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'editeur') {
    exit("Accès refusé");
}

$type = $_POST['type_media'];
$titre = $_POST['titre'];
$desc = $_POST['description'];
$date = $_POST['date_event'];
$auteur = $_SESSION['id'];

$ext = pathinfo($_FILES['media']['name'], PATHINFO_EXTENSION);
$nom_fichier = uniqid() . "." . $ext;

$dossier = ($type === 'photo') ? 'uploads/photos/' : 'uploads/videos/';
$chemin = $dossier . $nom_fichier;

move_uploaded_file($_FILES['media']['tmp_name'], $chemin);

$sql = "INSERT INTO evenements (titre, descrip, type_media, fichier, date_event, auteur_id)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $sign->prepare($sql);
$stmt->execute([$titre, $desc, $type, $chemin, $date, $auteur]);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_event.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="titre" placeholder="Titre de l'événement" required>

    <textarea name="description" placeholder="Description"></textarea>

    <input type="date" name="date_event">

    <select name="type_media" required>
        <option value="photo">Photo</option>
        <option value="video">Vidéo</option>
    </select>

    <input type="file" name="media" required>

    <button type="submit">Publier</button>
</form>

</body>
</html>