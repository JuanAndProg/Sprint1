<form method="post" action="">
  Quina és la nota de l'alumne? <input type="number" name="nota" min="0" max="100" required>
  <input type="submit" name="submit" value="Enviar">
</form>

<?php
if(isset($_POST['submit'])) {
    $nota = $_POST['nota'];
    if(is_numeric($nota)) {
        echo "El valor numèric ingressat és: " . $nota ."<br>";
        echo "El grau obtingut és: " . verificar_grau($nota); //Afegeix aquesta línia per a mostrar el grau
    }
}
        function verificar_grau($nota) {
            if ($nota >= 60) {
                return "Primera Divisió";
            } elseif ($nota >= 45 && $nota <= 59) {
                return "Segona Divisió";
            } elseif ($nota >= 33 && $nota <= 44) {
                return "Tercera Divisió";
            } else {
                return "Reprovat";
            }

}
?>