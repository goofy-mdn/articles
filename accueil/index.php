<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600&display=swap" rel="stylesheet">
    <script src="../js/jquery.js"></script>
</head>
<body>
    <script type="text/javascript">

    $(document).ready(function() {

        $('#article-container').load('../php/posts.php');

    });

    </script>
    <div id="bg">
        <div id="article-container">
        </div>
    </div>
</body>
</html>