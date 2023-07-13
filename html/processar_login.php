<?php

$servername = "xpto";
$username   = "xpto";
$password   = "xpto";
$dbname     = "xpto";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Não foi possivel fazer-se a conexão:" . mysqli_connect_error());
}

$user = mysqli_real_escape_string($conn, $_REQUEST['user']);
$pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);
$sql1 = "SELECT * FROM data WHERE user='$user' AND pass='$pass'";
$result = $conn->query($sql1);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    header("location: sucesso_login.php");
    exit;
} else {
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>
<body>
    <h1>Não foi possivel dar login<h/1>
    <a href="http://localhost:80/login.php" target="_blank" class="btn btn-main1">Tentar Novamente</a>
</body>
</html>