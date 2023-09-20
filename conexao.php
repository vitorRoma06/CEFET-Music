<?php


$usuario = 'root';
$senha = '';
$database = 'cefetmusic';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
    die('Falha ao conectar ao banco de dados: ' . $mysql->error);
}
?>