<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="theme-color" content="#f4332">
    <link rel="shortcut icon" href="../1/channels4_profile.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,black,blue);}
h1{text-decoration: underline;text-shadow: 9px;color: white;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
h2{text-shadow: 9px;color: black;font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-style: inherit;white-space: nowrap;}
p{text-shadow: 9px;color: white;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: initial;}
a{border-radius: 10px 10px;text-decoration: none;text-shadow: 9px;font-size: 17px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-style: inherit;}
.footer:hover{transition: ease s;transform: scale(1.04);}
.nav:hover{transition: ease s;transform: scale(1.05);}
.summary:hover{transition: ease s;transform: scale(1.06);}
footer{cursor: cell;width: 300px;margin: auto;border-radius: 10px 10px;padding: 30px;align-items: center;justify-content: center;text-align: center;border: 5px solid white;}
nav{cursor: cell;width: 300px;margin: auto;border-radius: 10px 10px;padding: 30px;align-items: center;justify-content: center;text-align: center;border: 5px solid black;}
summary{cursor: crosshair;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;text-shadow: 9px;font-size: 17px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
form{margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;}
fieldset{display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;width: 300px;border-radius: 10px 10px;padding: 10px;background-color: white;border: 5px solid red;box-shadow: 7px 7px 7px black;}
label{text-shadow: 9px;padding: 17px;margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;}
.color1{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: blue;border: 5px solid white;box-shadow: 8px 8px 8px black;cursor: crosshair;}
.color2{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: red;border: 5px solid white;box-shadow: 8px 8px 8px black;cursor: crosshair;}
.color3{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: red;border: 5px solid white;box-shadow: 8px 8px 8px black;cursor: crosshair;}
.color4{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: darkblue;border: 5px solid whitesmoke;box-shadow: 8px 8px 8px black;cursor: crosshair;}
.color5{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: darkgoldenrod;border: 5px solid white;box-shadow: 8px 8px 8px black;cursor: crosshair;}
.color6{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: darkcyan;border: 5px solid black;box-shadow: 8px 8px 8px black;cursor: crosshair;}
.color7{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: black;border: 5px solid white;box-shadow: 8px 8px 8px black;cursor: crosshair;}
.color8{gap: 6px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;white-space: nowrap;width: 800px;border-radius: 10px 10px;padding: 10px;background-color: darkgreen;border: 5px solid white;box-shadow: 8px 8px 8px black;cursor: crosshair;}
input{text-align: left;text-shadow: 9px;width: 300px;margin: auto;border-radius: 10px 10px;padding: 4px;color: black;font-size: 15px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;background-color: white;border: 4px solid blue;cursor: copy;}
select{cursor: default;width: 200px;margin: auto;border-radius: 10px 10px;padding: 3px;font-size: 16px;text-shadow: 9px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;background-color: black;color: white;border: 4px solid white;box-shadow: 3px 3px 3px yellow;}
textarea{cursor: default;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 14px;background-color: antiquewhite;border: 3px solid red;color: black;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;}
button{cursor: e-resize;width: 260px;margin: auto;border-radius: 10px 10px;padding: 5px;text-shadow: 9px;font-size: 20px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;background-color: blue;color: white;border: 4px solid white;box-shadow: 7px 7px 7px black;}
</style>
<body>
    <div id="text"><details><summary style="width:300px;background-color:white;color:black;border:3px solid blue;box-shadow:8px 8px 8px black">Formulário</summary>
    <br>
    <form action="cadastro.php" method="post">
    <header><h1><big>Cadastro de Brs</big></h1></header>
    <br>
    <main>
    <fieldset>
    <label for="Nome" style="text-align:left;">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Exemplo: Guilherme Barbosa da Silva" title="Digite seu Nome" maxlength="30" required>
    <label for="Idade" style="text-align:left;">Idade</label>
    <input type="number" name="idade" id="idade" placeholder="Exemplo: 23 anos ou 30 anos ??" title="Digite sua Idade" maxlength="100" required>
    <label for="CPF" style="text-align:left;">CPF</label>
    <input type="text" name="cpf" id="cpf" placeholder="Exemplo: 503.552.748-41" title="Digite seu CPF" maxlength="16" required>
    <label for="RG" style="text-align:left;">RG</label>
    <input type="text" name="rg" id="rg" placeholder="Exemplo: 53.742.867-7" title="Digite seu RG" maxlength="16" required>
    <label for="Endereço" style="text-align:left;">Endereço</label>
    <input type="text" name="endereco" id="endereco" placeholder="Exemplo: Rua estado do ceára Nª728" title="Digite seu endereço" maxlength="30" required>
    <label for="Telefone" style="text-align:left;">Telefone</label>
    <input type="tel" name="telefone" id="telefone" placeholder="Exemplo: (11) 98341-7590" title="Digite seu Telefone" maxlength="15" required>
    <label for="Email" style="text-align:left;">Email</label>
    <input type="email" name="email" id="email" placeholder="Exemplo: guilherme8876sk@gmail.com" title="Digite seu Email" maxlength="25" required>
    <label for="Data de Nascimento" style="text-align:left;">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="data_nasc" placeholder="Exemplo: 22/05/2001" title="Digite sua Data de nascimento" maxlength="5" required>
    <label for="Data e Hora" style="text-align:left;">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="data_hora" placeholder="Exemplo: 22/05 ás 10 AM" title="Digite sua Data e Hora" maxlength="10" required>
    <label for="Seu nível" style="text-align:left;">Seu nível</label>
    <input type="range" name="nivel" id="nivel" placeholder="Exemplo: +/-" title="Digite seu Nível" maxlength="1" required>
    <label for="Sua Cor" style="text-align:left;">Sua Cor</label>
    <input type="color" name="cor" id="cor" placeholder="Exemplo: Branco ou negro?" title="Digite sua Cor" maxlength="1" required>
    <label for="Sexo" style="text-align:left;">Sexo</label>
    <select name="sexo" id="sexo" required style="background-color:white;color:blue;border:4px solid red;box-shadow:5px 5px 5px black;width:200px;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Transsexual">Transsexual</option>
    <option value="Não Binário">Não Binário</option>
    <option value="Homossexual">Homossexual</option>
    </select>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiência?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:white;color:black;border:4px solid red;box-shadow:6px 6px 6px black;">QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Aprendiz</label>
    <input type="checkbox" name="experiencia" value="Aprendiz">
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Iniciante</label>
    <input type="checkbox" name="experiencia" value="Iniciante">
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Jovem</label>
    <input type="checkbox" name="experiencia" value="Jovem">
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Mediano</label>
    <input type="checkbox" name="experiencia" value="Mediano">
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Intermediário</label>
    <input type="checkbox" name="experiencia" value="Intermediário">
    <label for="Avançado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Avançado</label>
    <input type="checkbox" name="experiencia" value="Avançado">
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:darkblue;color:white;border:3px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;color:black;font-size:14px;">Jovem</label>
    <input type="radio" name="conhecimento" value="Jovem" required>
    <label for="Junior" style="white-space:nowrap;text-shadow:9px;color:black;font-size:14px;">Junior</label>
    <input type="radio" name="conhecimento" value="Junior" required>
    <label for="Pleno" style="white-space:nowrap;text-shadow:9px;color:black;font-size:14px;">Pleno</label>
    <input type="radio" name="conhecimento" value="Pleno" required>
    <label for="Sênior" style="white-space:nowrap;text-shadow:9px;color:black;font-size:14px;">Sênior</label>
    <input type="radio" name="conhecimento" value="Sênior" required>
    <label for="Master" style="white-space:nowrap;text-shadow:9px;color:black;font-size:14px;">Master</label>
    <input type="radio" name="conhecimento" value="Master" required>
    <label for="Expert" style="white-space:nowrap;text-shadow:9px;color:black;font-size:14px;">Expert</label>
    <input type="radio" name="conhecimento" value="Expert" required>
    </div>
</details></div></div>
    <br>
    <br>
     <h2><big>Qual é o seu nível social?</big></h2>
     <br>
     <div class="summary"><div id="text"><details><summary style="background-color:darkred;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
     <br>
     <div class="color3">
    <label for="Base" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Base</label>
    <input type="checkbox" name="nivel_social" value="Base">
    <label for="Desconhecido" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Desconhecido</label>
    <input type="checkbox" name="nivel_social" value="Desconhecido">
    <label for="Normal" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Normal</label>
    <input type="checkbox" name="nivel_social" value="Normal">
    <label for="Fluênte" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Fluênte</label>
    <input type="checkbox" name="nivel_social" value="Fluênte">
    <label for="Influênte" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Influênte</label>
    <input type="checkbox" name="nivel_social" value="Influênte">
    <label for="Influêncer" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Influêncer</label>
    <input type="checkbox" name="nivel_social" value="Influêncer">
     </div>
    </details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:chocolate;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Classe A" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua postura?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:darkblue;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color5">
    <label for="Normal" style="text-shadow:9px;white-space:nowrap;color:white;font-size:14px">Normal</label>
    <input type="checkbox" name="sua_postura" value="Normal">
    <label for="Torta" style="text-shadow:9px;white-space:nowrap;color:white;font-size:14px">Torta</label>
    <input type="checkbox" name="sua_postura" value="Torta">
    <label for="Desengonçada" style="text-shadow:9px;white-space:nowrap;color:white;font-size:14px">Desengonçada</label>
    <input type="checkbox" name="sua_postura" value="Desengonçada">
    <label for="Esticada" style="text-shadow:9px;white-space:nowrap;color:white;font-size:14px">Esticada</label>
    <input type="checkbox" name="sua_postura" value="Esticada">
    <label for="Eréta" style="text-shadow:9px;white-space:nowrap;color:white;font-size:14px">Eréta</label>
    <input type="checkbox" name="sua_postura" value="Eréta">
    <label for="Corcunda" style="text-shadow:9px;white-space:nowrap;color:white;font-size:14px">Corcunda</label>
    <input type="checkbox" name="sua_postura" value="Corcunda">
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua altura?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:white;color:black;border:4px solid red;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color6">
    <label for="1.50 cm" style="font-size:14px;text-shadow:9px;color:white;font-size:14px">1.50 cm</label>    
    <input type="radio" value="1.50 cm" name="sua_altura" required>
    <label for="1.60 cm" style="font-size:14px;text-shadow:9px;color:white;font-size:14px">1.60 cm</label>
    <input type="radio" value="1.60 cm" name="sua_altura" required>
    <label for="1.70 cm" style="font-size:14px;text-shadow:9px;color:white;font-size:14px">1.70 cm</label>
    <input type="radio" value="1.70 cm" name="sua_altura" required>
    <label for="1.80 cm" style="font-size:14px;text-shadow:9px;color:white;font-size:14px">1.80 cm</label>
    <input type="radio" value="1.80 cm" name="sua_altura" required>
    <label for="1.90 cm" style="font-size:14px;text-shadow:9px;color:white;font-size:14px">1.90 cm</label>
    <input type="radio" value="1.90 cm" name="sua_altura" required>
    <label for="2.00 cm" style="font-size:14px;text-shadow:9px;color:white;font-size:14px">2.00 cm</label>
    <input type="radio" value="2.00 cm" name="sua_altura" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu hobby?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:red;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color7">
    <label for="Jogar Game" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Jogar Game</label>
    <input type="checkbox" name="seu_hobby" value="Jogar Game">
    <label for="Ir Jogar bola" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Ir Jogar bola</label>
    <input type="checkbox" name="seu_hobby" value="Ir Jogar bola">
    <label for="Skate" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Skate</label>
    <input type="checkbox" name="seu_hobby" value="Skate">
    <label for="Academia" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Academia</label>
    <input type="checkbox" name="seu_hobby" value="Academia">
    <label for="Natação" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Natação</label>
    <input type="checkbox" name="seu_hobby" value="Natação">
    <label for="Basquete" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Basquete</label>
    <input type="checkbox" name="seu_hobby" value="Basquete">
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua conduta?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:darkgrey;color:white;border:4px solid white;box-shadow:4px 4px 4px black;">QUAL?</summary>
    <br>
    <div class="color8">
    <label for="Normal" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Normal</label>
    <input type="radio" name="sua_conduta" value="Normal" required>
    <label for="Eréta" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Eréta</label>
    <input type="radio" name="sua_conduta" value="Eréta" required>
    <label for="Obediente" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Obediente</label>
    <input type="radio" name="sua_conduta" value="Obediente" required>
    <label for="Disciplinado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Disciplinado</label>
    <input type="radio" name="sua_conduta" value="Disciplinado" required>
    <label for="Desorientado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Desorientado</label>
    <input type="radio" name="sua_conduta" value="Desorientado" required>
    <label for="Desconcentrado" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:white;">Desconcentrado</label>
    <input type="radio" name="sua_conduta" value="Desconcentrado" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required style="padding:5px;font-size:20px;box-shadow:6px 6px 6px black;color:yellow;">
    <option value="" selected disabled>Selecione</option>
    <option value="Áries">Áries</option>
    <option value="Aquário">Aquário</option>
    <option value="Câncer">Câncer</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Leão">Leão</option>
    <option value="Libra">Libra</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Touro">Touro</option>
    <option value="Peixes">Peixes</option>
    <option value="Virgem">Virgem</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Ofiúco">Ofiúco</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre você e sua experiência</big></h2>
    <br>
    <textarea name="experience_text" id="expetience_text" rows="8" required></textarea>
    <br>
    <br>
    <button value="experiência">Cadastre</button>
    <br>
    </fieldset>
    </main>
    <br>
    <div class="nav">
    <nav style="background-color:blue;"><p>Retorne para minha <a href="index.php" target="_blank" rel="external" style="background-color:white;color:red;border:3px solid black;box-shadow:4px 4px 4px black;border-radius:10px 10px;text-shadow:9px;text-decoration:none;">1ªPágina</a></p></nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;"><p>@GuilhermeBarbosaDaSilva,todos os direitos autorais.</p></footer>
    </div>
    </form>
</details></div>
    <?php
    $host="127.0.0.1";
    $username="sunny";
    $dbname="bella";
    $password="";

    $conn=mysqli_connect($host,$username,$password,$dbname);

    $nome=$_POST['nome']?? null;
    $idade=$_POST['idade']?? null;
    $cpf=$_POST['cpf']?? null;
    $rg=$_POST['rg']?? null;
    $endereco=$_POST['endereco']?? null;
    $telefone=$_POST['telefone']?? null;
    $email=$_POST['email']?? null;
    $data_nasc=$_POST['data_nasc']?? null;
    $data_hora=$_POST['data_hora']?? null;
    $nivel=$_POST['nivel']?? null;
    $cor=$_POST['cor']?? null;
    $sexo=$_POST['sexo']?? null;
    $experiencia=$_POST['experiencia']?? null;
    $conhecimento=$_POST['conhecimento']?? null;
    $nivel_social=$_POST['nivel_social']?? null;
    $classe_social=$_POST['classe_social']?? null;
    $sua_postura=$_POST['sua_postura']?? null;
    $sua_altura=$_POST['sua_altura']?? null;
    $seu_hobby=$_POST['seu_hobby']?? null;
    $sua_conduta=$_POST['sua_conduta']?? null;
    $signo=$_POST['signo']?? null;
    $experience_text=$_POST['experience_text']?? null;

    $sql = "INSERT INTO sunny (nome, idade, cpf, rg, endereco, telefone, email, data_nasc, data_hora, nivel, cor, sexo, experiencia, conhecimento, nivel_social, classe_social, sua_postura, sua_altura, seu_hobby, sua_conduta, signo, experience_text)
    
    VALUES ('$nome','$idade','$cpf','$rg','$endereco','$telefone','$email','$data_nasc','$data_hora','$nivel','$cor','$sexo','$experiencia','$conhecimento','$nivel_social','$classe_social','$sua_postura','$sua_altura','$seu_hobby','$sua_conduta','$signo','$experience_text')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fechando a conexão
$conn->close();
    ?>
</body>
</html>