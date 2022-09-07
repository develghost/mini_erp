<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\TransactionController;
use App\Repository\TransactionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransactionRepository::class)]
#[ApiResource(
    collectionOperations: [
        'get' => ['method' => 'get'],
    ],
    itemOperations: [
        'put_transaction' => [
            'method' => 'PUT',
            'path' => '/transaction_action',
            'controller' => TransactionController::class
        ],
    ],
)]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Company::class, inversedBy: 'transactions')]
    private $companyId;

    #[ORM\ManyToOne(targetEntity: Client::class, inversedBy: 'transactions')]
    private $clientId;

    #[ORM\ManyToOne(targetEntity: Provider::class, inversedBy: 'transactions')]
    private $providerId;

    #[ORM\ManyToOne(targetEntity: Product::class, inversedBy: 'transactions')]
    private $productId;

    #[ORM\Column(type: 'integer')]
    private $numberOfProducts;

    #[ORM\ManyToOne(targetEntity: Employee::class, inversedBy: 'transactions')]
    private $employeeId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyId(): ?Company
    {
        return $this->companyId;
    }

    public function setCompanyId(?Company $companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    public function getClientId(): ?Client
    {
        return $this->clientId;
    }

    public function setClientId(?Client $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getProviderId(): ?Provider
    {
        return $this->providerId;
    }

    public function setProviderId(?Provider $providerId): self
    {
        $this->providerId = $providerId;

        return $this;
    }

    public function getProductId(): ?Product
    {
        return $this->productId;
    }

    public function setProductId(?Product $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getNumberOfProducts(): ?int
    {
        return $this->numberOfProducts;
    }

    public function setNumberOfProducts(int $numberOfProducts): self
    {
        $this->numberOfProducts = $numberOfProducts;

        return $this;
    }

    public function getEmployeeId(): ?Employee
    {
        return $this->employeeId;
    }

    public function setEmployeeId(?Employee $employeeId): self
    {
        $this->employeeId = $employeeId;

        return $this;
    }
}
