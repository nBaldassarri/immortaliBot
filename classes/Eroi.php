<?php

class Eroi extends Bot
{
	public function __construct($conf, $chat_id)
	{
		parent::__construct($conf, $chat_id);
	}

	public function eroi()
	{
		$message = "Devi inserire il nome di un eroe come parametro per vedere le statistiche.";
		//$message .= "<b>/help server</b>" . chr(10) . "  - List the server related commands";

		return $this->send($message);
	}
  public function arciere()
	{
		$message = "https://smashingfour.fandom.com/wiki/Archer";
		return $this->send($message);
	}
  public function barbaro()
	{
		$message = "https://smashingfour.fandom.com/wiki/Barbarian";
		return $this->send($message);
	}
  public function furioso()
	{
		$message = "https://smashingfour.fandom.com/wiki/Berserker";
		return $this->send($message);
	}
  public function bombarolo()
	{
		$message = "https://smashingfour.fandom.com/wiki/Bomber";
		return $this->send($message);
	}
  public function volpe_ghiacciata()
	{
		$message = "https://smashingfour.fandom.com/wiki/Frost_Fox";
		return $this->send($message);
	}
  public function goblin()
	{
		$message = "https://smashingfour.fandom.com/wiki/Goblin";
		return $this->send($message);
	}
	public function golem()
	{
		$message = "https://smashingfour.fandom.com/wiki/Golem";
		return $this->send($message);
	}
  public function cavaliere()
	{
		$message = "https://smashingfour.fandom.com/wiki/Knight";
		return $this->send($message);
	}
  public function naga()
	{
		$message = "https://smashingfour.fandom.com/wiki/Naga";
		return $this->send($message);
	}
  public function pirata()
	{
		$message = "https://smashingfour.fandom.com/wiki/Pirate";
		return $this->send($message);
	}
  public function satiro()
	{
		$message = "https://smashingfour.fandom.com/wiki/Satyr";
		return $this->send($message);
	}
  public function scheletro()
	{
		$message = "https://smashingfour.fandom.com/wiki/Skeleton";
		return $this->send($message);
	}
  public function percussore()
	{
		$message = "https://smashingfour.fandom.com/wiki/Striker";
		return $this->send($message);
	}
  public function treant()
	{
		$message = "https://smashingfour.fandom.com/wiki/Treant";
		return $this->send($message);
	}
  public function yeti()
	{
		$message = "https://smashingfour.fandom.com/wiki/Yeti";
		return $this->send($message);
	}

  //LISTA RARE
  public function arpia()
	{
		$message = "https://smashingfour.fandom.com/wiki/Banshee";
		return $this->send($message);
	}
  public function assassino()
	{
		$message = "https://smashingfour.fandom.com/wiki/Assassin";
		return $this->send($message);
	}
  public function fabbro()
	{
		$message = "https://smashingfour.fandom.com/wiki/Blacksmith";
		return $this->send($message);
	}
  public function cultista()
	{
		$message = "https://smashingfour.fandom.com/wiki/Cultist";
		return $this->send($message);
	}
  public function regina_dei_ghiacci()
	{
		$message = "https://smashingfour.fandom.com/wiki/Ice_Queen";
		return $this->send($message);
	}
  public function kong()
	{
		$message = "https://smashingfour.fandom.com/wiki/Kong";
		return $this->send($message);
	}
  public function orco()
	{
		$message = "https://smashingfour.fandom.com/wiki/Orc";
		return $this->send($message);
	}
  public function robot()
	{
		$message = "https://smashingfour.fandom.com/wiki/Robot";
		return $this->send($message);
	}
  public function stregone()
	{
		$message = "https://smashingfour.fandom.com/wiki/Wizard";
		return $this->send($message);
	}
  public function gigante()
	{
		$message = "https://smashingfour.fandom.com/wiki/Giant";
		return $this->send($message);
	}
  public function maga()
	{
		$message = "https://smashingfour.fandom.com/wiki/Sorceress";
		return $this->send($message);
	}
  public function giaguaro()
	{
		$message = "https://smashingfour.fandom.com/wiki/Jaguar";
		return $this->send($message);
	}
  public function paladino()
	{
		$message = "https://smashingfour.fandom.com/wiki/Paladin";
		return $this->send($message);
	}
  public function zombie()
	{
		$message = "https://smashingfour.fandom.com/wiki/Zombie";
		return $this->send($message);
	}
  public function incantatrice()
	{
		$message = "https://smashingfour.fandom.com/wiki/Enchantress";
		return $this->send($message);
	}
  public function vampiro()
	{
		$message = "https://smashingfour.fandom.com/wiki/Vampire";
		return $this->send($message);
	}
  public function sacerdote()
	{
		$message = "https://smashingfour.fandom.com/wiki/Priest";
		return $this->send($message);
	}
  public function druido()
	{
		$message = "https://smashingfour.fandom.com/wiki/Druid";
		return $this->send($message);
	}
  public function genio()
	{
		$message = "https://smashingfour.fandom.com/wiki/Genie";
		return $this->send($message);
	}
  public function sentinella()
	{
		$message = "https://smashingfour.fandom.com/wiki/Sentinel";
		return $this->send($message);
	}
  public function sciamano()
	{
		$message = "https://smashingfour.fandom.com/wiki/Shaman";
		return $this->send($message);
	}
  public function draghetto()
	{
		$message = "https://smashingfour.fandom.com/wiki/Drakeling";
		return $this->send($message);
	}
  public function lanciarazzi()
	{
		$message = "https://smashingfour.fandom.com/wiki/Rocketeer";
		return $this->send($message);
	}
  public function furia()
	{
		$message = "https://smashingfour.fandom.com/wiki/Wraith";
		return $this->send($message);
	}
  public function guerriero()
	{
		$message = "https://smashingfour.fandom.com/wiki/Warrior";
		return $this->send($message);
	}
  public function idolo_tonante()
	{
		$message = "https://smashingfour.fandom.com/wiki/Thunder_Idol";
		return $this->send($message);
	}
    public function armadillo()
	{
		$message = "https://smashingfour.fandom.com/wiki/Armadillo";
		return $this->send($message);
	}
public function burattinaio()
	{
		$message = "https://smashingfour.fandom.com/wiki/Puppet_Master";
		return $this->send($message);
	}

}