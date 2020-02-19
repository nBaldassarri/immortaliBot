<?php

class Help extends Bot
{
	public function __construct($conf, $chat_id)
	{
		parent::__construct($conf, $chat_id);
	}

	public function help()
	{
		$message =  "<b>Aiuti Generali</b>" . chr(10) . chr(10);
        $message .= "<b>/eroi NomeEroe</b>" . chr(10) . "  - Link diretto alle statistiche dell eroe nella wiki.\n\n";
        $message .= "<b>/benvenuto</b>" . chr(10) . "  - Messaggio standard di benvenuto all'entrata di un nuovo membro.";
        $message .= "<b>/immortali</b>" . chr(10) . "  - Lista completa degli utenti del clan.";

		return $this->send($message);
	}

	public function fizban()
	{
		$message = "<b>Comunicazione di servizio</b>" . chr(10) . chr(10);
		$message .= "Fizban, Dio supremo, non spammare o stressare il Sommo Programmatore.";
		//$message .= "<b>/help server</b>" . chr(10) . "  - List the server related commands";
		return $this->send($message);
	}

    public function benvenuto()
	{
		$message = "<b>Benvenuto IMMORTALE nel nostro gruppo telegram! Spamma come se non arrivasse domani!!!</b>";
		return $this->send($message);
	}

	public function ciro()
	{
		$message = "Ué guagliò, bell’ st’orolog.";
		return $this->send($message);
	}

	public function maledetto()
	{
		$message = "Astemiotto, vedi che ti si arrugginisce lo stomaco!!!";
		return $this->send($message);
	}

    public function aggiornamento()
	{
		$message = "Fuggite sciocchi!!! La Geewa ha fatto un nuovo aggiornamento!!!";
		return $this->send($message);
	}

    public function manutenzione()
	{
		$message = "Avvertiamo gli spettabili player che ci sarà un'altra piccola manutenzione di soli infiniti minuti...";
		return $this->send($message);
	}

    public function bestemmia()
	{
		$message = "Lo so cosa è successo... Gioca e non bestemmiare!!! Dio ti sente la Geewa no!!!";
		return $this->send($message);
	}

	public function immortali()
	{
		$message = "<b>Lista utenti del Clan</b>" . chr(10) . chr(10);
		$NameVar = mysql_query("SELECT * FROM `utenti` ORDER BY `nome`");
		$i = 1;
		while ($riga = mysql_fetch_assoc($NameVar))
		{
			$message .= $i;
			$message .= ") ";
			$message .= $riga['nome'];
			$message .= " | ";
			$message .= $riga['nickname'];

			$message .= "\n";
			$message .= "---------------------------";
			$message .= "\n";
			$i++;
		}

		return $this->send($message);
	}
}
