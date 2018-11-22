<?php
    //Clase que regresa una descripcion de error para M3rcurio
    class ErrorMercurio
    {
        private static $error;

        private function __construct()
        {
        }

        public static function getInstance()
        {
            if(self::$error == null)
                self::$error = new ErrorMercurio();

            return self::$error;
        }

        public function getMensajeError($codigo)
        {
            switch($codigo)
            {
                case "00":
                    break;
            }
        }
    }
?>