<?php

class Eroi extends Bot
{

    private $method;

    public function __construct($method, $conf, $chat_id)
	{
        parent::__construct($conf, $chat_id);
        if($method != '')
            $this->method = $method;
    }

	public function eroi()
	{
	    if(!isset($this->method)) {
            $message = "Devi inserire il nome di un eroe come parametro per vedere le statistiche.";
            //$message .= "<b>/help server</b>" . chr(10) . "  - List the server related commands";
        } else {
            $query= mysql_query("SELECT * FROM `eroi` ORDER BY `nomeIta`");
            while ($riga = mysql_fetch_assoc($query)) {
                if($riga['nomeIta'] == $this->method) {
                    $message = "https://smashingfour.fandom.com/wiki/";
                    $message .= $riga['nomeEng'];
                }
            }
        }


		return $this->send($message);
	}
}