<?php 
/**
 *  Destructure is the method similar to constructer which is automatically called
 *  after the script end. to manually call it use unset(object of the class)
 *  this is basically used to releasing the occupied resources 
 *  USE FOR CLOSING DATABASE  OR OPEN FILE 
 */
class BankAccount{
	public $balance = 0;
	public function __construct($amount = 0){
		//echo PHP_EOL."Constructer is Called".PHP_EOL;
		if($amount<0){
			$amount = 0;
		}
		$this->balance = $amount; // when the object is created, this amount is assigned to balance
	}
	public function __destruct(){
		echo PHP_EOL."Destructer is called".PHP_EOL;
	}
	public function displayBalance(){
		echo PHP_EOL."Current Balance is {$this->balance}".PHP_EOL;
	}
	public function deposit($amount = 0){
		$this->balance += $amount;
		echo "{$this->amount} Successfully Deposited Into Your Account, Balance is {$this->balance}".PHP_EOL;
	}
	public function withdraw($amount = 0){
		if($this->balance < $amount){
			echo PHP_EOL."Not Sufficient Balance, {$amount} Can't Be Withdrawn".PHP_EOL;
			return false;
		}
		$this->balance -= $amount;
		echo PHP_EOL."{$amount}, Successfully Withdrawn, Now Your Balance is {$this->balance}".PHP_EOLD;
	}
} // class BankAccount

$account = new BankAccount();
$account->displayBalance();
$account = new BankAccount(5235);
$account->displayBalance();
unset($account);

$account2 = new BankAccount(42);
$account2->displayBalance();
unset($account2);