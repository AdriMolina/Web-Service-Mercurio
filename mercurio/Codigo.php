<?php
    //Clase que contiene los codigos de M3rcurio necesarios para la recarga
    class CodigoMercurio
    {
        private static $codigo;

        private function __construct()
        {    
        }

        public static function getInstance()
        {
            if(self::$codigo == null)
                self::$codigo = new CodigoMercurio();

            return self::$codigo;
        }

        public function getCodigo($compania, $monto)
        {
            switch($compania)
            {
                case "MOVISTAR":
                    $elemento = $this->getCodigoMovistar($monto);
                    break;

                case "UNEFON":
                    $elemento = $this->getCodigoUnefon($monto);
                    break;

                case "AT&T":
                    $elemento = $this->getCodigoATT($monto);
                    break;

                case "TELCEL":
                    $elemento = $this->getCodigoTelcel($monto);
                    break;
            }

            return $elemento;
        }

        private function getCodigoMovistar($monto)
        {
            switch($monto)
            {
                case 10:
                    $id = "M010";
                    break;
                case 20:
                    $id = "M020";
                    break;
                case 30:
                    $id = "M030";
                    break;
                case 40:
                    $id = "M040";
                    break;
                case 50:
                    $id = "M050";
                    break;
                case 60:
                    $id = "M060";
                    break;
                case 70:
                    $id = "M070";
                    break;
                case 80:
                    $id = "M080";
                    break;
                case 100:
                    $id = "M100";
                    break;
                case 120:
                    $id = "M120";
                    break;
                case 150:
                    $id = "M150";
                    break;
                case 200:
                    $id = "M200";
                    break;
                case 250:
                    $id = "M250";
                    break;
                case 300:
                    $id = "M300";
                    break;
                case 400:
                    $id = "M400";
                    break;
                case 500:
                    $id = "M500";
                    break;
            }

            return $id;
        }

        private function getCodigoUnefon($monto)
        {
            switch ($monto) 
            {
                case 10:
                    $id="U010";
                    break;
                case 20:
                    $id="U020";
                    break;
                case 30:
                    $id="U030";
                    break;
                case 50:
                    $id="U050";
                    break;
                case 70:
                    $id="U070";
                    break;
                case 100:
                    $id="U100";
                    break;
                case 120:
                    $id="U120";
                    break;
                case 150:
                    $id="U150";
                    break;
                case 200:
                    $id="U200";
                    break;
                case 300:
                    $id="U300";
                    break;
                case 500:
                    $id="U500";
                    break;
                case 750:
                    $id="U750";
                    break;
                case 1000:
                    $id="U1000";
                    break;
            }

            return $id;
        }

        private function getCodigoATT($monto)
        {
            switch ($monto) 
            {
                case 10:
                    $id="N010";
                    break;
                case 20:
                    $id="N020";
                    break;
                case 30:
                    $id="N030";
                    break;
                case 50:
                    $id="N050";
                    break;
                case 70:
                    $id="N070";
                    break;
                case 100:
                    $id="N100";
                    break;
                case 120:
                    $id="N120";
                    break;
                case 150:
                    $id="N150";
                    break;
                case 200:
                    $id="N200";
                    break;
                case 300:
                    $id="N300";
                    break;
                case 500:
                    $id="N500";
                    break;
                case 750:
                    $id="N750";
                    break;
                case 1000:
                    $id="N1000";
                    break;
            }

            return $id;
        }

        private function getCodigoTelcel($monto)
        {
            switch ($monto) 
            {
                case 20:
                    $id="A020";
                    break;
                case 30:
                    $id="A030";
                    break;
                case 50:
                    $id="A050";
                    break;
                case 80:
                    $id="A80";
                    break;
                case 100:
                    $id="A100";
                    break;
                case 150:
                    $id="A150";
                    break;
                case 200:
                    $id="A200";
                    break;
                case 300:
                    $id="A300";
                    break;
                case 500:
                    $id="A500";
                    break;
            }

            return $id;
        }
    }
?>