<?php 

class Cadastro {

	// Atributos
	private $nome;
	private $email;
	private $senha;

	// GETs e SETs
	// Nome
	public function getNome():string {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
	}
	// Email
	public function getEmail():string {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	// Senha
	public function getSenha():string {
		return $this->senha;
	}
	public function setSenha($senha) {
		$this->senha = $senha;
	}

	// Metodos
	public function __toString() {
		return json_encode(array(
			'nome' => $this->getNome(),
			'email' => $this->getEmail(),
			'senha' => $this->getSenha()
			));
	}


} // Fim da Class

 ?>