<?php

abstract class Model {
    private static ?PDO $pdo = null;

    protected static function getPdo(): PDO {
        if (self::$pdo === null) {
            $host = 'postgresql-mathiasm.alwaysdata.net';
            $port = '5432';
            $dbname = 'mathiasm_web_bd';
            $user = 'mathiasm_bd_web_admin';
            $password = '1mdpphp';

            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

            try {
                self::$pdo = new PDO($dsn, $user, $password, [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ]);
            } catch (PDOException $e) {
                die('Erreur de connexion : ' . $e->getMessage());
            }
        }

        return self::$pdo;
    }

    public static function checkConnection(): bool {
        return (bool) self::getPdo()->query('SELECT 1');
    }
}