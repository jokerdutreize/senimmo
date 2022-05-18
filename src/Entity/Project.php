<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $projectImg;

    #[ORM\Column(type: 'string', length: 255)]
    private $projectName;

    #[ORM\Column(type: 'text')]
    private $project_desc;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'string', length: 255)]
    private $projectLocation;

    #[ORM\Column(type: 'float')]
    private $projectFunding;

    #[ORM\Column(type: 'integer')]
    private $projectFundingDuration;

    #[ORM\Column(type: 'text', nullable: true)]
    private $project_social_impact;

    #[ORM\Column(type: 'text')]
    private $project_context;

    #[ORM\Column(type: 'text')]
    private $project_presentation;

    #[ORM\Column(type: 'text')]
    private $project_owner_presentation;

    #[ORM\Column(type: 'float', nullable: true)]
    private $project_ip;

    #[ORM\Column(type: 'float', nullable: true)]
    private $project_van;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $project_drci;

    #[ORM\Column(type: 'string', length: 255)]
    private $project_bp;

    #[ORM\Column(type: 'string', length: 255)]
    private $project_owner_status;

    #[ORM\Column(type: 'string', length: 255)]
    private $project_owner_email;

    #[ORM\Column(type: 'string', length: 255)]
    private $project_owner_phone;

    #[ORM\Column(type: 'boolean')]
    private $is_valid;

    #[ORM\ManyToOne(targetEntity: Customers::class, inversedBy: 'projects')]
    #[ORM\JoinColumn(nullable: false)]
    private $customer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProjectImg(): ?string
    {
        return $this->projectImg;
    }

    public function setProjectImg(string $projectImg): self
    {
        $this->projectImg = $projectImg;

        return $this;
    }

    public function getProjectName(): ?string
    {
        return $this->projectName;
    }

    public function setProjectName(string $projectName): self
    {
        $this->projectName = $projectName;

        return $this;
    }

    public function getProjectDesc(): ?string
    {
        return $this->project_desc;
    }

    public function setProjectDesc(string $project_desc): self
    {
        $this->project_desc = $project_desc;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getProjectLocation(): ?string
    {
        return $this->projectLocation;
    }

    public function setProjectLocation(string $projectLocation): self
    {
        $this->projectLocation = $projectLocation;

        return $this;
    }

    public function getProjectFunding(): ?float
    {
        return $this->projectFunding;
    }

    public function setProjectFunding(float $projectFunding): self
    {
        $this->projectFunding = $projectFunding;

        return $this;
    }

    public function getProjectFundingDuration(): ?int
    {
        return $this->projectFundingDuration;
    }

    public function setProjectFundingDuration(int $projectFundingDuration): self
    {
        $this->projectFundingDuration = $projectFundingDuration;

        return $this;
    }

    public function getProjectSocialImpact(): ?string
    {
        return $this->project_social_impact;
    }

    public function setProjectSocialImpact(?string $project_social_impact): self
    {
        $this->project_social_impact = $project_social_impact;

        return $this;
    }

    public function getProjectContext(): ?string
    {
        return $this->project_context;
    }

    public function setProjectContext(string $project_context): self
    {
        $this->project_context = $project_context;

        return $this;
    }

    public function getProjectPresentation(): ?string
    {
        return $this->project_presentation;
    }

    public function setProjectPresentation(string $project_presentation): self
    {
        $this->project_presentation = $project_presentation;

        return $this;
    }

    public function getProjectOwnerPresentation(): ?string
    {
        return $this->project_owner_presentation;
    }

    public function setProjectOwnerPresentation(string $project_owner_presentation): self
    {
        $this->project_owner_presentation = $project_owner_presentation;

        return $this;
    }

    public function getProjectIp(): ?float
    {
        return $this->project_ip;
    }

    public function setProjectIp(?float $project_ip): self
    {
        $this->project_ip = $project_ip;

        return $this;
    }

    public function getProjectVan(): ?float
    {
        return $this->project_van;
    }

    public function setProjectVan(?float $project_van): self
    {
        $this->project_van = $project_van;

        return $this;
    }

    public function getProjectDrci(): ?string
    {
        return $this->project_drci;
    }

    public function setProjectDrci(?string $project_drci): self
    {
        $this->project_drci = $project_drci;

        return $this;
    }

    public function getProjectBp(): ?string
    {
        return $this->project_bp;
    }

    public function setProjectBp(string $project_bp): self
    {
        $this->project_bp = $project_bp;

        return $this;
    }

    public function getProjectOwnerStatus(): ?string
    {
        return $this->project_owner_status;
    }

    public function setProjectOwnerStatus(string $project_owner_status): self
    {
        $this->project_owner_status = $project_owner_status;

        return $this;
    }

    public function getProjectOwnerEmail(): ?string
    {
        return $this->project_owner_email;
    }

    public function setProjectOwnerEmail(string $project_owner_email): self
    {
        $this->project_owner_email = $project_owner_email;

        return $this;
    }

    public function getProjectOwnerPhone(): ?string
    {
        return $this->project_owner_phone;
    }

    public function setProjectOwnerPhone(string $project_owner_phone): self
    {
        $this->project_owner_phone = $project_owner_phone;

        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->is_valid;
    }

    public function setIsValid(bool $is_valid): self
    {
        $this->is_valid = $is_valid;

        return $this;
    }

    public function getCustomer(): ?Customers
    {
        return $this->customer;
    }

    public function setCustomer(?Customers $customer): self
    {
        $this->customer = $customer;

        return $this;
    }
}
