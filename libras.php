<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["libras"])) {
        header("Location: https://www.gov.br/governodigital/pt-br/vlibras");
        exit;
    }
}
?>
