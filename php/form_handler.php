<?php 

include('db.php');

$content = filter_var($_POST["content"], FILTER_SANITIZE_STRING);
$title = filter_var($_POST["title"], FILTER_SANITIZE_STRING);
$content_dir = '../upload/';
$category = filter_var($_POST["category"], FILTER_SANITIZE_STRING);

$tmp_file = $_FILES['icon']['tmp_name'];

if(!is_uploaded_file($tmp_file)) {
    exit("Le fichier est introuvable !");
}

if(!file_exists($content_dir)) {
	mkdir("../upload");
}

$type_file = $_FILES['icon']['type'];
if(!strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') && !strstr($type_file, 'png')) {
    exit("Le fichier n'est pas une image !");
}
$result = $conn->query("SELECT `AUTO_INCREMENT`
FROM  INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = 'dynatest'
AND   TABLE_NAME   = 'articles';");

$data = mysqli_fetch_array($result);
$filetype = explode(".", $_FILES['icon']['name']);

$name_file = $data["AUTO_INCREMENT"] . "." . $filetype[1];

if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file) )
{
    exit("Nom de fichier non valide");
}
else if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
{
    exit("Impossible de copier le fichier dans $content_dir");
}

echo "Votre icon a bien été upload.";


date_default_timezone_set('Europe/Paris');
$timestamp = date_create();
$timestamp = date_format($timestamp, 'd/m/y');

$statement = $conn->prepare("INSERT INTO articles (id, content, date_creation, title, icon, category) VALUES (?, ?, ?, ?, ?, ?)");
$statement->bind_param('isssss', $id, $content, $timestamp, $title, $filetype[1], $category);


if($statement->execute()) {
    echo "<p>Votre article a bien été sauvegardé</p>";
} else {
    echo $conn->error;
}

?>
