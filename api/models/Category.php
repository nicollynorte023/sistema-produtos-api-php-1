<?php

namespace api\models;

use api\core\Database;
use PDO;

class Category {

    public static function findAll() {

        $conn = new Database();

        $result = $conn->executeQuery(
            'SELECT * FROM category'
        );

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id) {

        $conn = new Database();

        $result = $conn->executeQuery(
            'SELECT * FROM category WHERE id = :ID LIMIT 1',
            [
                ':ID' => $id
            ]
        );

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function create(array $data) {

        $conn = new Database();

        return $conn->executeQuery(
            'INSERT INTO category (nome)
             VALUES (:NOME)',
            [
                ':NOME' => $data['nome']
            ]
        );
    }

    public static function updateById(int $id, array $data) {

        $conn = new Database();

        return $conn->executeQuery(
            'UPDATE category
             SET nome = :NOME
             WHERE id = :ID',
            [
                ':NOME' => $data['nome'],
                ':ID' => $id
            ]
        );
    }

    public static function deleteById(int $id) {

        $conn = new Database();

        return $conn->executeQuery(
            'DELETE FROM category
             WHERE id = :ID',
            [
                ':ID' => $id
            ]
        );
    }
}