<?php
// Clave de encriptación (debe ser de 16, 24 o 32 caracteres)
$clave = "clave_secreta";

// Vector de inicialización (IV) (debe ser de 16 caracteres)
$iv = "iv_secreto";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];
    
    // Encriptar el texto usando AES-256-CBC
    $textoEncriptado = openssl_encrypt($texto, "AES-256-CBC", $clave, 0, $iv);
    
    echo $textoEncriptado;
}
?>
