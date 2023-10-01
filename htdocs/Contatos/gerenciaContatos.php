<?php
// Inicializar uma matriz vazia para armazenar os contatos
$contatos = [];

// Função para adicionar um novo contato
function adicionarContato($nome, $email, $telefone, $nota = "") {
    global $contatos;

    // Validar o email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email inválido";
    }

    // Validar o telefone (vamos assumir um formato simples de 10 dígitos)
    if (!preg_match("/^\d{10}$/", $telefone)) {
        return "Telefone inválido";
    }

    // Adicionar o contato à lista
    $contato = [
        'nome' => $nome,
        'email' => $email,
        'telefone' => $telefone,
        'nota' => $nota
    ];
    $contatos[] = $contato;

    return "Contato adicionado com sucesso";
}

// Função para listar todos os contatos
function listarContatos($ordenarPor = null, $buscarNome = null) {
    global $contatos;

    // Filtrar contatos pelo nome, se fornecido
    if ($buscarNome !== null) {
        $contatos = array_filter($contatos, function ($contato) use ($buscarNome) {
            return stripos($contato['nome'], $buscarNome) !== false;
        });
    }

    // Ordenar contatos, se necessário
    if ($ordenarPor !== null) {
        usort($contatos, function ($a, $b) use ($ordenarPor) {
            return strnatcmp($a[$ordenarPor], $b[$ordenarPor]);
        });
    }

    // Retornar a lista de contatos
    return $contatos;
}

// Função para atualizar um contato
function atualizarContato($indice, $nome, $email, $telefone, $nota = "") {
    global $contatos;

    // Validar o email e telefone
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email inválido";
    }
    if (!preg_match("/^\d{10}$/", $telefone)) {
        return "Telefone inválido";
    }

    // Atualizar o contato
    if (isset($contatos[$indice])) {
        $contatos[$indice]['nome'] = $nome;
        $contatos[$indice]['email'] = $email;
        $contatos[$indice]['telefone'] = $telefone;
        $contatos[$indice]['nota'] = $nota;

        return "Contato atualizado com sucesso";
    } else {
        return "Contato não encontrado";
    }
}

// Função para excluir um contato
function excluirContato($indice) {
    global $contatos;

    // Verificar se o índice existe
    if (isset($contatos[$indice])) {
        unset($contatos[$indice]);
        $contatos = array_values($contatos); // Reindexar a matriz
        return "Contato excluído com sucesso";
    } else {
        return "Contato não encontrado";
    }
}

// Exemplo de uso:

// Adicionar alguns contatos
adicionarContato("João", "joao@example.com", "1234567890", "Nota 1");
adicionarContato("Maria", "maria@example.com", "9876543210", "Nota 2");
adicionarContato("Carlos", "carlos@example.com", "5555555555");

// Listar todos os contatos
$listaContatos = listarContatos();

// Atualizar um contato (índice 0 é o primeiro contato)
atualizarContato(0, "João Silva", "joao.silva@example.com", "1111111111", "Nova nota");

// Excluir um contato (índice 1 é o segundo contato)
excluirContato(1);

// Listar todos os contatos novamente após a atualização e exclusão
$listaContatosAtualizada = listarContatos();

// Exibir os contatos na interface do usuário
foreach ($listaContatosAtualizada as $indice => $contato) {
    echo "Nome: " . $contato['nome'] . "<br>";
    echo "Email: " . $contato['email'] . "<br>";
    echo "Telefone: " . $contato['telefone'] . "<br>";
    echo "Nota: " . $contato['nota'] . "<br><br>";
}
?>
