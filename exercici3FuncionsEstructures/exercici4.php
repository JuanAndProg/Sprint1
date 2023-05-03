<form method="post" action="">
  Fins a on vols comptar? <input type="number" name="valor_num" required>
  <input type="submit" name="submit" value="Enviar">
</form>

<?php
if(isset($_POST['submit'])) {
  $valor_num = $_POST['valor_num'];
  $valor_num = is_numeric($valor_num) ? $valor_num : 10;
  echo "El valor numèric ingressat és: " . $valor_num . "<br>";
}
function compte_fins_a($valor_num){
    for($i=0; $i<=$valor_num; $i+=2){
      echo $i . "<br>";
    }
  }
  
  compte_fins_a($valor_num);
?> 
