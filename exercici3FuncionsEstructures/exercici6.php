<?php
function isBitten() {
    $bite = rand(0,1);
    if($bite == 1) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
// Cridar la funció i imprimir el valor retornat
if (isBitten()) {
    echo "Charlie ha mossegat el dit!";
  } else {
    echo "Charlie no ha mossegat el dit!";
  }
?>  