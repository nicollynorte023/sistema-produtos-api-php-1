<?php

namespace api\models;

use api\core\Database;
use PDO;

class User {

    public static function findAll() {

        $conn = new Database();

        $result = $conn->executeQuery(
            'SELECT * FROM user'
        );

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById(int $id) {

        $conn = new Database();

        $result = $conn->executeQuery(
            'SELECT * FROM user WHERE id = :ID LIMIT 1',
            [
                ':ID' => $id
            ]
        );

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function create(array $data) {

        $conn = new Database();

        return $conn->executeQuery(
            'INSERT INTO user
            (
                nome,
                cpf,
                numero,
                type_user
            )
            VALUES
            (
                :NOME,
                :CPF,
                :NUMERO,
                :TYPE_USER
            )',
            [
                ':NOME' => $data['nome'],
                ':CPF' => $data['cpf'],
                ':NUMERO' => $data['numero'],
                ':TYPE_USER' => $data['type_user']
            ]
        );
    }

    public static function updateById(int $id, array $data) {

        $conn = new Database();

        return $conn->executeQuery(
            'UPDATE user SET
                nome = :NOME,
                cpf = :CPF,
                numero = :NUMERO,
                type_user = :TYPE_USER
            WHERE id = :ID',
            [
                ':NOME' => $data['nome'],
                ':CPF' => $data['cpf'],
                ':NUMERO' => $data['numero'],
                ':TYPE_USER' => $data['type_user'],
                ':ID' => $id
            ]
        );
    }

    public static function deleteById(int $id) {

        $conn = new Database();

        return $conn->executeQuery(
            'DELETE FROM user WHERE id = :ID',
            [
                ':ID' => $id
            ]
        );
    }
}