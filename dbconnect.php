<?php

$servername = "localhost";
$username = "root";
$password = "root";

class database {

    public function query($query) {

        $dsn = "mysql:
        host=localhost;
        dbname=fabnovac;
        user=root;
        password=root";

        $pdo = new PDO($dsn);

        $stmt = $pdo->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}

?>