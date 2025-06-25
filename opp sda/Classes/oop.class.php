<?php
include_once 'Animal.class.php';
include_once 'Cachorro.class.php';
include_once 'Gato.class.php';
include_once 'Adotante.class.php';

// Animal - Réptil
$animal = new Animal();
$animal->nome = "Lagartão";
$animal->especie = "Réptil";
$animal->idade = 2;
$animal->sexo = "Macho";
$animal->peso = 2;
$animal->cor = "Preto";
$animal->status = "disponível";
$animal->chipado = true;
$animal->exibirFicha();
echo "<hr>";

// Cachorro
$cachorro = new Cachorro();
$cachorro->nome = "Thedy";
$cachorro->raca = "Shitzu";
$cachorro->porte = "Pequeno";
$cachorro->nivelEnergia = 3;
$cachorro->vacinado = true;
$cachorro->vermifugado = true;
$cachorro->sociavel = true;
$cachorro->adestrado = false;
$cachorro->exibirCachorro();
echo "<hr>";

// Gato
$gato = new Gato();
$gato->nome = "Mustafa";
$gato->pelagem = "Pouco peludo";
$gato->castrado = false;
$gato->independente = 8;
$gato->vacinado = false;
$gato->curioso = true;
$gato->adoraColo = true;
$gato->usaCaixaAreia = true;
$gato->exibirGato();
echo "<hr>";

// Adotante
$adotante = new Adotante();
$adotante->nome = "João Vitor";
$adotante->idade = 17;
$adotante->telefone = "(51) 98529-7199";
$adotante->email = "peixoto.joaovitor07@gmail.com";
$adotante->endereco = "Rua Cunha Neto, 369 - Nonoai";
$adotante->temOutrosAnimais = false;
$adotante->experienciaComPets = "Sim";

// Adotar animal
$adotante->adotarAnimal($gato);

// Exibir informações
$adotante->exibirAdotante();
echo "<hr>";
$adotante->resumoAdotante();
