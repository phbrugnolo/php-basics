<?php 

namespace App\Model;

class Customer {
    private readonly ?int $id;
    private int $ddd, $phone;
    private string $name, $surname;

    private function __construct(?int $id, string $name, string $surname, int $ddd, int $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->ddd = $ddd;
        $this->phone = $phone;
    }

    public static function createCustomer(?int $id, ?string $name, ?string $surname, int $ddd, int $phone): static
    {
        if ($name === null) {
            throw new \InvalidArgumentException("Nome do cliente é obrigatório", 1);
        }

        return new static($id, $name, $surname, $ddd, $phone);
    }

    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getSurname(): string { return $this->surname; }
    public function getDdd(): int { return $this->ddd; }
    public function getPhone(): int { return $this->phone; }

    public function setName(string $name): void { $this->name = $name; }
    public function setSurname(string $surname): void { $this->surname = $surname; }
    public function setDdd(int $ddd): void { $this->ddd = $ddd; }
    public function setPhone(int $phone): void { $this->phone = $phone; }
}