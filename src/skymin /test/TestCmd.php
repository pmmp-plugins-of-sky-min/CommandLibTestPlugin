<?php
declare(strict_types = 1);

namespace skymin\test;

use pocketmine\command\CommandSender;

use skymin\CommandLib\{BaseCommand, Parameter, EnumType};

class TestCmd extends BaseCommand{
	
	public function __construct(){
		parent::__construct('test');
		$this->addParameter(Parameter::create('pos', Enumtype::TARGET(), null, true));
		$this->addParameter(Parameter::create('test', 'test', ['t', 'e', 's', 't']));
	}
	
	public function execute(CommandSender $sender, string $commandLabel, array $args) :void{
		return;
	}
	
}
