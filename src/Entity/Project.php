<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastpass_folder = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link_mock_ups = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $managed_server = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLastpassFolder(): ?string
    {
        return $this->lastpass_folder;
    }

    public function setLastpassFolder(?string $lastpass_folder): self
    {
        $this->lastpass_folder = $lastpass_folder;

        return $this;
    }

    public function getLinkMockUps(): ?string
    {
        return $this->link_mock_ups;
    }

    public function setLinkMockUps(?string $link_mock_ups): self
    {
        $this->link_mock_ups = $link_mock_ups;

        return $this;
    }

    public function getManagedServer(): ?int
    {
        return $this->managed_server;
    }

    public function setManagedServer(?int $managed_server): self
    {
        $this->managed_server = $managed_server;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }
}
