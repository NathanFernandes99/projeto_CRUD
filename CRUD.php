<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <div>
        <a href="CRUD.php">
            <h1>Cadastro</h1>
        </a>
        <ul>
            <li><a href="?page=novo">Nova Empresa</a></li>
            <li><a href="?page=listar">Lista de Empresa</a></li>
        </ul>
    </div>

    <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("nova-empresa.php");
            break;
            case "listar":
                include ("listar-empresa.php");
            break;
            case "salvar":
                include("salvar.php");
            break;
            case "editar":
                include("editar.php");
            break;
            default:
                echo "Bem vindos!";
        }
    ?>
</body>
</html>