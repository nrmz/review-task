<?php

namespace App\Repositories;

use App\Models\ProductReview;

class ProductReviewRepository
{
    private $model;

    public function __construct(ProductReview $productReview)
    {
        $this->model = $productReview;
    }

    public function getAll($showDataOptions)
    {
        $productReviews = $this->model->query();
        $sort_column = $showDataOptions['sort_column'] ?? 'created_at';
        $productReviews->orderBy($sort_column, isset($showDataOptions['is_sort_dir_desc']) && $showDataOptions['is_sort_dir_desc']=='true' ? 'desc' : 'asc');

        return $productReviews->paginate($showDataOptions['per_page'] ?? 10);
    }

    public function getByProductId($productId)
    {
        return $this->model->where('product_id', $productId)->firstOrFail();
    }

    public function create($productReviewData)
    {
        return $this->model->updateOrCreate(
            ['product_id' => $productReviewData['product_id']],
            $productReviewData
        );
    }


}
