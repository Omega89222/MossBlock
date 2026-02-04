<?php

namespace omega892\moss\block;

use Nexly\Mappings\BlockMappings;
use pocketmine\block\Block;
use pocketmine\block\VanillaBlocks;
use pocketmine\item\Item;
use pocketmine\item\ItemIdentifier as IID;
use pocketmine\item\ItemTypeIds;

class MossBlock extends Block {

    public function asItem(): Item
    {
        return new class(new IID(ItemTypeIds::fromBlockTypeId($this->getTypeId())), "Moss block") extends Item {
            /**
             * @param int|null $clickedFace
             * @return Block
             */
            public function getBlock(?int $clickedFace = null): Block
            {
                return BlockMappings::getInstance()->getMapping("minecraft:moss_block")?->getBlock() ?? VanillaBlocks::AIR();
            }
        };
    }
}