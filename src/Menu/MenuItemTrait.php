<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Menu;

use EasyCorp\Bundle\EasyAdminBundle\Dto\MenuItemDto;

trait MenuItemTrait
{
    /** @var MenuItemDto */
    private $dto;

    public function setCssClass(string $cssClass): self
    {
        $this->dto->setCssClass($cssClass);

        return $this;
    }

    public function setPermission(string $permission): self
    {
        $this->dto->setPermission($permission);

        return $this;
    }

    /**
     * If not defined, menu items use the same domain as configured for the entire dashboard.
     */
    public function setTranslationDomain(string $domain): self
    {
        $this->dto->setTranslationDomain($domain);

        return $this;
    }

    public function setTranslationParameters(array $parameters): self
    {
        $this->dto->setTranslationParameters($parameters);

        return $this;
    }

    public function setLinkRel(string $rel): self
    {
        $this->dto->setLinkRel($rel);

        return $this;
    }

    public function setLinkTarget(string $target): self
    {
        $this->dto->setLinkTarget($target);

        return $this;
    }

    public function getAsDto(): MenuItemDto
    {
        return $this->dto;
    }
}
