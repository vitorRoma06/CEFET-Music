<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conecta ao banco de dados (substitua com suas próprias credenciais)
    $dsn = 'mysql:host=localhost;dbname=cefetmusic;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Recebe os valores do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha']; 

        // Prepara e executa a query de inserção
        $stmt = $pdo->prepare('INSERT INTO login (nome, email, senha) VALUES (?, ?, ?)');
        $stmt->execute([$nome, $email, $senha]);

        header('Location: login.php');
        exit();
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    }
}

?>