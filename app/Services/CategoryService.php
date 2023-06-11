<?php 

namespace App\Services;

use App\Repositories\Category\CategoryRepository;

class CategoryService {
    protected $repo;

    public function __construct(CategoryRepository $repo) {
        $this->repo = $repo;
    }

    public function getAllCategories() {
        return $this->repo->getAll();
    }

    public function insertData($data) {
        return $this->repo->insert($data);
    }

    public function updateData($data, $id) {
        return $this->repo->update($data, $id);
    }

    
}