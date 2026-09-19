
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro com post</title>
    <meta charset="utf-8">
</head>
<body>
    <form name="cadastro" method="post" action="cadastro2.php">
        <table>
            <tr>
                <td><label>Nome:</label></td>
                <td><input type="text" name="nome" size="20"></td>
            </tr>
            <tr>
                <td>Data de nascimento:</td>
                <td><input type="date" name="dataNascimento"></td>
            </tr>
            <tr>
                <td><label>Endereço:</label></td>
                <td><textarea name="endereco" cols="22"></textarea></td>
            </tr>
            <tr>
                <td><label>Estado civil:</label></td>
                <td>
                    <select name="estadoCivil">
                        <option value="Solteiro">Solteiro</option>
                        <option value="Casado">Casado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Sexo:</label></td>
                <td>
                    Masculino <input type="radio" name="sexo" value="M">
                    Feminino <input type="radio"  name="sexo" value="F">
                </td>
            </tr>          
            <tr>
                <td><label>Meio de locomoção:</label></td>
                <td>
                    <input type="checkbox" name="locomocao[]" value="Moto">Moto
                    <input type="checkbox" name="locomocao[]" value="Coletivo">Coletivo
                    <input type="checkbox" name="locomocao[]" value="Bicicleta">Bicicleta
                </td>
            </tr>
            <tr>
                <td><label>Senha:</label></td>
                <td><input type="password" name="senha" size="20"></td>
            </tr>
            <tr>
                <td><label>Confirma senha:</label></td>
                <td><input type="password" name="confirmasenha" size="20"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" value="Enviar">
                    <input type="reset" name="limpar" value="Limpar">
                </td>
            </tr>
        </table>
    </form>
</body>
<?php
    /* FORM COM POST */
    // Verifica se o botão de envio foi pressionado
    if (isset($_POST['enviar']) && $_POST['enviar'] == 'Enviar') {
        // Exibe todos os parâmetros do POST
        foreach ($_POST as $key => $value) {
            if ($key !== 'locomocao') {
                echo "$key: $value <br>";
            }
        }

        // Exibe os valores de 'locomocao', que é um array
        if (isset($_POST['locomocao']) && is_array($_POST['locomocao'])) {
            foreach ($_POST['locomocao'] as $value) {
                echo "Locomoção: $value <br>";
            }
        }
    }
?>
</html>
<!--http://localhost/atividades_testes_2025/form-livro/cadastro2.php--->