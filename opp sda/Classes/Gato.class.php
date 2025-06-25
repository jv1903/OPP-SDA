<?php

class Gato {
    public $nome;
    public $pelagem;
    public $castrado;
    public $independente;
    public $vacinado;
    public $curioso;
    public $adoraColo;
    public $usaCaixaAreia;

    public function exibirGato() {
        echo "Nome: $this->nome<br>";
        echo "Pelagem: $this->pelagem<br>";
        echo "Castrado: " . ($this->castrado ? "Sim" : "Não") . "<br>";
        echo "Independência: $this->independente<br>";
        echo "Vacinado: " . ($this->vacinado ? "Sim" : "Não") . "<br>";
        echo "Curioso: " . ($this->curioso ? "Sim" : "Não") . "<br>";
        echo "Adora colo: " . ($this->adoraColo ? "Sim" : "Não") . "<br>";
        echo "Caixa de areia: " . ($this->usaCaixaAreia ? "Sim" : "Não") . "<br>";
    }

    public function castrar() {
        $this->castrado = true;
    }

    public function vacinar() {
        $this->vacinado = true;
    }

    public function ensinarCaixaAreia() {
        $this->usaCaixaAreia = true;
    }

    public function verificarPelagem() {
        return $this->pelagem;
    }

    public function verificarContato() {
        return $this->adoraColo ? "Aceita colo" : "Prefere distância";
    }

    public function atualizarIndependencia($grau) {
        if ($grau >= 1 && $grau <= 10) {
            $this->independente = $grau;
        }
    }

    public function resumoGato() {
        $status = $this->castrado ? "Castrado" : "Não castrado";
        echo "Nome: $this->nome | Pelagem: $this->pelagem | Status: $status<br>";
    }
}
