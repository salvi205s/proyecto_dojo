<?php

function dni($dni)
{
  $letra = substr($dni, -1);
  $numeros = substr($dni, 0, -1);
  /* $valido=""; */
  if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
    $valido = true;
    
  } else {
    $valido = false;
    

  }

  return $valido;
}
