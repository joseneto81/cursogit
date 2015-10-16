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
		return $this->$propetry;
	}

	public function getNome()
        {
        	return $this->nome;
        }

	public function getIdade()
	{
	return round((date("Ymd")-str_replace("-","",$this->nasc))/10000)." anos";
	}
}

$pessoa = new Pessoa();
$pessoa->set("nome","Joao");
print $pessoa->get("nome")."\n";
$pessoa->set("nasc","1981-01-01");
print $pessoa->getIdade()."\n";
?>
