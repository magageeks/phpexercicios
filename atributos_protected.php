<?php
class Animal {
    protected $nome;  // Atributo protegido

    public function __construct($nome) {
        $this->nome = $nome;  // Inicializa o atributo protegido
    }

    protected function obterNome() {
        return $this->nome;  // Método protegido para retornar o nome
    }

    public function exibirNome() {
        return "O nome do animal é: " . $this->obterNome();
    }
}

class Cachorro extends Animal {
    public function latir() {
        return "<br/>O cachorro " . $this->nome . " está latindo!";
    }
}

// Criação de uma instância da classe Cachorro
$cachorro = new Cachorro("Rex");

// Acessando o método público da classe base que utiliza o atributo protegido
echo $cachorro->exibirNome();  // Saída: "O nome do animal é: Rex"

// Acessando o atributo protegido através de um método na classe derivada
echo $cachorro->latir();  // Saída: "O cachorro Rex está latindo!"
?>



