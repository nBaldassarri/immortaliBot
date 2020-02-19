<?

mysql_connect('localhost', 'immortali', '');
mysql_select_db('my_immortali');

$conf = [
	//Change to your bot token, check the readme to know how to create and get your bot token.
	'bot_token' => '726068709:AAGaYFiFWpmBSGLmVgyhutur_nCcLj0GHok',
	//Set to TRUE if you want the bot only to awnser the trusted ChatIDs
	'only_trusted' => TRUE,
	//Populate the array with the trusted Chat IDs
	'trusted' => [
    '171374027', //io
		'16183036', //jimmisquab
		'596607083', //scarymark
		'-1001380053281', //il clan
    '-385800451' //clan hdemy
		],
	];
