<?php
echo "Hostname 'redis' can be found at: " . gethostbyname('redis')."\n";
 
$hostname='mysql';
$username='alzort';
$password='secret';
$dbname='alzort';
 
try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    echo "Connected to the database at hostname 'mysql': " . gethostbyname('mysql') . "\n";
} catch(Exception $e) {
    echo $e->getMessage();
}