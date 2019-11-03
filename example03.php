<?php 
class BankAccount{
	public $balance = 0;
	public function displayBalance(){
		echo "The Balance is ::: ".$this->balance;
		echo "<br>";
	}
	public function deposit(float $amount){
		$this->balance += $amount;
	}
	public function withDraw(float $amount){
		if($this->balance >= $amount){
			$this->balance -= $amount;
			echo "<br>Successfully Withdraw {$amount}, Now You Balance is {$this->balance} <br>".PHP_EOL;
		}else{
			echo "<br>Not Enough Balance<br> Current Balance is ".$this->balance.PHP_EOL;
		}
	}
}

$account = new BankAccount();
echo "Current Balance Is :: ".$account->displayBalance()."<br>".PHP_EOL;
$account->deposit(500);
echo "Current Balance Is :: ".$account->displayBalance()."<br>".PHP_EOL;
$account->withDraw(600);
echo "Current Balance Is :: ".$account->displayBalance()."<br>".PHP_EOL;
$account->deposit(500);
$account->withDraw(600);
echo "Current Balance Is :: ".$account->displayBalance()."<br>".PHP_EOL;