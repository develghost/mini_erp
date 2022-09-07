<?php

namespace App\Service;

use App\Entity\Transaction;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProductRepository;


class TransactionService
{

  private $entityManager;
  private $productRepository;

  public function __construct(EntityManagerInterface $entityManager, ProductRepository $productRepository)
  {
    $this->entityManager = $entityManager;
    $this->productRepository = $productRepository;
  }

  public function transaction($companyId, $clientId, $providerId, $productId, $numberOfProducts, $employeeId)
  {
    try {

      $product = $this->productRepository->find($productId);
      $numberOfStockProducts = $product->getStock();

      if(!$this->verifyIfStockEnough($numberOfStockProducts, $numberOfProducts)) {
        return false;
      }  

      $transaction = new Transaction();
      $transaction->setCompanyId($companyId);
      $transaction->setClientId($clientId);
      $transaction->setProviderId($providerId);
      $transaction->setProductId($productId);
      $transaction->setNumberOfProducts($numberOfProducts);
      $transaction->setEmployeeId($employeeId);
      $this->entityManager->persist($transaction);

      $product->setStock($numberOfStockProducts - $numberOfProducts);
      $this->entityManager->persist($product);
      $this->entityManager->flush();

      return true;
    } catch (\Exception $e) {
      print $e->getMessage();
    }

    return false;
  }

  public function verifyIfStockEnough($numberOfStockProducts, $numberOfProducts)
  {

    if ($numberOfStockProducts < $numberOfProducts) {
      return false;
    }

    return true;
  }
}
