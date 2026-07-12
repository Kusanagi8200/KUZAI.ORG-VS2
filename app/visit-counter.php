<?php

declare(strict_types=1);

function incrementVisitCounter(string $databasePath): ?int
{
    $pdo = null;

    try {
        $pdo = new PDO('sqlite:' . $databasePath);

        $pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );

        $pdo->exec('PRAGMA busy_timeout = 5000');

        $pdo->exec(
            'CREATE TABLE IF NOT EXISTS counters (
                name TEXT PRIMARY KEY,
                value INTEGER NOT NULL DEFAULT 0
            )'
        );

        $pdo->beginTransaction();

        $update = $pdo->prepare(
            'INSERT INTO counters (name, value)
             VALUES (:name, 1)
             ON CONFLICT(name)
             DO UPDATE SET value = value + 1'
        );

        $update->execute([
            'name' => 'page_views',
        ]);

        $read = $pdo->prepare(
            'SELECT value
             FROM counters
             WHERE name = :name'
        );

        $read->execute([
            'name' => 'page_views',
        ]);

        $value = $read->fetchColumn();

        $pdo->commit();

        return $value !== false ? (int) $value : null;
    } catch (Throwable $exception) {
        if ($pdo instanceof PDO && $pdo->inTransaction()) {
            $pdo->rollBack();
        }

        error_log(
            'KUZAI visit counter: ' . $exception->getMessage()
        );

        return null;
    }
}
