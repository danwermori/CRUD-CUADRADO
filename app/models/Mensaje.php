<?php
class Mensaje
{
    public static function all(): array
    {
        $pdo = Database::getConnection();
        $st = $pdo->query("SELECT * FROM mensajes");
        return $st->fetchAll();
    }

    public static function find(int $id): ?array
    {
        $pdo = Database::getConnection();
        $st = $pdo->prepare("SELECT * FROM mensajes WHERE id = ?");
        $st->execute([$id]);
        $row = $st->fetch();
        return $row ?: null;
    }

    public static function create(array $d): int
    {
        $pdo = Database::getConnection();
        $st = $pdo->prepare("INSERT INTO mensajes (lado, area, perimetro, fecha) VALUES (?, ?, ?, ?)");
        $st->execute([
            $d['lado'],
            $d['area'],
            $d['perimetro'],
            $d['fecha']
        ]);
        return (int)$pdo->lastInsertId();
    }

    public static function updateById(int $id, array $d): bool
    {
        $pdo = Database::getConnection();
        $st = $pdo->prepare("UPDATE mensajes SET lado = ?, area = ?, perimetro = ?, fecha = ? WHERE id = ?");
        return $st->execute([
            $d['lado'],
            $d['area'],
            $d['perimetro'],
            $d['fecha'],
            $id
        ]);
    }

    public static function deleteById($id)
    {
        $db = new mysqli("localhost", "root", "", "cuadrado_db");
        $stmt = $db->prepare("DELETE FROM mensajes WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $db->close();
    }
}
