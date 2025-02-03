<?php
// index.php

// Incluir el autoloader de Composer
require __DIR__ . '/vendor/autoload.php';

// Cargar las credenciales desde config.php
$config = require __DIR__ . '/config.php';

use TourCMS\Utils\TourCMS as TourCMS;

// Configuración básica
$marketplace_id = $config['marketplace_id'];
$api_key = $config['api_key'];
$channel_id = $config['channel_id'];

// Crear una instancia de TourCMS
$tourcms = new TourCMS($marketplace_id, $api_key, 'simplexml');

// Configurar el User-Agent (opcional)
$tourcms->set_user_agent('Mi Sitio Web de Tours');

// Realizar una búsqueda de tours
$params = "country=ES&product_type=4";

$result = $tourcms->search_tours($params, $channel_id);

// Mostrar los resultados
if ($result && isset($result->tour)) {
    echo '<h1>Day Tours</h1>';
    foreach ($result->tour as $tour) {
        
        echo '<div class="tour">';
        echo '<h2>' . htmlspecialchars((string)$tour->tour_name) . '</h2>';
        echo '<p><strong>Descripción:</strong> ' . htmlspecialchars((string)$tour->summary) . '</p>';
        echo '<p><strong>Precio desde:</strong> ' . html_entity_decode(htmlspecialchars((string)$tour->from_price_display) ). '</p>';
        echo '<p><strong>Duración:</strong> ' . htmlspecialchars((string)$tour->duration_desc) . '</p>';
        echo '<p><strong>Ubicación:</strong> ' . htmlspecialchars((string)$tour->location) . '</p>';
        
        // Mostrar imagen si está disponible
        if (!empty($tour->thumbnail_image)) {
            echo '<img src="' . htmlspecialchars((string)$tour->thumbnail_image) . '" alt="' . htmlspecialchars((string)$tour->tour_name) . '">';
        }

        // Botón "Book now"
        echo '<p><a href="' . htmlspecialchars((string)$tour->book_url) . '" class="btn">Book now from ' . html_entity_decode(htmlspecialchars((string)$tour->from_price_display)) . '</a></p>';
        echo '</div>';
        echo '<hr>';
    
}
} else {
    echo '<h1>No se encontraron tours.</h1>';
}
?>

<!-- Estilos css -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    h1 {
        text-align: center;
    }
    .tour {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        background-color: #f9f9f9;
    }
    img {
        max-width: 100%;
        height: auto;
        border-radius: 4px;
        margin-top: 10px;
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }
    .btn:hover {
        background-color: #0056b3;
    }
</style>