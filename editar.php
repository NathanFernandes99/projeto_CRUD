<h1>Editar Empresa</h1>
<form action="?page=salvar" method="post">
    <div>
        <label>Nome da Empresa</label><br>
        <input type="text" name="nome" required>
    </div>
    <div>
        <label>Razão Social</label><br>
        <input type="text" name="razao" required>
    </div>
    <div>
        <label>CNPJ</label><br>
        <input type="text" name="cnpj" required>
    </div>
    <div>
        <label>Nome da Rua</label><br>
        <input type="text" name="nome_rua" required>
    </div>
    <div>
        <label>Numero da Rua</label><br>
        <input type="text" name="numero_rua" required>
    </div>
    <div>
        <label>Complemento</label><br>
        <input type="text" name="complemento">
    </div>
    <div>
        <label>Bairro</label><br>
        <input type="text" name="bairro" required>
    </div>
    <div>
        <label>Cidade</label><br>
        <input type="text" name="cidade" required>
    </div>
    <div>
        <label>Estado</label><br>
        <input type="text" name="estado" required>
    </div>
    <div>
        <label>CEP</label><br>
        <input type="text" name="cep" required>
    </div>
    <div>
        <label>Telefone</label><br>
        <input type="text" name="telefone" required>
    </div>
    <div>
        <label>Email</label><br>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Atuação</label><br>
        <input type="text" name="atuacao" required><br>
    </div>
    <input type="submit" name="acao" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>