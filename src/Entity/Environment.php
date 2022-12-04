<?php

namespace App\Entity;

use App\Repository\EnvironmentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EnvironmentRepository::class)]
class Environment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $link = null;

    #[ORM\Column(length: 255)]
    private ?string $ip_address = null;

    #[ORM\Column(nullable: true)]
    private ?int $ssh_port = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ssh_username = null;

    #[ORM\Column(length: 255)]
    private ?string $phpmyadmin_link = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $ip_restriction = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ip_address;
    }

    public function setIpAddress(string $ip_address): self
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    public function getSshPort(): ?int
    {
        return $this->ssh_port;
    }

    public function setSshPort(?int $ssh_port): self
    {
        $this->ssh_port = $ssh_port;

        return $this;
    }

    public function getSshUsername(): ?string
    {
        return $this->ssh_username;
    }

    public function setSshUsername(?string $ssh_username): self
    {
        $this->ssh_username = $ssh_username;

        return $this;
    }

    public function getPhpmyadminLink(): ?string
    {
        return $this->phpmyadmin_link;
    }

    public function setPhpmyadminLink(string $phpmyadmin_link): self
    {
        $this->phpmyadmin_link = $phpmyadmin_link;

        return $this;
    }

    public function getIpRestriction(): ?int
    {
        return $this->ip_restriction;
    }

    public function setIpRestriction(?int $ip_restriction): self
    {
        $this->ip_restriction = $ip_restriction;

        return $this;
    }
}
