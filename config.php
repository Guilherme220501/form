<?php
// Configuração do Banco de Dados
$host = '127.0.0.1';
$dbname = 'gui';
$username = 'formulario-guilherme'; // Seu usuário do banco
$password = ''; // Sua senha do banco

// Conexão com o banco de dados usando PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

$nome = $_POST['nome'] ?? null;
$idade = $_POST['idade'] ?? null;
$email = $_POST['email'] ?? null;
$telefone = $_POST['telefone'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$cpf = $_POST['cpf'] ?? null;
$rg = $_POST['rg'] ?? null;
$cep = $_POST['cep'] ?? null;
$data_nascimento = $_POST['data_nascimento'] ?? null;
$data_hora = $_POST['data_hora'] ?? null;
$cor = $_POST['cor'] ?? null;
$nivel = $_POST['nivel'] ?? null;

// Verificar checkboxes e textarea
$estado_civil = isset($_POST['estado_civil']) && is_array($_POST['estado_civil']) ? implode(", ", $_POST['estado_civil']) : '';
$conhecimento = $_POST['conhecimento'] ?? null;

// 'experiencia' é um array, então vamos tratá-lo
$experiencia = isset($_POST['experiencia']) && is_array($_POST['experiencia']) ? implode(", ", $_POST['experiencia']) : '';

// 'experience' é um campo de texto, então vamos capturá-lo
$experiencia_text = $_POST['experience'] ?? null; 

// 'social' e 'signo' são simples inputs, então vamos capturá-los
$social = $_POST['social'] ?? null;
$signo = $_POST['signo'] ?? null;

// Validação simples para campos obrigatórios
if (!$nome || !$email) {
    die("Nome e E-mail são campos obrigatórios.");
}

// Validação de e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("E-mail inválido.");
}

// SQL de inserção
$sql = "INSERT INTO `formulario-guilherme` (
    nome, idade, email, telefone, endereco, cpf, rg, cep, data_nascimento, data_hora, 
    cor, nivel, estado_civil, conhecimento, experiencia, classe_social, 
    signo, experiencia_text
) VALUES (
    :nome, :idade, :email, :telefone, :endereco, :cpf, :rg, :cep, :data_nascimento, 
    :data_hora, :cor, :nivel, :estado_civil, :conhecimento, :experiencia, 
    :classe_social, :signo, :experiencia_text
)";

try {
    // Preparar e executar a query
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':nome' => $nome,
        ':idade' => $idade,
        ':email' => $email,
        ':telefone' => $telefone,
        ':endereco' => $endereco,
        ':cpf' => $cpf,
        ':rg' => $rg,
        ':cep' => $cep,
        ':data_nascimento' => $data_nascimento,
        ':data_hora' => $data_hora,
        ':cor' => $cor,
        ':nivel' => $nivel,
        ':estado_civil' => $estado_civil,
        ':conhecimento' => $conhecimento,
        ':experiencia' => $experiencia,
        ':classe_social' => $social, 
        ':signo' => $signo, 
        ':experiencia_text' => $experiencia_text
    ]);
    echo "Dados inseridos com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
}
?>
