<?php

class Producto
{
	private static $producto

	public static function getInstance()
	{
		if(self::$producto == null)
			self::$producto = new Producto();

		return self::$producto;
	}

	//Metodo para obtener el id del producto a consumir
	public function getIDProducto($opcion, $monto)
	{
		switch ($opcion) 
		{
			case 'MOVISTAR':
				switch ($monto) 
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
				break;
			case 'UNEFON':
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
				break;
			case 'IUSACELL':
				switch ($monto) 
				{
					case 10:
						$id="I010";
						break;
					case 20:
						$id="I020";
						break;
					case 30:
						$id="I030";
						break;
					case 50:
						$id="I050";
						break;
					case 70:
						$id="I070";
						break;
					case 100:
						$id="I100";
						break;
					case 120:
						$id="I120";
						break;
					case 150:
						$id="I150";
						break;
					case 200:
						$id="I200";
						break;
					case 300:
						$id="I300";
						break;
					case 500:
						$id="I500";
						break;
					case 750:
						$id="I750";
						break;
					case 1000:
						$id="I1000";
						break;
				}
				break;
			case 'VIRGIN':
				switch ($monto) 
				{
					case 20:
						$id="V020";
						break;
					case 30:
						$id="V030";
						break;
					case 40:
						$id="V040";
						break;
					case 50:
						$id="V050";
						break;
					case 100:
						$id="V100";
						break;
					case 150:
						$id="V150";
						break;
					case 200:
						$id="V200";
						break;
					case 300:
						$id="V300";
						break;
					case 500:
						$id="V500";
						break;	
				}
				break;
			case 'AT&T':
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
				break;
			case 'MOVISTAR AGRANDADO':
				switch ($monto) 
				{
					case 35:
						$id="M035";
						break;
					case 65:
						$id="M065";
						break;
					case 105:
						$id="M105";
						break;
					case 125:
						$id="M125";
						break;
					case 155:
						$id="M155";
						break;
					case 205:
						$id="M205";
						break;
				}
				break;
			case 'ALO':
				switch ($monto) 
				{
					case 10:
						$id="ALO10";
						break;
					case 20:
						$id="ALO20";
						break;
					case 30:
						$id="ALO30";
						break;
					case 40:
						$id="ALO40";
						break;
					case 50:
						$id="ALO50";
						break;
				}
				break;
			case 'TELCEL'
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
				break;

			default:
				$id ="0";
		}
		return $id;
	}
}

?>