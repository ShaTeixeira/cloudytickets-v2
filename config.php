<!-- configuração do banco de dados -->
<?php
$name_db = 'cloudyticket';
$host_db = 'localhost';
$user_db = 'root';
$password_db = '';

//conectando ao banco 
$dbOpen = mysqli_connect($host_db, $user_db, $password_db, $name_db);

//check connection
if (!$dbOpen) {
    die("Error de conexão." . mysqli_connect_error());
}

echo "Conexão feito com sucesso.";

?>