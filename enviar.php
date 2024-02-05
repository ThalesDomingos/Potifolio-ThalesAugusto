<?php

    $nome  = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $numero = addcslashes($_POST['numero']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "thales_addo1@hotmail.com";
    $assunto = "Contato via site portifolio"

    $corpo = 
        "Nome: ".$nome."\n".
        "Email: ".$email."\n".
        "Numero: ".$numero."\n".
        "Mensagem: ".$mensagem."\n";

    $cabeca = "From: thalesaddo@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!")
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>