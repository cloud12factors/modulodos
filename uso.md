layout: page
title: "uso"
permalink: /cloud12factors/modulodos

Ejemplos de uso del API
//Agregar
curl -X POST http://127.0.0.1/perrorrazas/request.php -H 'Content-Type: application/json' -d '{"raza":"changoleon"}'
curl -X POST http://127.0.0.1/perrorrazas/request.php -H 'Content-Type: application/json' -d '{"raza":"patoloro"}'
curl -X POST http://127.0.0.1/perrorrazas/request.php -H 'Content-Type: application/json' -d '{"raza":"osoperro"}'

//Consultar uno
curl -X GET http://127.0.0.1/perrorrazas/request.php -H 'Content-Type: application/json' -d '{"id":"7"}'

//Consultar todos
curl -X GET http://127.0.0.1/perrorrazas/request.php

//Actualizar
curl -X PUT http://127.0.0.1/perrorrazas/request.php -H 'Content-Type: application/json' -d '{"id":"7","raza":"osocerdo"}'

//Borrar
curl -X DELETE http://127.0.0.1/perrorrazas/request.php -H 'Content-Type: application/json' -d '{"id":"7"}'
