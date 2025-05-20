<?php 

namespace App\Dal;

use App\Dal\Connection;
use App\Model\Customer;

abstract class CustomerDao {
    public static function create(Customer $customer): int
    {
        try {
            $pdo  = Connection::getConn();
            $stmt = $pdo->prepare("INSERT INTO customers (name, surname, ddd, phone) VALUES (?,?,?,?)");
            $stmt->execute([
                $customer->getName(),
                $customer->getSurname(),
                $customer->getDdd(),
                $customer->getPhone(),
            ]);
            return (int) $pdo->lastInsertId();
        } catch (\PDOException $e) {
            throw new \PDOException("Erro ao inserir na DB " . $e->getMessage());
        }
    }
}