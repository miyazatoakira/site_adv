<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = addslashes($_POST["nome"]);
    $sobrenome = addslashes($_POST["sobrenome"]);
    $email = addslashes($_POST["email"]);
    $assunto = addslashes($_POST["assunto"]);
    $mensagem = addslashes($_POST["mensagem"]);
    
    // Email de destino
    $destino = "ivone.shiniti@adv.oabsp.org.br";
    
    // Corpo do e-mail
    $corpo_email = "Nome: $nome $sobrenome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    $cabeca = "From: ivone.shiniti@adv.oabsp.org.br"."\n"."Reply-to: ".$email."X=Mailer:PHP/".phpversion();
    
    // Envia o e-mail
    if (mail($destino, $assunto, $corpo_email, $cabeca)) {
        echo "<p>E-mail enviado com sucesso!</p>";
    } else {
        echo "<p>Ocorreu um erro ao enviar o e-mail.</p>";
    }
}
