<?php
    require("Configs/connection.php");    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Nome do Site </title>
        <link rel="stylesheet" type="text/css" href="Styles/imagens.css" />
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
                <div id="formList">
                    <table width="100%">
                        <thead>
                            <tr> 
                                <th>
                                    ID
                                </th>
                                 <th>
                                    Nome
                                </th>
                                <th>
                                    Link
                                </th>
                                <th>
                                    #
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $select = $mysqli->query("SELECT * FROM imagens");
                                $row = $select->num_rows;
                                if($row) { 
                                    while($get = $select->fetch_array()) {
                            ?>
                            <tr>
                                <td> <?=$get["ID"]?></td>
                                <td> <?=$get["NomeTRUE"]?></td>
                                <td> <input type="text" value="<?=$get["Link"]?>" /> </td>
                                <td> <a href="<?=$get["Link"]?>"> CLIQUE AQUI </a> </td>
                            </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
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
