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
                header("Location: Explorar.php");
                exit; // Encerra a execução do script após o redirecionamento
            } else {
                $mensagemErro = "Credenciais inválidas. Tente novamente.";
            }
        } else {
            $mensagemErro = "Por favor, preencha todos os campos.";
        }
    } else {
        $mensagemErro = "Erro ao processar o formulário.";
    }

    // Redireciona para a página de login com o parâmetro ?login=erro para exibir a mensagem de erro
    header("Location: Login.php?login=erro&mensagem=" . urlencode($mensagemErro));
    exit; // Encerra a execução do script após o redirecionamento
}

// Verifica se há uma mensagem de erro na URL
if (isset($_GET['login']) && $_GET['login'] == 'erro' && isset($_GET['mensagem'])) {
    $mensagemErro = $_GET['mensagem'];
    echo '<p class="mensagem-erro">' . $mensagemErro . '</p>';
}
?>
