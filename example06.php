<?php 
/**
 *  ACCESS CONTROLLERS 
 *  -> public keyword means the properties and functions can be accessed from anywhere, from class 
 *  or from any where in the script 
 *  -> protected keyword means the properties can be accessed only from the class and other class 
 *  which extends this class which has protected members
 *  ->private keyword means the property will only be accessible to the members on this class only
 *  it can't be accessed from other class or objects
 */
class BankAccount{
	private $balance = 0;
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