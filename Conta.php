<?php
class ContaBanco{
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	public function abrirConta(){}
	public function fecharConta(){}
	public function depositar(){}
	public function sacar(){}
	public function pagarMensal(){}

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
	public function setNumConta($st){
		$this->status = $st;
	}

}
?>