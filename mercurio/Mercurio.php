<?php
    require_once(dirname(__FILE__)."./lib/nusoap.php");
    date_default_timezone_set("America/Mexico_City");

    class Mercurio
    {
        private static $mercurio;
        private static $wsdl;
        private static $user;
        private static $pass;

        private function __construct()
        {
            self::$wsdl = "http://187.189.78.196:54637/wsTransactions.asmx?WSDL";
            self::$user = "PRUEBA0000";
            self::$pass = "432143";
        }

        public static function getInstance()
        {
            if(self::$mercurio == null)
                self::$mercurio = new Mercurio();

            return self::$mercurio;
        }

        private function realizarTransaccion($xml)
        {
            $cliente = new SoapClient(self::$wsdl, true);
            $respuesta = $cliente->call("wsTransaction", array("xmlVenta" => $xml));

            //Checa si hubo un resultado
            if(isset($respuesta["wsTransactionResult"]))
            {
                $respuesta = simplexml_load_string($respuesta["wsTransactionResult"]);
                $json = json_encode($respuesta);
                $array = json_decode($json, true);
            }
            else
                $array = array("error" => "Error en la respuesta Mercurio");

            return $array;
        }

        //Solicitud de recarga
        public function realizarRecarga($producto, $folio, $numero)
        {
            $fecha = date("d/m/Y H:i:s");
            $xml = "<SOLICITARTRANSACCION>
            <PuntoVenta>".self::$user."</PuntoVenta>
            <Password>".self::$pass."</Password>
            <Producto>$producto</Producto>
            <FechaVenta>$fecha</FechaVenta>
            <Telefono>$numero</Telefono>
            <Folio>$folio</Folio>
            <FechaInicio>$fecha</FechaInicio>
            </SOLICITARTRANSACCION>";

            return $this->realizarTransaccion($xml);
        }

        //Verificacion de recarga (solo funciona hasta 1 segundo despues de la respuesta de la recarga)
        public function consultarRecarga($numero, $folio)
        {
            $xml = "<CONSULTARTRANSACCION>
            <PuntoVenta>".self::$user."</PuntoVenta>
            <Password>".self::$pass."</Password>
            <Telefono>$numero</Telefono>
            <FolioCaja>$folio</FolioCaja>
            </CONSULTARTRANSACCION>";

            return $this->realizarTransaccion($xml);
        }

        //Consulta el saldo que se posee
        public function consultarSaldo()
        {
            $fecha = date("d/m/Y H:i:s");
            $xml = "<SALDO>
            <PuntoVenta>".self::$user."</PuntoVenta>
            <Password>".self::$pass."</Password>
            <FechaInicio>$fecha</FechaInicio>
            <Tipo>TAE</Tipo>
            </SALDO>";

            return $this->realizarTransaccion($xml);
        }

        //Solicitud de reverso de tiempo aire
        public function reversoRecarga($folio)
        {
            $fecha = date("d/m/Y H:i:s");
            $xml = "<REVERSARTRANSACCION>
            <PuntoVenta>".self::$user."</PuntoVenta>
            <Password>".self::$pass."</Password>
            <FechaVenta>$fecha</FechaVenta>
            <Folio>$folio</Folio>
            </REVERSARTRANSACCION>";

            return $this->realizarTransaccion($xml);
        }
    }
?>