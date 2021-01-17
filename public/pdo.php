<?php
require_once(__DIR__.'/config/config.php');

class Connect {

    function pdo()
    {
        try {
            // DB接続を試みる
            $pdo  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return $pdo;
    }

    function db_exec($sql) {
        $pdo = db_conn();
        try {
            $stmt = $pdo->query($sql);
        } catch (PDOException $e) {
            print $e."<br>\n";

        }

        return $stmt;
    }

    function db_fetch_obj($stmt) {
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

?>