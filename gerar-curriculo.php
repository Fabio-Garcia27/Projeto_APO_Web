<!--Fábio 30/04/25 Gerador de Currículo -->
<?php
function calcularIdade($dataNascimento) {
  if (empty($dataNascimento)) {
    return 'Data de nascimento não informada.';
  }

  $dataNascimento = DateTime::createFromFormat('d/m/Y', $dataNascimento);
  if (!$dataNascimento) {
    return 'Data de nascimento inválida.';
  }

  $dataAtual = new DateTime();
  $idade = $dataAtual->diff($dataNascimento)->y;
  return $idade;
}

  $nome = trim ($_POST['nome'] ?? '');
  $dataNascimento = $_POST['dataNascimento'] ?? '';
  $endereco = trim ($_POST['endereco'] ?? '');
  $idade = calcularIdade($dataNascimento);
  $sexo = ucfirst(strtolower(trim($_POST['sexo'] ?? '')));
  $telefone = trim ($_POST['telefone'] ?? '');
  $experiencias = $_POST['experiencia'] ?? array();
  $habilidades = $_POST['habilidade'] ?? array();

  $curriculo  = ""; //LINHA ADICIONADA 1
  $curriculo .= '<p>Nome: ' . $nome . '</p>';
  $curriculo .= '<p>Data Nascimento: ' . $dataNascimento . '</p>';
  $curriculo .= '<p>Sexo: ' . $sexo . '</p>';
  $curriculo .= '<p>Endereço: ' . $endereco . '</p>';
  $curriculo .= '<p>Idade: ' . $idade . '</p>';  
  $curriculo .= '<p>Telefone: ' . $telefone . '</p>';

  $curriculo .= '<h2>Experiências:</h2>';
  $curriculo .= '<ul>';
  foreach ($experiencias as $experiencia) {
    $curriculo .= '<li>' . $experiencia . '</li>';
}
  $curriculo .= '</ul>';

  $curriculo .= '<h2>Habilidades:</h2>';
  $curriculo .= '<ul>';

foreach ($habilidades as $habilidade) {
    $curriculo .= '<li>' . $habilidade . '</li>';
}

$curriculo .= '</ul>';

echo $curriculo;

?>