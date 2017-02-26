<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Nome do Site </title>
        <link rel="stylesheet" type="text/css" href="Styles/contato.css" />
    </head>
    <body>
        <div id="pContainer">
            <div id="pMenu">
                <ul>
                    <li> <a href="index.php"> Home </a> </li>
                    <li> <a href="sobre.php"> Sobre </a> </li>
                    <li> <a href="contato.php"> Contato </a> </li>
                    <li> <a href="imagens.php"> Imagens </a> </li>
                </ul>
            </div>
            <div id="pTopo">
                <img src="Images/logo.png" alt="Logo do site Nome do Site" title="Logo do site" />
            </div>
            <div id="pConteudo">
                <form id="pForm" action="" method="POST" enctype="multipart/form-data">
                    <label> Nome Completo </label> <br />
                    <input type="text" name="pNome" placeholder="Ex: Felipe Silva" /> <br /> <br />
                    <label> E-mail </label> <br />
                    <input type="text" name="pEmail" placeholder="Ex: exemplo@email.com" /> <br /> <br />
                    <label> Assunto </label> <br />
                    <input type="text" name="pAssunto" placeholder="Ex: Parceria" /> <br /> <br />
                    <label> Texto </label>  <br />
                    <textarea name="pTexto"> Texto aqui </textarea>  <br />  <br />
                    <input type="submit" name="button" value="Enviar" />
                </form>
            </div>
    
            <div id="pRodape">
                <ul>
                    <li> <a href="#"> Nome do Site </a> &copy 2014 - Todos os direitos reservados </li>
                    <li> <a href="#"> Sobre Nós </a> </li>
                    <li> <a href="#"> Contato </a> </li>
                </ul>
            </div>
        </div>
    </body>
</html>

<?php
    if(isset($_POST["button"])) {
        $nome   = $_POST["pNome"];
        $email  = $_POST["pEmail"];
        $assu   = $_POST["pAssunto"];
        $text   = $_POST["pTexto"];
        
        if($nome == "" || $email == "" || $assu == "" || $text == "") {
            echo "<script> alert('Preencha todos os campos!'); </script>"; 
            return true;
        }
        
        $corpo = "
           Olá, uma nova mensagem foi enviada para você <br /> <br />
           Nome do Contato: $nome  <br />
           E-mail do Contato: $email  <br />  <br />  <br />
           $text
        ";
        $enviar = mail("canalskytutors@hotmail.com", $assu, $text);
        if($enviar) {
            echo "<script> alert('E-mail enviado com sucesso!'); </script>";   
        } else {    
            echo "<script> alert('ERRO ao enviar o e-mail'); </script>";   
        }
    }
?>

