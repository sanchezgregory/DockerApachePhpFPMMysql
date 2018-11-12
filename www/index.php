<?php
 
echo 'Docker-compose listo y funcional!';
 
$servername = getenv('MYSQL_IP');
$username = getenv('MYSQL_ROOT_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');
 
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
   exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
 
echo '<p><strong>Conectado a la BD... puedes continuar agregando tus archivos al Dir www/</strong>'.PHP_EOL;

echo "<p>Servername : " . $servername;
echo "<p>Username: " . $username;
echo "<p>Password: " . $password;

echo phpinfo();
