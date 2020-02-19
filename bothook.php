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

	'eroi'=>[
		'arciere',
		'barbaro',
		'furioso',
		'bombarolo',
		'volpe_ghiacciata',
		'goblin',
		'golem',
		'cavaliere',
		'naga',
		'pirata',
		'satiro',
		'scheletro',
		'percussore',
		'treant',
		'yeti',
		'arpia',
		'assassino',
		'fabbro',
		'cultista',
		'regina_dei_ghiacci',
		'kong',
		'orco',
		'robot',
		'stregone',
		'gigante',
		'maga',
		'giaguaro',
		'paladino',
		'zombie',
		'incantatrice',
		'vampiro',
		'sacerdote',
		'druido',
		'genio',
		'sentinella',
		'sciamano',
		'draghetto',
		'lanciarazzi',
		'furia',
    'guerriero',
    'idolo_tonante',
    'armadillo',
    'burattinaio',
    ],
];

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
	case 'help':
		$class = 'Help';
		break;
	case 'eroi':
		$class = 'Eroi';
		break;
	case 'fizban':
		$class = 'Help';
		break;
  case 'benvenuto':
		$class = 'Help';
		break;
	case 'ciro':
		$class = 'Help';
		break;
	case 'immortali':
		$class = 'Help';
		break;
  case 'maledetto':
		$class = 'Help';
		break;
  case 'aggiornamento':
		$class = 'Help';
		break;
    case 'manutenzione':
		$class = 'Help';
		break;
    case 'bestemmia':
		$class = 'Help';
		break;
	default:
		$class = 'Bot';
}

$hook = new $class($conf, $chat_id);

if (!$hook->isTrusted()) {
	$hook->unauthorized();
	die();
}

if (in_array($command, $commands)) {
	if (isset($arguments[$command]) && in_array($method, $arguments[$command])) {
		$hook->{$method}($args);
		die();
	} else if (in_array($command, $commands)) {
		$hook->{$command}($args);
	}
}
