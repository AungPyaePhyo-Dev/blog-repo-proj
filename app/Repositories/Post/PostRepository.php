<?php 

namespace App\Repositories\Post;

use App\Foundation\Repository\Eloquent\BaseRepository;
use App\Models\Post;

class PostRepository extends BaseRepository implements PostRepositoryInterface {
    public function __construct(Post $model) {
        parent::__construct($model);
    }

    public function getPostByCategoryId($id) {
        return Post::where('category_id', $id)->get();
    }

    public function getPostByCategoryIdLimited($id) {
        return Post::where('category_id', $id)->take(3)->get();
    }

}