<?php

class Animal {
    public $nome;
    public $especie;
    public $idade;
    public $sexo;
    public $peso;
    public $cor;
    public $status;
    public $chipado;

    // Sem construtor, para definir os valores depois com ->

    public function exibirFicha() {
        echo "Nome: $this->nome<br>";
        echo "Espécie: $this->especie<br>";
        echo "Idade: $this->idade anos<br>";
        echo "Sexo: $this->sexo<br>";
        echo "Peso: $this->peso kg<br>";
        echo "Cor predominante: $this->cor<br>";
        echo "Status: $this->status<br>";
        echo "Possui chip: " . ($this->chipado ? "Sim" : "Não") . "<br>";
    }

    public function atualizarPeso($novoPeso) {
        $this->peso = $novoPeso;
    }

    public function alterarStatus($novoStatus) {
        $this->status = $novoStatus;
    }

    public function verificarIdade() {
        if ($this->idade < 1) return "Filhote";
        if ($this->idade <= 7) return "Adulto";
        return "Idoso";
    }

    public function marcarComoChipado() {
        $this->chipado = true;
    }

    public function desmarcarChipado() {
        $this->chipado = false;
    }

    public function resumoAnimal() {
        echo "Nome: $this->nome | Espécie: $this->especie | Status: $this->status<br>";
    }

    public function verificarSexo() {
        return $this->sexo;
    }
}
