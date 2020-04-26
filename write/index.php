<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Création</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
						
</head>
<body>
    <form action="../php/form_handler.php" method="post" class="form" enctype="multipart/form-data">
        <input type="text" id="title" name="title" required placeholder="Insérez un titre..."/>
        <br>
        <br>
        <input type="file" name="icon"/>
        <br>
        <br>
        <label for="category">Catégorie: </label>
        <select id="category" name="category">
            <option value="Gaming">Gaming</option>
            <option value="Serveur">Serveur</option>
            <option value="Événement">Événement</option>
	    <option value="Autre">Autre</option>
        </select>
        <br>
        <br>
        <label for="contenu">Contenu de l'article: </label>
        <textarea id="contenu" style="width:200px; height:100px;" name="content" placeholder="Insérez du texte…"></textarea>
        <br>
        <input type="submit" value="Valider"/>

        <script>
            var simplemde = new SimpleMDE({element: document.getElementById("contenu")});
        </script>
    </form>
</body>
</html>
