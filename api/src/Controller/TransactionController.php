<?php

namespace App\Controller;

use App\Service\TransactionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class TransactionController extends AbstractController
{
    private $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    public function __invoke(Request $request)
    {
        $companyId = $request->request->get('companyId');
        $clientId = $request->request->get('clientId');
        $providerId = $request->request->get('providerId');
        $productId = $request->request->get('productId');
        $numberOfProducts = $request->request->get('numberOfProducts');
        $employeeId = $request->request->get('employeeId');
        
        $this->transactionService->transaction($companyId, $clientId, $providerId, $productId, $numberOfProducts, $employeeId);

        return true;
    }
}
