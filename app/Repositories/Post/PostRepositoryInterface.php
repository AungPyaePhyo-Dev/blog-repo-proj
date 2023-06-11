<?php 

namespace App\Repositories\Post;

interface PostRepositoryInterface {
    public function getPostByCategoryId($id);
}