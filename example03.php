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
	public function withDraw(float $abount){
		if($this->balance >= $amount){
			$this->balance -= $amount;
		}else{
			echo "<br>Not Enough Balance<br>";
		}
	}
}

$account = new BankAccount();
echo "Current Balance Is :: ".$account->displayBalance()."<br>";
$account->deposit(500);
echo "Current Balance Is :: ".$account->displayBalance()."<br>";