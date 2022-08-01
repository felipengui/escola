<?php

    class Cliente
    {
        private $nomeDoCliente;
        private $email;
        private $telefone;
        private $RG;
        private $suites;
        private $diaria;

        function __construct()
        {       
        }

        public function getNomeDoCliente()
        {
                return $this->nomeDoCliente;
        }
        public function setNomeDoCliente($nomeDoCliente)
        {
                $this->nomeDoCliente = $nomeDoCliente;
        }

        public function getEmail()
        {
                return $this->email;
        }
        public function setEmail($email)
        {
                $this->email = $email;
        }

        public function getTelefone()
        {
                return $this->telefone;
        }
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;
        }

        public function getRG()
        {
                return $this->RG;
        }
        public function setRG($RG)
        {
                $this->RG = $RG;
        }

        public function getSuites()
        {
                return $this->suites;
        }
        public function setSuites($suites)
        {
                $this->suites = $suites;
        }
        public function getDiaria()
        {
                return $this->diaria;
        }
        public function setDiaria($diaria)
        {
                $this->diaria = $diaria;
        }


        function escolherSuite()
        {
                 $text= 0.0;
                switch($this->suites) {
                        case 'Master':
                                $text= $this->diaria * 150;
                        break;
                        case 'Familia':
                                $text= $this->diaria * 180;
                        break;
                        case 'Single':
                                $text= $this->diaria * 100;
                        break;
                        default;
                        $text= 0;
               
                }  
                return $text;     
  
        }


}

?>