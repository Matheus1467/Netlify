

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Aqui você pode adicionar a lógica para enviar o e-mail com os dados do formulário, por exemplo:
    $destinatario = "matheus147.157m@gmail.com";
    $assunto = "Novo contato do site";
    $corpo_email = "Nome: " . $nome . "\n";
    $corpo_email .= "Email: " . $email . "\n";
    $corpo_email .= "Mensagem: " . $mensagem;

    // O envio do e-mail pode ser feito com a função mail() do PHP
    mail($destinatario, $assunto, $corpo_email);

    // Após o envio do e-mail, você pode redirecionar o usuário para uma página de confirmação
    header("Location: google.com");
}
?>