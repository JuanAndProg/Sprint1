<form method="post" action="">
  Fins a on vols comptar? <input type="number" name="valor_num" pattern="[0-9]+" required>
  <input type="submit" name="submit" value="Enviar">
</form>

<?php
if(isset($_POST['submit'])) {
  $valor_num = $_POST['valor_num'];
  if(is_numeric($valor_num)) {
    echo "El valor numèric ingressat és: " . $valor_num ."<br>";
    function compte_fins_a($valor_num){
        for($i=0; $i<=$valor_num; $i+=2){
          echo $i . "<br>";
        }
      }
      
      compte_fins_a($valor_num); 
  } else {
    echo "Error: El valor ingressat no és numèric.";
  }
}

?>