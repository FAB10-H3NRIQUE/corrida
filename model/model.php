<?php
// models/Pista.php
class Pista {
    public $id_pista;
    public $cidade;
    public $distancia;
    public $pais;
}

// models/Piloto.php
class Piloto {
    public $id_piloto;
    public $nome;
    public $idade;
    public $peso;
}

// models/Carro.php
class Carro {
    public $id_carro;
    public $modelo;
    public $cor;
    public $ano_fabricacao;
}

// models/Equipe.php
class Equipe {
    public $id_equipe;
    public $lider;
    public $nome;
    public $patrocinadores;
    public $pilotos = array(); // array de objetos Piloto
}

// models/Corrida.php
class Corrida {
    public $id_corrida;
    public $pista; // objeto Pista
    public $data;
    public $pilotos = array(); // array de objetos Piloto
}
?>