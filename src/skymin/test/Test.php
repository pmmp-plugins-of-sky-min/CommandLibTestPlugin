<?php
declare(strict_types = 1);

namespace skymin\test;

use pocketmine\plugin\PluginBase;

use skymin\CommandLib\CmdManager;

final class Test extends PluginBase{
	
	public function onEnable() :void{
		CmdManager::register($this);
		$this->getServer()->getCommandMap()->register('test', new TestCmd());
	}
	
}