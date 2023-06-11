<?php 

namespace App\Services;

use App\Models\Post;
use App\Repositories\Post\PostRepository;

class PostService {
    protected $repo;
    
    public function __construct(PostRepository $repo) {
        $this->repo = $repo;
    }

    public function getPosts() {
        return Post::orderBy('id', 'desc')->get()->take(6);
    }

    public function recentPost() {
        return Post::orderBy('id', 'desc')->get()->take(3);
    }

    public function insertData($data) {
        $this->repo->insert($data);
    }

    public function updateDate($data, $id) {
        $this->repo->update($data, $id);
    }

    public function getPostByCategoryId($id) {
        return $this->repo->getPostByCategoryId($id);
    }

    public function relatedPosts($id) {
        return $this->repo->getPostByCategoryIdLimited($id);
    }


}