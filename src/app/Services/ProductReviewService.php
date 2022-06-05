<?php

namespace App\Services;

use App\Repositories\ProductReviewRepository;

class ProductReviewService
{
    private $productReviewRepository;

    public function __construct(ProductReviewRepository $productReviewRepository)
    {
        $this->productReviewRepository = $productReviewRepository;
    }

    public function getAll($productReviewData)
    {
        return $this->productReviewRepository->getAll($productReviewData);
    }

    public function getProductReviewByProductId($productId)
    {
        return $this->productReviewRepository->getByProductId($productId);
    }

    public function createProductReview($productReviewData)
    {
        return $this->productReviewRepository->create($productReviewData);
    }

}
