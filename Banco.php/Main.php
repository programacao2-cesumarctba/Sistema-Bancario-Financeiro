<?php
//echo '28092019';

require __DIR__ .'/vendor/autoload.php';

use App\ContaBanco;
use App\Cliente;
use App\ContaBancoCp;
use App\ContaBancoCc;

// $Test = new Conta\Test;
//$Test = new Cliente;
//$Test->imprimitest('conta cadastrada');

//criando cadastro cliente

$cliente = new Cliente;
$cliente->criacliente ('alex','alexrogeriodj@gmail.com','rua das rosa');


//criando conta
$n1 = new ContaBanco;
$n1->ContaBancaria(45,85,98,'alexconta');
$n1->mostraconta();


//empréstimo na conta corrente
$contacorrente = new ContaBancoCc;

$contacorrente->emprest(8);


//criando conta poupança
$contapoupa = new ContaBancoCp;

$contapoupa->poupar(900);
