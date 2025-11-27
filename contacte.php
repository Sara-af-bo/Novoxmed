<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $missatge = $_POST['missatge'];
    $hora = date("Y-m-d H:i:s");

    $fila = [$hora, $nom, $email, $missatge];
    $fitxer = fopen("arxius/missatges.csv", "a");
    fputcsv($fitxer, $fila);
    fclose($fitxer);

    echo "<script>alert('Missatge enviat correctament!'); window.location.href='contacte.html';</script>";
}
?>
