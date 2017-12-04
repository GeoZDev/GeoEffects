<?php

namespace GeoEffects;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\entity\Effect;

class Main extends PluginBase{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info("GeoEffects enabled!");
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info("GeoEffects disabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			
			case "cinventory":
				if($sender instanceof Player){
					$sender->getInventory()->clearAll();
				}
			break;
			
			case "jump":
				if($sender instanceof Player){
					$jump = Effect::getEffect(8);
					$jump->setVisible(true);
					$jump->setAmplifier(1);
					$jump->setDuration(100000);
					$sender->addEffect($jump);
				}
			break;
			

		}
		return true;
	}

}
