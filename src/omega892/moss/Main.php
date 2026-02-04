<?php

namespace omega892\moss;

use Nexly\Events\Impl\BlockRegistryEvent;
use Nexly\Events\NexlyEventManager;
use omega892\moss\block\MossBlock;
use pocketmine\block\BlockBreakInfo;
use pocketmine\block\BlockIdentifier;
use pocketmine\block\BlockTypeInfo;
use pocketmine\item\ToolTier;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void
    {

    }

    public function onLoad(): void
    {
        NexlyEventManager::getInstance()->listen(BlockRegistryEvent::class, static function (BlockRegistryEvent $ev): void {$ev->register("minecraft:moss_block", static fn(int $id) => new MossBlock(new BlockIdentifier($id), "Moss Block", new BlockTypeInfo(BlockBreakInfo::pickaxe(5.0, ToolTier::IRON, 30.0))));
        });
    }
}