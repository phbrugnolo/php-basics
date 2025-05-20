<?php 

namespace App\Controller;

use App\Model\Customer;
use App\Dal\CustomerDao;
use App\Util\Functions as Util;

abstract class CustomerController {
    public static ?string $message = null;

    public static function create() : void 
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
            [$name, $surname, $ddd, $phone] = array_map(
                [Util::class, "sanitizeText"], array_values($_POST)
            );
        }

        try {
            $customer = Customer::createCustomer(null, $name, $surname, (int)$ddd, (int)$phone);
            $id = CustomerDao::create($customer);
            header("Location: ?page=create");
        } catch (\PDOException $e) {
            self::$message = $e->getMessage();
        }
    }
}