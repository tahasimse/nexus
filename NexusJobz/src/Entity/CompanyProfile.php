<?php

namespace App\Entity;

use App\Repository\CompanyProfileRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyProfileRepository::class)]
class CompanyProfile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'companyProfile', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $userCompany = null;

    #[ORM\Column(length: 255)]
    private ?string $companyName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $location = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    /**
     * @var Collection<int, JobPost>
     */
    #[ORM\OneToMany(targetEntity: JobPost::class, mappedBy: 'companyProfile', orphanRemoval: true)]
    private Collection $jobPosts;

    public function __construct()
    {
        $this->jobPosts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserCompany(): ?User
    {
        return $this->userCompany;
    }

    public function setUserCompany(User $userCompany): static
    {
        $this->userCompany = $userCompany;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, JobPost>
     */
    public function getJobPosts(): Collection
    {
        return $this->jobPosts;
    }

    public function addJobPost(JobPost $jobPost): static
    {
        if (!$this->jobPosts->contains($jobPost)) {
            $this->jobPosts->add($jobPost);
            $jobPost->setCompanyProfile($this);
        }

        return $this;
    }

    public function removeJobPost(JobPost $jobPost): static
    {
        if ($this->jobPosts->removeElement($jobPost)) {
            // set the owning side to null (unless already changed)
            if ($jobPost->getCompanyProfile() === $this) {
                $jobPost->setCompanyProfile(null);
            }
        }

        return $this;
    }
}
