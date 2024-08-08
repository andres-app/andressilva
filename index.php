<?php
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/' :
        require __DIR__ . '/index.html';
        break;
    case 'projects' :
        require __DIR__ . '/projects.html';
        break;
    case '/resume' :
        require __DIR__ . '/resume.html';
        break;
    case '/contact' :
        require __DIR__ . '/contact.html';
        break;    
    // Añade más casos según sea necesario
    default:
        http_response_code(404);
        require __DIR__ . '/404.html';
        break;
}
?>
