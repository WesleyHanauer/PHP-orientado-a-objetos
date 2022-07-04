<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta name="author" content="Wesley Hanauer">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>OOP em PHP</title>
</head>
<body>
    <header>
        <h1>OOP em PHP</h1>
    </header>
</body>
</html>
<?php

/**
 * Dá valor e imprime as caracteristicas das pessoas.
 * @author Wesley Hanauer.
 * @access public
 */


include('Pessoa.php');
$Pessoa = new Pessoa();
$Pessoa->setNome('Wesley');
$Pessoa->setDataNasc('16/08/2004');
$Pessoa->setCPF('038891848');
$Pessoa->setRG('1239123');

include('Engenheiro.php');
$Engenheiro = new Engenheiro();
$Engenheiro->setNome('Pedro');
$Engenheiro->setDataNasc('17/03/2002');
$Engenheiro->setCPF('483891854');
$Engenheiro->setRG('3136135');
$Engenheiro->setCREA('83242734');

include('Medico.php');
$Medico = new Medico();
$Medico->setNome('Mohammed');
$Medico->setDataNasc('11/07/2001');
$Medico->setCPF('248823859');
$Medico->setRG('4136534');
$Medico->setCRM('812');

echo "Nome: ".$Pessoa->getNome();
echo "<br>";
echo "Nascimento: ".$Pessoa->getDataNasc();
echo "<br>";
echo "CPF: ".$Pessoa->getCPF();
echo "<br>";
echo "RG: ".$Pessoa->getRG();
echo "<br><br>";
echo "Nome: ".$Engenheiro->getNome();
echo "<br>";
echo "Nascimento: ".$Engenheiro->getDataNasc();
echo "<br>";
echo "CPF: ".$Engenheiro->getCPF();
echo "<br>";
echo "RG: ".$Engenheiro->getRG();
echo "<br>";
echo "CREA: ".$Engenheiro->getCREA();
echo "<br><br>";
echo "Nome: ".$Medico->getNome();
echo "<br>";
echo "Nascimento: ".$Medico->getDataNasc();
echo "<br>";
echo "CPF: ".$Medico->getCPF();
echo "<br>";
echo "RG: ".$Medico->getRG();
echo "<br>";
echo "CRM: ".$Medico->getCRM();