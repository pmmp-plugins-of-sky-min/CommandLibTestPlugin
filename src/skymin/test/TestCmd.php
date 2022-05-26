<?php
declare(strict_types = 1);

namespace skymin\test;

use pocketmine\command\CommandSender;

use skymin\CommandLib\{BaseCommand, Parameter, EnumType};

class TestCmd extends BaseCommand{
	
	public function __construct(){
        parent::__construct('example');
        $this->addParameter(Parameter::create('e', 'args1', ['e']), 0);
        $this->addOverload([Parameter::create('pos', 'args2', ['pos']), Parameter::create('position', EnumType::INT_POSITION())]);
    }
	
	public function execute(CommandSender $sender, string $commandLabel, array $args) :void{
		return;
	}
	
}
