<?php

class Adotante {
    public $nome;
    public $idade;
    public $telefone;
    public $email;
    public $endereco;
    public $temOutrosAnimais;
    public $experienciaComPets;
    public $animalAdotado;

    public function exibirAdotante() {
        echo "Nome: $this->nome<br>";
        echo "Idade: $this->idade<br>";
        echo "Telefone: $this->telefone<br>";
        echo "Email: $this->email<br>";
        echo "Endereço: $this->endereco<br>";
        echo "Tem outros animais: " . ($this->temOutrosAnimais ? "Sim" : "Não") . "<br>";
        echo "Experiência com pets: $this->experienciaComPets<br>";
    }

    public function adotarAnimal($animal) {
        $this->animalAdotado = $animal;
    }

    public function verificarIdade() {
        return $this->idade >= 17 ? "Pode adotar" : "Idade insuficiente";
    }

    public function temExperiencia() {
        return $this->experienciaComPets;
    }

    public function listarContato() {
        echo "Telefone: $this->telefone | Email: $this->email<br>";
    }

    public function verificarOutrosAnimais() {
        return $this->temOutrosAnimais ? "Possui outros animais" : "Não possui outros animais";
    }

    public function cancelarAdocao() {
        $this->animalAdotado = null;
    }

    public function resumoAdotante() {
        $animal = $this->animalAdotado ? $this->animalAdotado->nome : "Nenhum";
        echo "Adotante: $this->nome | Animal adotado: $animal<br>";
    }
}
