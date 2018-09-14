<?php
class ContaBanco{
//Atributos
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;
//Construtor
	function __construct(){
		$this-> setSaldo(0);
		$this->setStatus(false);
	}
//Metodos
	public function abrirConta($t){
		$this->setTipo($t);
		$this->setStatus(true);
		if ($t == "CC") {
			$this->setSaldo(50);
		}elseif($t == "CP"){
			$this->setSaldo(150);
		}
	}
	public function fecharConta(){
		if ($this->getSaldo() > 0) {
			echo "Conta Com dinheiro!";
		}elseif($this->getSaldo() < 0 ){
			echo "Conta em Débito";
		}else{
			$this->setStatus(false);
		}
	}
	public function depositar($v){
		if ($this->getStatus() == true) {
			$this->setSaldo($this->getSaldo() + $v);
		}else{
			echo "Impossível depositar!";
		}
	}
	public function sacar($v){
		if ($this->getStatus() == true) {
			if ($this->getSaldo() > $v) {
				$this ->setSaldo($this->getSaldo() + $v);
			}else{
				echo "Saldo insuficiente para saque.";
			}
		}else{
			echo "Conta inativa";
		}
	}
	public function pagarMensal(){
		if ($this->getTipo() == "CC") {
			$v = 12;
		}elseif ($this->getTipo() == "CP") {
			$v = 20;
		}
		if ($this->getStatus()) {
			if ($this->getSaldo() > $v) {
				$this->setSaldo(getSaldo() - $v);
			}else{
				echo "saldo insuficiente";
			}
		}else{
			echo "Conta inexistente";
		}
	}
//Metodos Especiais
	public function getNumConta(){
		return $this->numConta;
	}
	public function setNumConta($n){
		$this->numConta = $n;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($t){
		$this->tipo = $t;
	}
	public function getDono(){
		return $this->Dono;
	}
	public function setDono($d){
		$this->dono = $d;
	}
	public function getSaldo(){
		return $this->saldo;
	}
	public function setSaldo($s){
		$this->saldo = $s;
	}
	public function getStatus(){
		return $this->status;
	}
	public function setStatus($st){
		$this->status = $st;
	}

}
?>