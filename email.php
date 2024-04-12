<?php

include './index.html';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $mailTo = "augusto210907@duck.com";
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $mensagem_nome = "$nome $sobrenome\n$mensagem";

    $headers = "From: $email";
    
    if (mail($mailTo, $assunto, $mensagem_nome, $headers)){
      echo '<script>
      alert("Mensagem enviada !")
      </script>';
    }

    else{
        echo '<script>
        alert("Ocorreu um erro no envio da mensagem !")
        </script>';
    }
}
