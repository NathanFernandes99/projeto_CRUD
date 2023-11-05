<h1>Lista de Empresas</h1>
<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn ->query ($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        echo "<table border=2>";
            echo "<tr>";
            echo "<th>". "ID" ."</th>";
            echo "<th>". "Nome da empresa" ."</th>";
            echo "<th>". "Razão Social" ."</th>";
            echo "<th>". "CNPJ" ."</th>";
            echo "<th>". "Nome da rua" ."</th>";
            echo "<th>". "n°" ."</th>";
            echo "<th>". "Complemento" ."</th>";
            echo "<th>". "Bairro" ."</th>";
            echo "<th>". "Cidade" ."</th>";
            echo "<th>". "Estado" ."</th>";
            echo "<th>". "CEP" ."</th>";
            echo "<th>". "Telefone" ."</th>";
            echo "<th>". "E-mail" ."</th>";
            echo "<th>". "Setor Atuação" ."</th>";
            echo "<th>". "Ação" ."</th>";
            echo "</tr>";
        while ($row = $res->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->id."</td". "<br>";
            echo "<td>".$row->nome."</td". "<br>";
            echo "<td>".$row->razao."</td". "<br>";
            echo "<td>".$row->cnpj."</td". "<br>";
            echo "<td>".$row->nome_rua."</td". "<br>";
            echo "<td>".$row->numero_rua."</td". "<br>";
            echo "<td>".$row->complemento."</td". "<br>";
            echo "<td>".$row->bairro."</td". "<br>";
            echo "<td>".$row->cidade."</td". "<br>";
            echo "<td>".$row->estado."</td". "<br>";
            echo "<td>".$row->cep."</td". "<br>";
            echo "<td>".$row->telefone."</td". "<br>";
            echo "<td>".$row->email."</td". "<br>";
            echo "<td>".$row->atuacao."</td". "<br>";
            echo "<td>
                <button oneclick=\"location.href='?page=editar.php';\">Editar</button>
                <button>Excluir</button>
                </td". "<br>";
            echo "</tr>";
       
        } 
         echo "</table>";    
    }
?>