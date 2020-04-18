<?php

declare(strict_types=1);

namespace pocketmine\event\player;

use pocketmine\event\Cancellable;
use pocketmine\Player;

class PlayerToggleSwimEvent extends PlayerEvent implements Cancellable{

	protected $isSwimming;

	public function __construct(Player $player, bool $isSwimming){
		$this->player = $player;
		$this->isSwimming = $isSwimming;
	}

	public function isSwimming() : bool{
                return $this->isSwimming;
	}

}
