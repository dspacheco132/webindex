<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $utilizador = $_POST["utilizador"];
    $senha = $_POST["senha"];

$servername = "db";
$username   = "xpto";
$password   = "xpto";
$dbname     = "xpto";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Não foi possivel fazer-se a conexão:" . mysqli_connect_error());
}

$user = mysqli_real_escape_string($conn, $_REQUEST['user']);
$pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);
$sql = "SELECT * FROM usuarios WHERE utilizador = '$utilizador' AND senha = '$senha'";
$result = $conn->query($sql);

    /// Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Usuário e senha estão corretos, redireciona para a página de sucesso
        header("Location: index.html");
        exit;
    } else {
        // Usuário e/ou senha estão incorretos, exibe uma mensagem de erro
        echo "Usuário e/ou senha incorretos.";
    }

    mysqli_close($conn);
}
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
    <a href="http://localhost:80/signin.html" target="_blank" class="btn btn-main1">Tentar Novamente</a>
</body>
</html>