<?php

include_once('conf.php');

spl_autoload_register(function($class) {
	include_once 'classes/' . $class . '.php';
});

$content = file_get_contents("php://input");
$update = json_decode($content, true);
$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

// Available bot commands
$commands = [
	// General Commands
	'help',

    'benvenuto',

	'immortali',

	'fizban',

    'ciro',

	'maledetto',

    'aggiornamento',

    'manutenzione',

    'bestemmia',

	'eroi'

];

$arguments = [
	// Server
	'help'=>[
	],
];

$query= mysql_query("SELECT * FROM `eroi` ORDER BY `nomeIta`");
while ($riga = mysql_fetch_assoc($query)) {
    $listaEroi[] = $riga['nomeIta'];
}
$arguments['eroi'] = $listaEroi;

// Aliases for commands
$alias = [
	/*
	'uptime'=>'server',
	'uname'=>'server',
	'who'=>'server',
	'disk'=>'server',
	*/
];

$args = explode(' ', trim($message));

$command = ltrim(array_shift($args), '/');
$method = '';
if (isset($args[0]) && in_array($args[0], $arguments[$command])) {
	$method = array_shift($args);
}
else {
	if (in_array($command, array_keys($alias))) {
		$method = $command;
		$command = $alias[$command];
	}
}


switch ($command) {
    case 'fizban':
    case 'benvenuto':
    case 'ciro':
    case 'immortali':
    case 'maledetto':
    case 'aggiornamento':
    case 'manutenzione':
    case 'bestemmia':
    case 'help':
		$class = 'Help';
		break;
	case 'eroi':
		$class = 'Eroi';
		break;
    default:
		$class = 'Bot';
}

$hook = new $class($method, $conf, $chat_id);

if (!$hook->isTrusted()) {
	$hook->unauthorized();
	die();
}

if($command === 'eroi')
    $hook->$command();
else
{
    if (in_array($command, $commands)) {
        if (isset($arguments[$command]) && in_array($method, $arguments[$command])) {
            $hook->{$method}($args);
            die();
        } else if (in_array($command, $commands)) {
            $hook->{$command}($args);
        }
}
}



