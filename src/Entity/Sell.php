<?php

namespace App\Entity;

use App\Repository\SellRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SellRepository::class)]
class Sell
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $shop_item = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShopItem(): ?string
    {
        return $this->shop_item;
    }

    public function setShopItem(string $shop_item): static
    {
        $this->shop_item = $shop_item;

        return $this;
    }
}
