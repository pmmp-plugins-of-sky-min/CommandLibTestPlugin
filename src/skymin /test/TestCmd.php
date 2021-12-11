<?php
declare(strict_types = 1);

namespace skymin\test;

use pocketmine\command\CommandSender;

use skymin\CommandLib\command\{BaseCommand, EnumFactory, EnumType};

class TestCmd extends BaseCommand{
	
	public function __construct(){
		parent::__construct('test');
		$this->addParameter(EnumFactory::create('pos', Enumtype::TARGET(), null, true));
		$this->addParameter(EnumFactory::create('test', 'test', ['t', 'e', 's', 't']));
	}
	
	public function execute(CommandSender $sender, string $commandLabel, array $args) :void{
		return;
	}
	
}
