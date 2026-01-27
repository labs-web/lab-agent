<?php
declare(strict_types=1);

namespace App\Core;

/**
 * Singleton de connexion PDO à la base de données.
 */
class Database
{
    private static ?self $instance = null;
    private \PDO $pdo;

    // Configuration - À adapter selon votre environnement
    private const HOST = 'localhost';
    private const DBNAME = 'lab_agent';
    private const USERNAME = 'root';
    private const PASSWORD = 'admin';
    private const CHARSET = 'utf8mb4';

    private function __construct()
    {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=%s',
            self::HOST,
            self::DBNAME,
            self::CHARSET
        );

        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $this->pdo = new \PDO($dsn, self::USERNAME, self::PASSWORD, $options);
    }

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): \PDO
    {
        return $this->pdo;
    }

    // Empêcher le clonage et la désérialisation
    private function __clone()
    {
    }
    public function __wakeup(): void
    {
        throw new \Exception("Cannot unserialize singleton");
    }
}
