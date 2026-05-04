<?php
include('header.php'); //[cite: 17]
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader un fichier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="text-green">Envoyer un document</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <h2 class="text-green" style="margin-top: 0;">Epsilon</h2>
        
        <label for="mon_fichier" class="input-green">Déposer votre fichier :</label><br>
        <input type="file" class="input-green" name="mon_fichier" id="mon_fichier"><br><br>
        
        <button type="submit">Envoyer</button>
        
       
    </form>
</body>
</html>

<?php
include('footer.php'); //[cite: 17]
?>