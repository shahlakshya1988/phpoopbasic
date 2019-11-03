<?php 
/**
 *  CONSTRUCTER
 *  SPECIAL FUNCTION USED TO INTIAL SOME PROPERTIES OF THE OBJECT WHEN THE OBJECT OF THE 
 *  CLASS IS CREATED
 *  Automatically called when the object of the class is created
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