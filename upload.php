<?php
$dossier_destination = "uploads/";

if (!is_dir($dossier_destination)) {
    mkdir($dossier_destination, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["monFichier"])) {

    
    if ($_FILES["monFichier"]["error"] !== 0) {
    echo "<p style='color:red;'>Code d'erreur PHP : " . $_FILES["monFichier"]["error"] . "</p>";
}
    $fichier = $_FILES["monFichier"];
    $nom_fichier = basename($fichier["name"]);
    $chemin_cible = $dossier_destination . $nom_fichier;
    $extension_fichier = strtolower(pathinfo($chemin_cible, PATHINFO_EXTENSION));
    
    $uploadOk = true;

    $formats_autorises = array("pdf", "txt");
    
    if (!in_array($extension_fichier, $formats_autorises)) {
        echo "<p style='color:red;'>Erreur : Seuls les fichiers PDF et TXT sont autorisés.</p>";
        $uploadOk = false;
    }

    if ($uploadOk) {
        if (move_uploaded_file($fichier["tmp_name"], $chemin_cible)) {
            echo "<p style='color:green;'>Succès ! Le fichier <strong>" . htmlspecialchars($nom_fichier) . "</strong> a bien été déposé sur le serveur.</p>";
        } else {
            echo "<p style='color:red;'>Erreur : Un problème est survenu lors du dépôt du fichier.</p>";
        }
    }

} else {
    echo "<p>Aucun fichier n'a été reçu.</p>";
}
?>

<br>
<a href="index.html">Retour au formulaire</a>