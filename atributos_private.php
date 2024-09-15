<?php
class Banco {
    private $saldo;  // Atributo privado

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;  // Inicializa o atributo privado
    }

    // Método público para obter o saldo
    public function getSaldo() {
        return $this->saldo;  // Retorna o valor do atributo privado
    }

    // Método público para depositar um valor
    public function depositar($quantia) {
        if ($quantia > 0) {
            $this->saldo += $quantia;  // Modifica o atributo privado
            echo "Depósito de $quantia realizado com sucesso.";
        } else {
            echo "Valor de depósito inválido.";
        }
    }

    // Método público para sacar um valor
    public function sacar($quantia) {
        if ($quantia > 0 && $quantia <= $this->saldo) {
            $this->saldo -= $quantia;  // Modifica o atributo privado
            echo "Saque de $quantia realizado com sucesso.";
        } else {
            echo "Saldo insuficiente ou valor inválido.";
        }
    }
}

// Criação de uma instância da classe Banco
$conta = new Banco(1000);  // Saldo inicial de 1000

// Operações permitidas através de métodos públicos
echo $conta->getSaldo();  // Saída: 1000
$conta->depositar(500);   // Saída: "Depósito de 500 realizado com sucesso."
echo $conta->getSaldo();  // Saída: 1500
$conta->sacar(200);       // Saída: "Saque de 200 realizado com sucesso."
echo $conta->getSaldo();  // Saída: 1300

// Tentativa de acessar o atributo privado diretamente
// echo $conta->saldo;  // ERRO: Tentativa de acessar um atributo privado
?>
