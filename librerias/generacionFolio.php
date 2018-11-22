<?php
//generar el primer folio
function primerFolio($claveCliente)
{
  //anio actual
  $anioActual = date("Y");
  //parte numerica
  $numero = "00000001";

  $primerFolio = $claveCliente."/".$numero."/".$anioActual;
  return $primerFolio;
}

//generar el folio consecutivo
function folioNuevo($folioAnterior, $claveCliente)
{
    $anioActual = date("Y");
    //Descomponer cadena
    $aCount = explode("/", $folioAnterior);
    $folioNumero = $aCount[1];
    $folioAnio = $aCount[2];

    //si cambio el año del ultimo folio
    if ($folioAnio == $anioActual) 
    {
      $AnioNuevo = $fechaHoy=date("Y");

      $fNumeroNuevo = $folioNumero + 1;
      $cadena = str_pad($fNumeroNuevo, 8, "0", STR_PAD_LEFT);
      $primerFolio=$claveCliente."/".$cadena."/".$AnioNuevo;
    } 
    else 
    {
        $primerFolio = primerFolio($claveCliente);
    }
    
    return $primerFolio;
}

	
?>