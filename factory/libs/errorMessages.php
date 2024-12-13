<?php
class ErrorMessages {
    public static function send($codigoError) {
        $mensajesError = [
            505 => "Error de conexión a la base de datos",
            404 => "No se encontró la página",
            301 => "Error de autenticación del usuario",
            // Agrega más códigos de error según sea necesario
        ];

        // Establece el código de respuesta HTTP
        http_response_code($codigoError);

        if (array_key_exists($codigoError, $mensajesError)) {
            $mensaje = $mensajesError[$codigoError];
        } else {
            $mensaje = "Código de error no reconocido";
            // Opcional: Establecer un código de estado genérico para errores no reconocidos
            http_response_code(400);
        }

        // Enviar la respuesta como JSON
        return ['error' => $mensaje];
    }
}
?>