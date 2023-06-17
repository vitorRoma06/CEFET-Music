<?php
// Array para armazenar os dados do login
$dadosLogin = array();

// Verifica se o formulário foi enviado via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de email e senha foram preenchidos
    if (isset($_POST["email"]) && isset($_POST["senha"])) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Verifica se o email e a senha são válidos 
        if (!empty($email) && !empty($senha)) {
            // Armazena os dados do login no array
            $dadosLogin["email"] = $email;
            $dadosLogin["senha"] = $senha;

            if ($email == "usuario" && $senha == "123456") {
                echo '<p class="mensagem-sucesso">Login realizado com sucesso!</p>';
            } else {
                echo '<p class="mensagem-erro">Credenciais inválidas. Tente novamente.</p>';
            }
        } else {
            echo '<p class="mensagem-erro">Por favor, preencha todos os campos.</p>';
        }
    } else {
        echo '<p class="mensagem-erro">Erro ao processar o formulário.</p>';
    }
}
?>
