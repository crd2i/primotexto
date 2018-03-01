<?php
namespace Primotexto;

require_once 'primotexto-api-php/baseManager.class.php';

class Primotexto extends SMS
{
	public $apiKey;

	public function __construct() 
	{		

	}	

	public function setApiKey($apiKey)
	{
		$this->apiKey =	$apiKey;
	}

	public function send()
	{		
		authenticationManager::setApiKey($this->apiKey);

		return (array) json_decode(messagesManager::messagesSend($this));
	}
}