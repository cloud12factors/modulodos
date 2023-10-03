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


# configuración de la base

//conexion

root@localhost ~]# mysql -u root -p

mysql> use mysql;

mysql> create database perrorraza;

mysql> create user perrorraza@127.0.0.1;

mysql>  alter user perrorraza@127.0.0.1 identified  by 'lacontra';

mysql> grant all privileges on perrorraza.* to perrorraza@127.0.0.1 ;

mysql> exit


-carga del script de la tabla

[root@localhost ~]# mysql -u perrorraza -p -h 127.0.0.1 perrorraza   < perrorraza.sql


# Confiracion variables de ambiente y puerto

agregar en el archivo /etc/httpd/httpd.conf las variables de ambiente, para que no se escriban en código de la aplicación y sea portable

SetEnv SERVERIPNAME 127.0.0.1

SetEnv USERNAME elusuariobase

SetEnv PASSWORD lacontraseña

SetEnv DATABASE labasededatos

Listen 9090

reiniciar

systemctl restart  httpd






