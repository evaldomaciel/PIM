<h2>Cadastro de funcionários</h2>
<div class="form-group">
    <form action="./formFuncionarioInserir.php" method="post" class="form-inline">
        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">ID</label><br/>
            <input class="form-control" style="width: 60px;" type="text" name="id" disabled="disabled">
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Nome</label><br/>
                <input class="form-control" id="inputNome" type="text" name="nome">
            </div>
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">CPF</label><br/>
                <input class="form-control" id="input200" type="text" name="cpfFuncionario">
            </div>
        </div>

        <div style="clear: both">
            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Login</label><br/>
                <input class="form-control" id="input160" type="text" name="login">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Senha</label><br/>
                <input class="form-control" id="input160" type="text" name="senha">
            </div>

            <div id="formCadastro" class="form-group">
                <label for="exampleInputName2">Confirma senha</label><br/>
                <input class="form-control" id="input160" type="text" name="confirmaSenha">
            </div>
        </div>

        <div id="formCadastro" class="form-group">
            <label for="exampleInputName2">Perfil</label><br/>
            <select class="form-control" id="input176" name="perfil">
                <option value='Gerente'>Gerente</option>
                <option value='Funcionario'>Funcionário</option>
            </select>

        </div>
        <div style="clear: both; text-align: center;">
            <input class="btn btn-success" id="input176" type="submit" value="Enviar">
        </div>
    </form>
</div>