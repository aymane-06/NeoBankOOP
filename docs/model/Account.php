<?php
abstract class Account {
    protected $AccountNumber;
    protected $TitulaireDuCompte;
    protected $balance;
    protected $email;

    public function __construct($TitulaireDuCompte, $Bal,$email) {
        $this->TitulaireDuCompte = $TitulaireDuCompte;
        $this->balance = $Bal;
        $this->email = $email;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        $this->balance -= $amount;
    }
    public function getAccountNumber() {
        return $this->AccountNumber;
    }

    public function getTitulaireDuCompte() {
        return $this->TitulaireDuCompte;
    }

    public function getBalance() {
        return $this->balance;
    }
    public function getEmail() {
        return $this->email;
    }
}
?>