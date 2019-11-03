<?php 
class BankAccount{
	public $balance = 0;
	public function diplayBalance(){
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