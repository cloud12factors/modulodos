# modulodos
proyecto en PHP de microservicios
El siguiente proyecto tiene como finalidad ejemplificar el API rest en PHP para manejar razas de perros en microservicios, se muestran los fundamentos de los llamados PUT,GET,POST,DELETE enviando y recibiendo peticiones en JSon.

Algunas características son:
En terminos generales el sistema usa mysql, servidor apache, rocky linux 9, php_pdo (para facilitar el cambio de manejador de base de datos)
Para facilitar el uso entre servidores, la aplicación carga los datos de conexión de las variables de ambiente
El manejo del puerto se delega a los servidores web.
Se usaron 7 archivos para maximizar la velocidad de carga de un nuevo microservicio, colocando los requerimientos minimos.

# uso
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
