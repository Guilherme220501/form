<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="R.peg" type="image/x-icon">
    <meta name="theme-color" content="#f3455">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<style>
body{margin: auto;align-items: center;justify-content: center;text-align: center;background: linear-gradient(to right,blue,black,blue);}
h1{text-decoration: underline;color: white;text-shadow: 9px;font-size: 30px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
h2{color: black;text-shadow: 9px;font-size: 20px;font-family: Georgia, 'Times New Roman', Times, serif;font-style: italic;}
p{color: white;text-shadow: 9px;font-size: 16px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: inherit;}
a{text-decoration: none;text-shadow: 9px;font-size: 16px;font-family: 'Times New Roman', Times, serif;font-style: inherit;border-radius: 10px  10px;}
.footer:hover{transition: ease s;transform: scale(1.07);}
.nav:hover{transition: ease s;transform: scale(1.05);}
.summary:hover{transition: ease s;transform: scale(1.06);}
summary{cursor: context-menu;width: 100px;margin: auto;border-radius: 10px 10px;padding: 6px;text-shadow: 9px;font-size: 18px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;}
nav{align-items: center;justify-content: center;text-align: center;margin: auto;width: 300px;padding: 30px;cursor: col-resize;border: 5px solid whitesmoke;border-radius: 10px 10px;}
footer{align-items: center;justify-content: center;text-align: center;margin: auto;width: 300px;padding: 30px;cursor: col-resize;border: 5px solid white;border-radius: 10px 10px;}
form{align-items: center;justify-content: center;text-align: center;display: flex;flex-direction: column;margin: auto;}
fieldset{padding: 10px;cursor: default;width: 300px;margin: auto;border-radius: 10px 10px;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;background-color: white;border: 4px solid blue;box-shadow: 5px 5px 5px black;}
label{text-shadow: 9px;font-size: 20px;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-style: oblique;color: black;display: flex;flex-direction: column;align-items: center;justify-content: center;text-align: center;margin: auto;padding: 18px;cursor: alias;}
.color1{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: darkcyan;border: 6px solid black;box-shadow: 7px 7px 7px black;}
.color2{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: blue;border: 6px solid white;box-shadow: 7px 7px 7px black;}
.color3{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: darkred;border: 6px solid white;box-shadow: 7px 7px 7px black;}
.color4{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: brown;border: 6px solid white;box-shadow: 7px 7px 7px black;}
.color5{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: darkcyan;border: 6px solid white;box-shadow: 7px 7px 7px black;}
.color6{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: orange;border: 6px solid whitesmoke;box-shadow: 7px 7px 7px black;}
.color7{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: bisque;border: 6px solid white;box-shadow: 7px 7px 7px black;}
.color8{gap: 6px;padding: 10px;display: flex;flex-direction: row;align-items: center;justify-content: center;text-align: center;margin: auto;width: 800px;border-radius: 10px 10px;cursor: default;background-color: burlywood;border: 6px solid white;box-shadow: 7px 7px 7px black;}
input{margin: auto;text-align: left;text-shadow: 9px;padding: 5px;font-size: 17px;font-family: Arial, Helvetica, sans-serif;font-style: oblique;background-color: white;border: 4px solid red;color: black;cursor: copy;width: 300px;border-radius: 10px 10px;}
select{cursor: ew-resize;width: 200px;margin: auto;border-radius: 10px 10px;padding: 6px;font-size: 17px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-style: oblique;background-color: black;color: white;border: 4px solid white;box-shadow: 5px 5px 5px yellow;text-shadow: 9px;}
textarea{cursor: help;width: 300px;height: 200px;margin: auto;border-radius: 10px 10px;padding: 12px;text-shadow:9px;background-color: antiquewhite;border: 4px solid black;border-radius: 10px 10px;color: black;font-size: 17px;font-family: Arial, Helvetica, sans-serif;font-style: inherit;}
button{cursor: grabbing;width: 270px;margin: auto;border-radius: 10px 10px;padding: 5px;background-color: blue;color: white;border: 4px solid white;box-shadow: 6px 6px 6px black;text-shadow: 9px;font-size: 20px;font-family: Georgia, 'Times New Roman', Times, serif;font-style: inherit;}
</style>
<body>
    <div id="text"><details><summary style="width:300px;background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px black;">Formulário</summary>
    <br>
    <form action="formulario.php" method="post">
    <header><h1><big>Cadastro de BRS</big></h1></header>
    <br>
    <main>
    <fieldset>
    <label for="Nome">Nome</label>
    <input type="text" name="nome" id="nome" title="Digite seu Nome " placeholder="Exemplo: Guilherme Barbosa da silva" maxlength="30" required>
    <label for="Idade">Idade</label>
    <input type="number" name="idade" id="idade" title="Digite sua Idade" placeholder="Exemplo: 23 anos ou 30 ??" maxlength="30" required>
    <label for="CPF">CPF</label>
    <input type="text" name="cpf" id="cpf" title="Digite seu CPF" placeholder="Exemplo: 503.552.748-41" maxlength="30" required>
    <label for="RG">RG</label>
    <input type="text" name="rg" id="rg" title="Digite seu RG" placeholder="Exemplo: 53.742.867-7" maxlength="30" required>
    <label for="Email">Email</label>
    <input type="email" name="email" id="email" title="Digite seu Email" placeholder="Exemplo: guilherme8876sk@gmail.com" maxlength="30" required>
    <label for="Endereço">Endereço</label>
    <input type="text" name="endereco" id="endereco" title="Digite seu Endereço" placeholder="Exemplo: Rua estado do ceára Nº728" maxlength="30" required>
    <label for="Telefone">Telefone</label>
    <input type="tel" name="telefone" id="telefone" title="Digite seu Telefone" placeholder="Exemplo: (11) 98341-7590" maxlength="30" required>
    <label for="Data de Nascimento">Data de Nascimento</label>
    <input type="date" name="data_nasc" id="data_nasc" title="Digite sua Data de Nascimento" placeholder="Exemplo: 22/05/2001" maxlength="30" required>
    <label for="Data e Hora">Data e Hora</label>
    <input type="datetime-local" name="data_hora" id="data_hora" title="Digite sua Data e hora" placeholder="Exemplo: 22/05 ás 10 AM" maxlength="30" required>
    <label for="Sexo">Sexo</label>
    <select name="sexo" id="sexo" required style="width:150px;background-color:white;color:red;border:3px solid blue;box-shadow:5px 5px 5px black;">
    <option value="" selected disabled>Selecione</option>
    <option value="Hétero">Hétero</option>
    <option value="Masculino">Masculino</option>
    <option value="Feminino">Feminino</option>
    <option value="Homossexual">Homossexual</option>
    <option value="Panssexual">Panssexual</option>
    <option value="Transsexual">Transsexual</option>
    </select>
    <label for="Sua Cor">Sua Cor</label>
    <input type="color" name="cor" id="cor" title="Digite sua Cor" placeholder="Exemplo: branco ou negro?" maxlength="30" required>
    <label for="Seu Nível">Seu Nível</label>
    <input type="range" name="nivel" id="nivel" title="Digite seu Nível" placeholder="Exemplo: +/-" maxlength="30" required>
    <br>
    <br>
    <h2><big>Qual é a sua conduta?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px red">QUAL?</summary>
    <br>
    <div class=color1>
    <label for="Normal" style="font-size:14px;white-space:nowrap;color:white;text-shadow:9px">Normal</label>
    <input type="checkbox" name="sua_conduta" value="Normal">
    <label for="Obediente" style="font-size:14px;white-space:nowrap;color:white;text-shadow:9px">Obediente</label>
    <input type="checkbox" name="sua_conduta" value="Obediente">
    <label for="Estressado" style="font-size:14px;white-space:nowrap;color:white;text-shadow:9px">Estressado</label>
    <input type="checkbox" name="sua_conduta" value="Estressado">
    <label for="Relaxado" style="font-size:14px;white-space:nowrap;color:white;text-shadow:9px">Relaxado</label>
    <input type="checkbox" name="sua_conduta" value="Relaxado">
    <label for="Estrassado" style="font-size:14px;white-space:nowrap;color:white;text-shadow:9px">Estrassado</label>
    <input type="checkbox" name="sua_conduta" value="Estrassado">
    <label for="Calmo" style="font-size:14px;white-space:nowrap;color:white;text-shadow:9px">Calmo</label>
    <input type="checkbox" name="sua_conduta" value="Calmo">
    <label for="Aposturado" style="font-size:14px;white-space:nowrap;color:white;text-shadow:9px">Aposturado</label>
    <input type="checkbox" name="sua_conduta" value="Aposturado">
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua média?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:red;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color2">
    <label for="Baixa" style="font-size:14px;white-space:nowrap;text-shadow:9px;color:white">Baixa</label>
    <input type="radio" name="sua_media" value="Baixa" required>
    <label for="Normal" style="font-size:14px;white-space:nowrap;text-shadow:9px;color:white">Normal</label>
    <input type="radio" name="sua_media" value="Normal" required>
    <label for="Simples" style="font-size:14px;white-space:nowrap;text-shadow:9px;color:white">Simples</label>
    <input type="radio" name="sua_media" value="Simples" required>
    <label for="Favorecida" style="font-size:14px;white-space:nowrap;text-shadow:9px;color:white">Favorecida</label>
    <input type="radio" name="sua_media" value="Favorecida" required>
    <label for="Alinhada" style="font-size:14px;white-space:nowrap;text-shadow:9px;color:white">Alinhada</label>
    <input type="radio" name="sua_media" value="Alinhada" required>
    <label for="Simplista" style="font-size:14px;white-space:nowrap;text-shadow:9px;color:white">Simplista</label>
    <input type="radio" name="sua_media" value="Simplista" required>
    <label for="Avançada" style="font-size:14px;white-space:nowrap;text-shadow:9px;color:white">Avançada</label>
    <input type="radio" name="sua_media" value="Avançada" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua classe social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:4px solid white;box-shadow:5px 5px 5px black">QUAL?</summary>
    <br>
    <div class="color3">
    <label for="Classe A" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px">Classe A</label>
    <input type="checkbox" name="classe_social" value="Classe A">
    <label for="Classe B" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px">Classe B</label>
    <input type="checkbox" name="classe_social" value="Classe B">
    <label for="Classe C" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px">Classe C</label>
    <input type="checkbox" name="classe_social" value="Classe C">
    <label for="Classe D" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px">Classe D</label>
    <input type="checkbox" name="classe_social" value="Classe D">
    <label for="Classe E" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px">Classe E</label>
    <input type="checkbox" name="classe_social" value="Classe E">
    <label for="Classe F" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px">Classe F</label>
    <input type="checkbox" name="classe_social" value="Classe F">
    <label for="Classe Z" style="white-space:nowrap;text-shadow:9px;color:white;font-size:14px">Classe Z</label>
    <input type="checkbox" name="classe_social" value="Classe Z">
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível social?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:red;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color4">
    <label for="Base" style="color:black;text-shadow:9px;font-size:14px;white-space:nowrap;">Base</label>
    <input type="radio" name="nivel_social" value="Base" required>
    <label for="Desconhecido" style="color:black;text-shadow:9px;font-size:14px;white-space:nowrap;">Desconhecido</label>
    <input type="radio" name="nivel_social" value="Desconhecido" required>
    <label for="Fluênte" style="color:black;text-shadow:9px;font-size:14px;white-space:nowrap;">Fluênte</label>
    <input type="radio" name="nivel_social" value="Fluênte" required>
    <label for="Medio" style="color:black;text-shadow:9px;font-size:14px;white-space:nowrap;">Medio</label>
    <input type="radio" name="nivel_social" value="Medio" required>
    <label for="Avançado" style="color:black;text-shadow:9px;font-size:14px;white-space:nowrap;">Avançado</label>
    <input type="radio" name="nivel_social" value="Avançado" required>
    <label for="Profissional" style="color:black;text-shadow:9px;font-size:14px;white-space:nowrap;">Profissional</label>
    <input type="radio" name="nivel_social" value="Profissional" required>
    <label for="Influêncer" style="color:black;text-shadow:9px;font-size:14px;white-space:nowrap;">Influêncer</label>
    <input type="radio" name="nivel_social" value="Influêncer" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de experiencia?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:brown;color:white;border:4px solid white;box-shadow:6px 6px 6px black;">QUAL?</summary>
    <br>
    <div class="color5">
    <label for="Iniciante" style="text-shadow:9px;font-size:14px;white-space:nowrap;color:white;">Iniciante</label>
    <input type="checkbox" name="experiencia" value="Iniciante" >
    <label for="Jovem" style="text-shadow:9px;font-size:14px;white-space:nowrap;color:white;">Jovem</label>
    <input type="checkbox" name="experiencia" value="Jovem" >
    <label for="Aprendiz" style="text-shadow:9px;font-size:14px;white-space:nowrap;color:white;">Aprendiz</label>
    <input type="checkbox" name="experiencia" value="Aprendiz" >
    <label for="Intermediário" style="text-shadow:9px;font-size:14px;white-space:nowrap;color:white;">Intermediário</label>
    <input type="checkbox" name="experiencia" value="Intermediário" >
    <label for="Avançada" style="text-shadow:9px;font-size:14px;white-space:nowrap;color:white;">Avançada</label>
    <input type="checkbox" name="experiencia" value="Avançada" >
    <label for="Profissional" style="text-shadow:9px;font-size:14px;white-space:nowrap;color:white;">Profissional</label>
    <input type="checkbox" name="experiencia" value="Profissional" >
    <label for="Expert" style="text-shadow:9px;font-size:14px;white-space:nowrap;color:white;">Expert</label>
    <input type="checkbox" name="experiencia" value="Expert" >
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu nível de conhecimento?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:darkblue;color:white;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color6">
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">Jovem</label>
    <input type="radio" name="conhecimento" value="Jovem" required>
    <label for="Iniciante" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">Iniciante</label>
    <input type="radio" name="conhecimento" value="Iniciante" required>
    <label for="Jovem" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">Jovem</label>
    <input type="radio" name="conhecimento" value="Jovem" required>
    <label for="Aprendiz" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">Aprendiz</label>
    <input type="radio" name="conhecimento" value="Aprendiz" required>
    <label for="Mediano" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">Mediano</label>
    <input type="radio" name="conhecimento" value="Mediano" required>
    <label for="Intermediario" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">Intermediario</label>
    <input type="radio" name="conhecimento" value="Intermediario" required>
    <label for="Profissional">Profissional</label>
    <input type="radio" name="conhecimento" value="Profissional" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua altura?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:yellow;border:4px solid white;box-shadow:5px 5px 5px black;">QUAL?</summary>
    <br>
    <div class="color7">
    <label for="1.50 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">1.50 cm</label>
    <input type="checkbox" name="sua_altura" value="1.50 cm">
    <label for="1.60 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">1.60 cm</label>
    <input type="checkbox" name="sua_altura" value="1.60 cm">
    <label for="1.70 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">1.70 cm</label>
    <input type="checkbox" name="sua_altura" value="1.70 cm">
    <label for="1.80 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">1.80 cm</label>
    <input type="checkbox" name="sua_altura" value="1.80 cm">
    <label for="1.90 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">1.90 cm</label>
    <input type="checkbox" name="sua_altura" value="1.90 cm">
    <label for="2.00 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">2.00 cm</label>
    <input type="checkbox" name="sua_altura" value="2.00 cm">
    <label for="2.10 cm" style="white-space:nowrap;text-shadow:9px;color:white;font-size:13px;">2.10 cm</label>
    <input type="checkbox" name="sua_altura" value="2.10 cm">
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual é a sua postura?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:blueviolet;color:white;border:4px solid white;box-shadow:5px 5px 5px black">QUAL?</summary>
    <br>
    <div class="color8">
    <label for="Normal" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Normal</label>
    <input type="radio" name="sua_postura" value="Normal" required>
    <label for="Eréta" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Eréta</label>
    <input type="radio" name="sua_postura" value="Eréta" required>
    <label for="Corcunda" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Corcunda</label>
    <input type="radio" name="sua_postura" value="Corcunda" required>
    <label for="Dobrada" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Dobrada</label>
    <input type="radio" name="sua_postura" value="Dobrada" required>
    <label for="Comprida" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Comprida</label>
    <input type="radio" name="sua_postura" value="Comprida" required>
    <label for="Desalinhada" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Desalinhada</label>
    <input type="radio" name="sua_postura" value="Desalinhada" required>
    <label for="Desengonçada" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Desengonçada</label>
    <input type="radio" name="sua_postura" value="Desengonçada" required>
    <label for="Embaçada" style="white-space:nowrap;text-shadow:9px;font-size:14px;color:black">Embaçada</label>
    <input type="radio" name="sua_postura" value="Embaçada" required>
    </div>
</details></div></div>
    <br>
    <br>
    <h2><big>Qual o seu signo?</big></h2>
    <br>
    <div class="summary"><div id="text"><details><summary style="background-color:black;color:white;border:4px solid white;box-shadow:5px 5px 5px yellow;">QUAL?</summary>
    <br>
    <select name="signo" id="signo" required>
    <option value="" selected disabled>Selecione</option>
    <option value="Aquário">Aquário</option>
    <option value="Áries">Áries</option>
    <option value="Câncer">Câncer</option>
    <option value="Libra">Libra</option>
    <option value="Leão">Leão</option>
    <option value="Capricôrnio">Capricôrnio</option>
    <option value="Gêmeos">Gêmeos</option>
    <option value="Sagitário">Sagitário</option>
    <option value="Escorpião">Escorpião</option>
    <option value="Virgem">Virgem</option>
    <option value="Touro">Touro</option>
    <option value="Peixes">Peixes</option>
    <option value="Ofiúco">Ofiúco</option>
    </select>
</details></div></div>
    <br>
    <br>
    <h2><big>Me Fale sobre a sua experiencia</big></h2>
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
    <nav style="background-color:blue">
    <p>Retorne para minha <a href="index.php" target="_blank" rel="external" style="background-color:white;color:red;border:4px solid black;box-shadow:5px 5px 5px black;text-shadow:9px;text-decoration:none;border-radius:10px 10px">1ªPágina</a></p>
    </nav>
    </div>
    <br>
    <div class="footer">
    <footer style="background-color:darkred">@GuilhermeBarbosaDaSilva, todos os direitos autorais.</footer>
    </div>
    </form>
</details></div>
    <?php
    $host="127.0.0.1";
    $username="guinaldo";
    $dbname="jeffreid";
    $password="";

    $conn=mysqli_connect($host,$username,$password,$dbname); 

    $nome=$_POST['nome'] ?? null; 
    $idade=$_POST['idade'] ?? null; 
    $cpf=$_POST['cpf'] ?? null; 
    $rg=$_POST['rg'] ?? null; 
    $email=$_POST['email'] ?? null; 
    $endereco=$_POST['endereco'] ?? null; 
    $telefone=$_POST['telefone'] ?? null; 
    $data_nasc=$_POST['data_nasc'] ?? null; 
    $data_hora=$_POST['data_hora'] ?? null; 
    $sexo=$_POST['sexo'] ?? null; 
    $cor=$_POST['cor'] ?? null; 
    $nivel=$_POST['nivel'] ?? null; 
    $sua_conduta=$_POST['sua_conduta'] ?? null; 
    $sua_media=$_POST['sua_media'] ?? null; 
    $classe_social=$_POST['classe_social'] ?? null; 
    $nivel_social=$_POST['nivel_social'] ?? null; 
    $experiencia=$_POST['experiencia'] ?? null; 
    $conhecimento=$_POST['conhecimento'] ?? null; 
    $sua_altura=$_POST['sua_altura'] ?? null; 
    $sua_postura=$_POST['sua_postura'] ?? null; 
    $signo=$_POST['signo'] ?? null; 
    $experience_text=$_POST['experience_text'] ?? null; 

    $sql = "INSERT INTO guinaldo (nome, idade, cpf, rg, email, endereco, telefone, data_nasc, data_hora, sexo, cor, nivel, sua_conduta, sua_media, classe_social, nivel_social, experiencia, conhecimento, sua_altura, sua_postura, signo, experience_text)
    
    VALUES ('$nome','$idade','$cpf','$rg','$email','$endereco','$telefone','$data_nasc','$data_hora','$sexo','$cor','$nivel','$sua_conduta','$sua_media','$classe_social','$nivel_social','$experiencia','$conhecimento','$sua_altura','$sua_postura','$signo','$experience_text')";

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