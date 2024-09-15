<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cor do Carro</title>
</head>
<body>
    <?php
    // Classe Carro
    class Carro {
        public $cor;  // Atributo público

        public function __construct($cor) {
            $this->cor = $cor;
        }
    }

    // Criação do objeto com a cor inicial "Vermelho"
    $meuCarro = new Carro("Vermelho");

    // Verifica se o formulário foi enviado e uma nova cor foi definida
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $novaCor = $_POST['nova_cor'];  // Captura a nova cor do formulário
        $meuCarro->cor = $novaCor;  // Atualiza a cor do carro
        echo "<p>Nova cor do carro: " . htmlspecialchars($meuCarro->cor) . "</p>";  // Exibe a nova cor
    } else {
        echo "<p>Cor inicial do carro: " . $meuCarro->cor . "</p>";  // Exibe a cor inicial
    }
    ?>

    <!-- Formulário HTML para alterar a cor do carro -->
    <form method="post" action="">
        <label for="nova_cor">Digite uma nova cor para o carro:</label>
        <input type="text" id="nova_cor" name="nova_cor" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

