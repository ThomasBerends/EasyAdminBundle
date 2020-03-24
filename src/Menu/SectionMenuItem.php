<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Menu;

use EasyCorp\Bundle\EasyAdminBundle\Contracts\Menu\MenuItemInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\MenuItemDto;

/**
 * @internal Instead of this, use EasyCorp\Bundle\EasyAdminBundle\Configuration\MenuItem::section()
 */
final class SectionMenuItem implements MenuItemInterface
{
    use MenuItemTrait {
        setLinkRel as private;
        setLinkTarget as private;
    }

    public function __construct(string $label, ?string $icon)
    {
        $this->dto = new MenuItemDto();

        $this->dto->setType(MenuItemDto::TYPE_SECTION);
        $this->dto->setLabel($label);
        $this->dto->setIcon($icon);
    }
}
