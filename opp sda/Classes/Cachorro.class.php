<?php

class Cachorro {
    public $nome;
    public $raca;
    public $porte;
    public $nivelEnergia;
    public $vacinado;
    public $vermifugado;
    public $sociavel;
    public $adestrado;

    // Agora sem construtor, você pode setar os valores com ->

    public function exibirCachorro() {
        echo "Nome: $this->nome<br>";
        echo "Raça: $this->raca<br>";
        echo "Porte: $this->porte<br>";
        echo "Nível de energia: $this->nivelEnergia<br>";
        echo "Vacinado: " . ($this->vacinado ? "Sim" : "Não") . "<br>";
        echo "Vermifugado: " . ($this->vermifugado ? "Sim" : "Não") . "<br>";
        echo "Sociável: " . ($this->sociavel ? "Sim" : "Não") . "<br>";
        echo "Adestrado: " . ($this->adestrado ? "Sim" : "Não") . "<br>";
    }

    public function vacinar() {
        $this->vacinado = true;
    }

    public function verificarAdestramento() {
        return $this->adestrado ? "Adestrado" : "Não adestrado";
    }

    public function atualizarNivelEnergia($valor) {
        if ($valor >= 1 && $valor <= 10) {
            $this->nivelEnergia = $valor;
        } else {
            echo "Valor inválido. Use entre 1 e 10.<br>";
        }
    }

    public function indicarPorte() {
        return $this->porte;
    }

    public function socializar() {
        $this->sociavel = true;
    }

    public function iniciarAdestramento() {
        $this->adestrado = true;
    }

    public function resumoCachorro() {
        echo "Nome: $this->nome | Raça: $this->raca | Porte: $this->porte<br>";
    }
}
