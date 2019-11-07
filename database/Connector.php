<?php


class Connector
{

    public static function make()
    {
        try {

            return new PDO('mysql:host=127.0.0.1;dbname=dadamsframe', 'root', 'Xico2014');

        } catch (PDOException $exception) {

                die($exception->getMessage());
        }
    }
}

$pdo = Connector::make();