<?php
class Pessoa
{
  private $nome;
  private $nasc;
  private $tel;

	public function Pessoa()
	{
	}

	public function set($propetry, $value)
	{
		$this->$propetry = $value;
	}
	
	public function get($propetry)
	{
		return $propetry;
	}
}

$pessoa = new Pessoa();
$pessoa->set("nome","Joao");
print $pessoa->get("Nome");
?>
