<?php

class Carro {
    public $cor;  // Atributo público

    public function __construct($cor) {
        $this->cor = $cor;
    }
}
    $meuCarro = new Carro("Vermelho");
    echo "Informando a cor: <br/>";
    echo $meuCarro->cor;  
    echo "<br/> Modificando a cor: <br/>";
    $meuCarro->cor = "Azul"; 
    echo $meuCarro->cor;  
?>


