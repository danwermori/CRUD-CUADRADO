<?php
// Configuración para la conexión a la base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'cuadrado_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_PORT', '3306');

// Configuración de rutas
define('BASE_URL', '/tarea06/crud_cuadrado/public');
define('UPLOAD_DIR', __DIR__ . '/../public/img');

// Configuración de carga de archivos
define('MAX_IMAGE_BYTES', 2 * 1024 * 1024); // 2MB
define('ALLOWED_EXT', ['jpeg', 'png', 'gif', 'jpg', 'webp']);