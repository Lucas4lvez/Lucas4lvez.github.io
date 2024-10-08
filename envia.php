<?php

    $nome = addslashes($_POST['nome']); 
    $email = addslashes($_POST['email']); 
    $celular = addslashes($_POST['celular']); 
    $mensagem = addslashes($_POST['mensagem']); 

    $para = "lucasalves_deoliveira@outlook.com";
    $assunto = "Contato para vaga de emprego - Portifólio";


    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n"."Mneagem: ".$mensagem;

    $cabeca = "From: siteportifolio@teste.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com Sucesso!");
    }else{
        echo("Houve um erro ao enviar o E-mail!");
    }

?>