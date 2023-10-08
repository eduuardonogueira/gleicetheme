<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $from = "gleicerodrigues.adv.br";
    $to = "juridico@gleicerodrigues.adv.br";
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $nome = $_POST['nome']; 

    $area = $_POST['area'];
    $subject = "Novo email de: " . $email . " | Area: " . $area;
    $message = "Nome: " . $nome . "\nMensagem: \n" . $mensagem;
    $headers = "From:" . $from;
    
    mail($to,$subject,$message, $headers);
    echo "E-mail enviado com sucesso!";
?>