<?php

    include'../model/cliente-class.php';


    $reserva = new Cliente();

    $reserva->setNomeDoCliente($_POST['txtnome']);
    $reserva->setEmail($_POST['txtemail']);
    $reserva->setTelefone($_POST['txttelefone']);
    $reserva->setRG($_POST['txtrg']);
    $reserva->setSuites($_POST['txtsuites']);
    $reserva->setDiaria($_POST['txtdiaria']);

    header('location:../view/resposta-view.php?nome='.$reserva->getNomeDoCliente().'&email='.$reserva->getEmail().
    '&telefone='.$reserva->getTelefone().'&rg='.$reserva->getRG().'&diaria='.$reserva->getDiaria().'&suites='.$reserva->getSuites().'&resposta='.$reserva->escolherSuite());




  
    
    




?>