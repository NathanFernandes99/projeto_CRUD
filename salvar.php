<?php 
    switch ($_REQUEST['acao']){
        case 'Cadastrar':
            $nome = $_POST["nome"];
            $razao = $_POST["razao"];
            $cnpj = $_POST["cnpj"];
            $nome_rua = $_POST["nome_rua"];
            $numero_rua = $_POST["numero_rua"];
            $complemento = $_POST["complemento"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $estado = $_POST["estado"];
            $cep = $_POST["cep"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $atuacao = $_POST["atuacao"];
            
            $sql = "INSERT INTO usuarios (nome, razao, cnpj, nome_rua, numero_rua, complemento, bairro, cidade, estado, cep, telefone, email, atuacao) VALUES ('{$nome}','{$razao}','{$cnpj}','{$nome_rua}','{$numero_rua}','{$complemento}','{$bairro}','{$cidade}','{$estado}','{$cep}','{$telefone}','{$email}', '{$atuacao}')"; 

            $res = $conn->query($sql);
            if($res==true){
                include("certo.html");
            } else {
                echo "ERRO";
            }

            break;

        case 'editar':
            break;
        case 'excluir':
            break;
            
    }

?>