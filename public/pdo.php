<?php
require_once(__DIR__.'/config/config.php');

class Connect {

    function pdo()
    {
        try {
            // DB接続を試みる
            $db  = new PDO('mysql:host=' . HOSTNAME . ';dbname=' . DATABASE, USERNAME, PASSWORD);
            // $msg = "MySQL への接続確認が取れました。";
        } catch (PDOException $e) {
            $isConnect = false;
            $msg       = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
            die();
        }

        return $msg;

    }

    function select()
    {
        $pdo = $this->pdo($sql);
        $stmt = $pdo->query($sql);
        $obj = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $obj;
    }

}

?>