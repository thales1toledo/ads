<?php
$pessoa = $_POST['tipoPessoa'];

    if ($pessoa == "FuncAdm"){
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo "<link rel='stylesheet' href='style.css'>";
        echo "</head>";
        echo "<body>";
        echo "<div id='header'>";
        echo "<h1 id='h1' align='center'>Func. Administrativo</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo '<legend>Preencha</legend>';
        echo "<h2 id='h2' style='text-align: center'>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibirPessoa.php'>";
        echo '<p>Nome: <input type="text" name="Nome"></p>';
        echo '<p>Cpf: <input type="text" name="Cpf"></p>';
        echo '<p>Idade: <input type="text" name="Idade"></p>';
        echo '<p>Sexo: <input type="text" name="Sexo"></p>';
        echo '<p>Cidade: <input type="text" name="Cidade"></p>';
        echo '<p>Estado: <input type="text" name="Estado"></p>';
        echo '<p>Setor: <input type="text" name="Setor"></p>';
        echo '<p>Cargo: <input type="text" name="Cargo"</p>';
        echo '<p>Salario: <input type="text" name="Salario"</p>';
        echo '<input type="hidden" value="FuncAdm" name="PessoaTipo">';
        echo "<div id='botaoSubmit'>";
        echo '<p><input type="submit" value="Enviar"</p>';
        echo '</div>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";

    } elseif ($pessoa == 'FuncDocente') {
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo "<link rel='stylesheet' href='style.css'>";
        echo "</head>";
        echo "<body>";
        echo "<div id='header'>";
        echo "<h1 id='h1' align='center'>Func. Docente</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2 id='h2' style='text-align: center'>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibirPessoa.php'>";
        echo '<p>Nome: <input type="text" name="Nome"></p>';
        echo '<p>Cpf: <input type="text" name="Cpf"></p>';
        echo '<p>Idade: <input type="text" name="Idade"></p>';
        echo '<p>Sexo: 
        <select name="Sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select></p>';
        echo '<p>Cidade: <input type="text" name="Cidade"></p>';
        echo '<p>Estado: <input type="text" name="Estado"></p>';
        echo '<p>Materia: <input type="text" name="Materia"></p>';
        echo '<p>Cargo: <input type="text" name="Cargo"</p>';
        echo '<p>Salario: <input type="text" name="Salario"</p>';
        echo '<input type="hidden" value="FundDocente" name="PessoaTipo">';
        echo "<div id='botaoSubmit'>";
        echo '<p><input type="submit" value="Enviar"</p>';
        echo '</div>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
    } else {
        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<head>";
        echo "<title>Página de cadastro</title>";
        echo "<meta charset='utf-8'>";
        echo "<link rel='stylesheet' href='style.css'>";
        echo "</head>";
        echo "<body>";
        echo "<div id='header'>";
        echo "<h1 id='h1' align='center'>Discente</h1>";
        echo "</div>";
        echo "<div id='content'>";
        echo "<fieldset>";
        echo "<h2 id='h2'>Formulário de entrada de dados</h2>";
        echo "<form id='formulario' method='post' action='exibirPessoa.php'>";
        echo '<p>Nome: <input type="text" name="Nome"></p>';
        echo '<p>Cpf: <input type="text" name="Cpf"></p>';
        echo '<p>Idade: <input type="text" name="Idade"></p>';
        echo '<p>Sexo: <input type="text" name="Sexo"></p>';
        echo '<p>Cidade: <input type="text" name="Cidade"></p>';
        echo '<p>Estado: <input type="text" name="Estado"></p>';
        echo '<p>Curso: <input type="text" name="Curso"></p>';
        echo '<p>Periodo: <input type="text" name="Periodo"</p>';
        echo "<div id='botaoSubmit'>";
        echo '<p><input type="submit" value="Enviar"</p>';
        echo '</div>';
        echo "</form>";
        echo "</fieldset>";
        echo "</div>";
        echo "</body>";
        echo "</html>";
    }
