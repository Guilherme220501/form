<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="theme-color" content="#f3434">
    <link rel="shortcut icon" href="R.jpeg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,black,blue);}
h1{text-decoration: underline;white-space: nowrap;color: white;text-shadow: 9px;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
h2{white-space: nowrap;color: black;text-shadow: 9px;font-size: 16px;font-family: Arial, Helvetica, sans-serif;font-style: inherit;}
p{color: white;text-shadow: 9px;font-size: 16px;font-family: initial;font-style: italic;}
a{text-decoration: none;text-shadow: 9px;border-radius: 10px 10px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;}
.footer:hover{transition: ease s;transform: scale(1.05);}
.nav:hover{transition: ease s;transform: scale(1.06);}
.summary:hover{transition: ease s;transform: scale(1.07);}
summary{cursor: auto;width: 100px;margin: auto;border-radius: 10px 10px;padding: 5px;text-shadow: 9px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;background-color: blue;color: white;border: 3px solid white;box-shadow: 7px 7px 7px black;}
footer{align-items: center;justify-content: center;text-align: center;margin: auto;cursor: col-resize;width: 300px;padding: 30px;border-radius: 10px 10px;border: 6px solid white;cursor:progress;}
nav{align-items: center;justify-content: center;text-align: center;margin: auto;cursor: col-resize;width: 300px;padding: 30px;border-radius: 10px 10px;border: 6px solid whitesmoke;cursor:progress;}
form{display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;}
fieldset{cursor: context-menu;width: 300px;padding: 15px;border-radius: 10px 10px;margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: whitesmoke;border: 4px solid red;box-shadow: 7px 7px 7px black;}
label{text-shadow: 9px;cursor: auto;padding: 17px;margin: auto;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;color: black;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
.color1{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: blue;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color2{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: red;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color3{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: black;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color4{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: darkblue;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color5{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: darkred;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color6{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: orange;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color7{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: orangered;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color7{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: darkgreen;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color8{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: darkviolet;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color9{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: darkslateblue;box-shadow: 8px 8px 8px black;white-space: nowrap;}
.color10{cursor: move;display: flex;flex-direction: row;padding: 10px;gap: 5px;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;border: 6px solid white;background-color: darksalmon;box-shadow: 8px 8px 8px black;white-space: nowrap;}
input{text-align: left;text-shadow: 9px;padding: 4px;background-color: white;border: 4px solid blue;color: black;font-size: 16px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-style: oblique;cursor: crosshair;display: flex;flex-direction: column;align-items: center;justify-content: center;margin: auto;width: 300px;border-radius: 10px 10px;}
select{cursor: all-scroll;width: 200px;margin: auto;border-radius: 10px 10px;padding: 6px;background-color: black;border: 4px solid white;color: yellow;box-shadow: 7px 7px 7px black;text-shadow: 9px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
textarea{cursor: text;margin:auto;width:300px;border-radius:10px 10px;height: 200px;padding: 12px;text-shadow: 9px;color: black;background-color: antiquewhite;border: 4px solid black;font-size: 17px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-style: oblique;}
button{cursor: progress;margin:auto;width:290px;border-radius:10px 10px;text-shadow: 9px;padding: 5px;background-color: blue;color: white;border: 4px solid white;box-shadow: 8px 8px 8px black;text-shadow: 9px;font-size: 20px;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-style: oblique;}
</style>
<body>
    <div id="text"><details><summary style="width:300px;background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px black;">Formulário</summary>
    <br>
    <form action="form1.php" method="post">
    <header><h1><big>Cadastro de <b style="color:red">BRS</b></big></h1></header>
    <br>
    <main>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome" title="Digite o seu Nome" placeholder="Exemplo: Guilherme Barbosa da Silva" pattern="^[A-Za-zÀ-ÿ\s]{1,50}$" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="idade" title="Digite a sua Idade" placeholder="Exemplo: 24 ou 39 anos ??" pattern="^\d{1,3}$" maxlength="30" required>
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="cpf" title="Digite o seu CPF" placeholder="Exemplo: 503.552.748-41" pattern="^\d{3}\.\d{3}\.\d{3}-\d{2}$" maxlength="30" required>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="rg" title="Digite o seu RG" placeholder="Exemplo: 53.742.867-7" maxlength="30" required>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="telefone" title="Digite o seu Telefone" placeholder="Exemplo: (11) 98341-7590" maxlength="30" required>
    <label for="Sexo">Sexo</label>
    <select name="genero" id="genero" required style="padding:3px;width:150px;background-color:blue;color:white;border:4px solid white;box-shadow:7px 7px 7px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Agênero">Agênero</option>
    <option value="Bigênero">Bigênero</option>
    <option value="Transgênero">Transgênero</option>
    <option value="Cisgênero">Cisgênero</option>
    </select>
    <br>
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="data_nasc" title="Digite a sua Data de Nascimento" placeholder="Exemplo: 22/05/2001" pattern="^\d{4}-\d{2}-\d{2}$" maxlength="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="endereco" title="Digite o seu Endereço" placeholder="Exemplo: Av Rio das Pedras Nª4100" pattern="^[A-Za-z0-9À-ÿ\s,.\-]{1,50}$" maxlength="30" required>
    <label for="Nível">Nível</label>
    <input type="range" name="nivel" id="nivel" title="Digite o seu Nivel" placeholder="Exemplo: +/-" pattern="^[A-Za-zÀ-ÿ\s]{1,50}$" maxlength="30" required>
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" name="cor" id="cor" title="Digite a sua Cor" placeholder="Exemplo: branco ou negro ?" pattern="^[A-Za-zÀ-ÿ\s]{1,50}$" maxlength="30" required>
    <label for="Sua CNH">Sua CNH</label>
    <input type="text" name="cnh" id="cnh" title="Digite a sua CNH" placeholder="Exemplo: 45454-5455" pattern="^[A-Za-z0-9]{1,50}$" maxlength="30" required>
    <label for="Seu Cep">Seu Cep</label>
    <input type="text" name="cep" id="cep" title="Digite o seu CEP" placeholder="Exemplo: 03936-000" pattern="^\d{5}-\d{3}$" maxlength="30" required>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="data_hora" title="Digite a sua data e hora" placeholder="Exemplo: 22/05 ás 10 AM" pattern="^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual é o seu nivel social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color1">
    <label for="Base" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Base</label>
    <input type="radio" name="nivel_social" value="Base" required>
    <label for="Iniciante" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Iniciante</label>
    <input type="radio" name="nivel_social" value="Iniciante" required>
    <label for="Simples" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Simples</label>
    <input type="radio" name="nivel_social" value="Simples" required>
    <label for="Influênte" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Influênte</label>
    <input type="radio" name="nivel_social" value="Influênte" required>
    <label for="Influêncer" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Influêncer</label>
    <input type="radio" name="nivel_social" value="Influêncer" required>
    <label for="Famoso" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Famoso</label>
    <input type="radio" name="nivel_social" value="Famoso" required>
    <label for="Figura" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Figura</label>
    <input type="radio" name="nivel_social" value="Figura" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Iniciante</label>
    <input type="radio" name="conhecimento" value="Iniciante" required>
    <label for="Jovem" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Jovem</label>
    <input type="radio" name="conhecimento" value="Jovem" required>
    <label for="Novo" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Novo</label>
    <input type="radio" name="conhecimento" value="Novo" required>
    <label for="Intermediário" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Intermediário</label>
    <input type="radio" name="conhecimento" value="Intermediário" required>
    <label for="Avançado" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Avançado</label>
    <input type="radio" name="conhecimento" value="Avançado" required>
    <label for="Complexo" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Complexo</label>
    <input type="radio" name="conhecimento" value="Complexo" required>
    <label for="Profissional" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Profissional</label>
    <input type="radio" name="conhecimento" value="Profissional" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua altura?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color3">
    <label for="1.40 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">1.40 cm</label>
    <input type="radio" name="sua_altura" value="1.40 cm" required>
    <label for="1.50 cm" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">1.50 cm</label>
    <input type="radio" name="sua_altura" value="1.50 cm" required>
    <label for="1.60 cm" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">1.60 cm</label>
    <input type="radio" name="sua_altura" value="1.60 cm" required>
    <label for="1.70 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">1.70 cm</label>
    <input type="radio" name="sua_altura" value="1.70 cm" required>
    <label for="1.80 cm" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">1.80 cm</label>
    <input type="radio" name="sua_altura" value="1.80 cm" required>
    <label for="1.90 cm" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">1.90 cm</label>
    <input type="radio" name="sua_altura" value="1.90 cm" required>
    <label for="2.00 cm" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">2.00 cm</label>
    <input type="radio" name="sua_altura" value="2.00 cm" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua postura?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Obediente" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Obediente</label>
    <input type="radio" name="sua_postura" value="Obediente" required>
    <label for="Legal" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Legal</label>
    <input type="radio" name="sua_postura" value="Legal" required>
    <label for="Respeitosa" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Respeitosa</label>
    <input type="radio" name="sua_postura" value="Respeitosa" required>
    <label for="Desrespeitosa" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Desrespeitosa</label>
    <input type="radio" name="sua_postura" value="Desrespeitosa" required>
    <label for="Desalinhada" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Desalinhada</label>
    <input type="radio" name="sua_postura" value="Desalinhada" required>
    <label for="Muito Boa" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Muito Boa</label>
    <input type="radio" name="sua_postura" value="Muito Boa" required>
    <label for="Desengonçada" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Desengonçada</label>
    <input type="radio" name="sua_postura" value="Desengonçada" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua categoria?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color5">
    <label for="Base" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Base</label>
    <input type="radio" name="sua_categoria" value="Base" required>
    <label for="Iniciante" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Iniciante</label>
    <input type="radio" name="sua_categoria" value="Iniciante" required>
    <label for="Normal" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Normal</label>
    <input type="radio" name="sua_categoria" value="Normal" required>
    <label for="Média" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Média</label>
    <input type="radio" name="sua_categoria" value="Média" required>
    <label for="Intermediária" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Intermediária</label>
    <input type="radio" name="sua_categoria" value="Intermediária" required>
    <label for="Avançada" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Avançada</label>
    <input type="radio" name="sua_categoria" value="Avançada" required>
    <label for="Complexa" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Complexa</label>
    <input type="radio" name="sua_categoria" value="Complexa" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua disciplina?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color6">
    <label for="Normal" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Normal</label>
    <input type="radio" name="sua_disciplina" value="Normal" required>
    <label for="Repetitiva" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Repetitiva</label>
    <input type="radio" name="sua_disciplina" value="Repetitiva" required>
    <label for="Atenciosa" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Atenciosa</label>
    <input type="radio" name="sua_disciplina" value="Atenciosa" required>
    <label for="Composta" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Composta</label>
    <input type="radio" name="sua_disciplina" value="Composta" required>
    <label for="Expert" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Expert</label>
    <input type="radio" name="sua_disciplina" value="Expert" required>
    <label for="Avançada" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Avançada</label>
    <input type="radio" name="sua_disciplina" value="Avançada" required>
    <label for="Complexa" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Complexa</label>
    <input type="radio" name="sua_disciplina" value="Complexa" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua caracteristica?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color7">
    <label for="Sensato" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Sensato</label>
    <input type="radio" name="sua_caracteristica" value="Sensato" required>
    <label for="Focado" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Focado</label>
    <input type="radio" name="sua_caracteristica" value="Focado" required>
    <label for="Disciplinado" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Disciplinado</label>
    <input type="radio" name="sua_caracteristica" value="Disciplinado" required>
    <label for="Honesto" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Honesto</label>
    <input type="radio" name="sua_caracteristica" value="Honesto" required>
    <label for="Veterano" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Veterano</label>
    <input type="radio" name="sua_caracteristica" value="Veterano" required>
    <label for="Master" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Master</label>
    <input type="radio" name="sua_caracteristica" value="Master" required>
    <label for="Bom Ouvinte" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Bom Ouvinte</label>
    <input type="radio" name="sua_caracteristica" value="Bom Ouvinte" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua conduta?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color8">
    <label for="Obediente" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Obediente</label>
    <input type="radio" name="sua_conduta" value="Obediente" required>
    <label for="Respeitosa" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Respeitosa</label>
    <input type="radio" name="sua_conduta" value="Respeitosa" required>
    <label for="Em dia" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Em dia</label>
    <input type="radio" name="sua_conduta" value="Em dia" required>
    <label for="Focada" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Focada</label>
    <input type="radio" name="sua_conduta" value="Focada" required>
    <label for="Boa" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Boa</label>
    <input type="radio" name="sua_conduta" value="Boa" required>
    <label for="Excepcional" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Excepcional</label>
    <input type="radio" name="sua_conduta" value="Excepcional" required>
    <label for="Excelente" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Excelente</label>
    <input type="radio" name="sua_conduta" value="Excelente" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua experiencia?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color9">
    <label for="Baixa" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Baixa</label>
    <input type="radio" name="experiencia" value="Baixa" required>
    <label for="Normal" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Normal</label>
    <input type="radio" name="experiencia" value="Normal" required>
    <label for="Média" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Média</label>
    <input type="radio" name="experiencia" value="Média" required>
    <label for="Intermediária" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Intermediária</label>
    <input type="radio" name="experiencia" value="Intermediária" required>
    <label for="Complexa" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Complexa</label>
    <input type="radio" name="experiencia" value="Complexa" required>
    <label for="Avançada" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Avançada</label>
    <input type="radio" name="experiencia" value="Avançada" required>
    <label for="Profissional" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Profissional</label>
    <input type="radio" name="experiencia" value="Profissional" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary>QUAL?</summary>
    <br>
    <div class="color10">
    <label for="Classe A" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe A</label>
    <input type="radio" name="classe_social" value="Classe A" required>
    <label for="Classe B" style="color:white;font-size:14px;white-space:nowrap;text-shadow:9px;">Classe B</label>
    <input type="radio" name="classe_social" value="Classe B" required>
    <label for="Classe C" style="color:white;font-size:14px;text-shadow:9px;white-space:nowrap">Classe C</label>
    <input type="radio" name="classe_social" value="Classe C" required>
    <label for="Classe D" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px;">Classe D</label>
    <input type="radio" name="classe_social" value="Classe D" required>
    <label for="Classe E" style="color:white;text-shadow:9px;font-size:14px;white-space:nowrap;">Classe E</label>
    <input type="radio" name="classe_social" value="Classe E" required>
    <label for="Classe F" style="color:white;white-space:nowrap;text-shadow:9px;font-size:14px;">Classe F</label>
    <input type="radio" name="classe_social" value="Classe F" required>
    <label for="Classe Ultra" style="color:white;text-shadow:9px;white-space:nowrap;font-size:14px;">Classe Ultra</label>
    <input type="radio" name="classe_social" value="Classe Ultra" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:4px solid white;box-shadow:7px 7px 7px black">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Ofiúco">Ofiúco</option>
    <option value="Aquário">Aquário</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Câncer">Câncer</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Libra">Libra</option>
    <option value="Leão">Leão</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Virgem">Virgem</option>
    <option value="Peixes">Peixes</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Touro">Touro</option>
    <option value="Áries">Áries</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me fale sobre a sua experiência?</big></h2>
    <br>
    <textarea name="experience_text" id="experience_text" rows="9" required></textarea>
    <br>
    <br>
    <button value="experience_text">Cadastre</button>
    <br>
    </fieldset>
    </main>
    <br>
    <div class="nav">
    <nav style="background-color:blue;">
    <p>Retorne para minha <a href="index.php" target="_blank" rel="external" style="background-color:white;color:red;border:3px solid black;box-shadow:5px 5px 5px black;text-shadow:9px;text-decoration:none;border-radius:10px 10px;font-size:14px;">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred;">
    <p>@Guilhermebarbosadasilva, todos os direitos autorais.</p>
    </footer>
    </div>
    </form>
</details></div>
    <?php
    $host="127.0.0.1";
    $username="letsgorightnow";
    $dbname="barbosasilva";
    $password="";

    $conn=mysqli_connect($host,$username,$password,$dbname);

    $nome=$_POST['nome']??null;
    $idade=$_POST['idade']??null;
    $telefone=$_POST['telefone']??null;
    $cpf=$_POST['cpf']??null;
    $rg=$_POST['rg']??null;
    $genero=$_POST['genero']??null;
    $data_nasc=$_POST['data_nasc']??null;
    $endereco=$_POST['endereco']??null;
    $nivel=$_POST['nivel']??null;
    $cor=$_POST['cor']??null;
    $cnh=$_POST['cnh']??null; 
    $cep=$_POST['cep']??null;
    $data_hora=$_POST['data_hora']??null;
    $nivel_social=$_POST['nivel_social']??null;
    $conhecimento=$_POST['conhecimento']??null;
    $sua_altura=$_POST['sua_altura']??null;
    $sua_postura=$_POST['sua_postura']??null;
    $sua_categoria=$_POST['sua_categoria']??null;
    $sua_disciplina=$_POST['sua_disciplina']??null;
    $sua_caracteristica=$_POST['sua_caracteristica']??null;
    $sua_conduta=$_POST['sua_conduta']??null;
    $experiencia=$_POST['experiencia']??null;
    $classe_social=$_POST['classe_social']??null;
    $signo=$_POST['signo']??null;
    $experience_text=$_POST['experience_text']??null;

    $sql = "INSERT INTO letsgorightnow (nome, idade, telefone, cpf, rg, genero, data_nasc, endereco, nivel, cor, cnh, cep, data_hora, nivel_social, conhecimento, sua_altura, sua_postura, sua_categoria, sua_disciplina, sua_caracteristica, sua_conduta, experiencia, classe_social, signo, experience_text)
    
    VALUES ('$nome','$idade','$telefone','$cpf','$rg','$genero','$data_nasc','$endereco','$nivel','$cor','$cnh','$cep','$data_hora','$nivel_social','$conhecimento','$sua_altura','$sua_postura','$sua_categoria','$sua_disciplina','$sua_caracteristica','$sua_conduta','$experiencia','$classe_social','$signo','$experience_text')";

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