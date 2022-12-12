<?php

namespace App\Entity;

use App\Repository\SettingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SettingsRepository::class)]
class Settings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex('^(.+)\/([^\/]+)$')]
    #[Assert\Length(max: 255)]
    private ?string $mobile_logo = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex('^(.+)\/([^\/]+)$')]
    #[Assert\Length(max: 255)]
    private ?string $desktop_logo = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex('^(.+)\/([^\/]+)$')]
    #[Assert\Length(max: 255)]
    private ?string $favicon = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex('^[a-zA-Z0-9 _.,?!\']+$', message: 'regex.content')]
    #[Assert\Length(max: 255)]
    private ?string $copyright = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updated_at = null;

    public function __toString(): string
    {
        return $this->mobile_logo;
    }

    public function __construct()
    {
        $this->created_at = new \DateTime();
        $this->updated_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMobileLogo(): ?string
    {
        return $this->mobile_logo;
    }

    public function setMobileLogo(string $mobile_logo): self
    {
        $this->mobile_logo = $mobile_logo;

        return $this;
    }

    public function getFavicon(): ?string
    {
        return $this->favicon;
    }

    public function setFavicon(string $favicon): self
    {
        $this->favicon = $favicon;

        return $this;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(string $copyright): self
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getDesktopLogo(): ?string
    {
        return $this->desktop_logo;
    }

    public function setDesktopLogo(string $desktop_logo): self
    {
        $this->desktop_logo = $desktop_logo;

        return $this;
    }
}
