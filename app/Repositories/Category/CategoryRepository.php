<?php 

namespace App\Repositories\Category;

use App\Foundation\Repository\Eloquent\BaseRepository;
use App\Models\Category;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface {
    public function __construct(Category $model) {
        parent::__construct($model);
    }

}