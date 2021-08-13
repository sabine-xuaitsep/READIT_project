<?php
/* 
  ./app/controllers/categoriesController.php
*/

namespace App\Controllers\CategoriesController;
use \App\Models\CategoriesModel;
use \App\Models\PostsModel;

/**
 * showAction
 *
 * @param \PDO $conn
 * @param integer $id
 * @return void
 */
function showAction (\PDO $conn, int $id) {
  // asking one category by id to categoriesModel
  include_once '../app/models/categoriesModel.php';
  $cat = CategoriesModel\findOneById($conn, $id);
  // asking all posts by category id to postsModel
  include_once '../app/models/postsModel.php';
  $posts = PostsModel\findAllByCatId($conn, $id);

  // load posts/index view in $content, $cat['name'] in $title
  GLOBAL $content, $title;
  $title = $cat['name'];
  ob_start();
    include '../app/views/posts/index.php';
  $content = ob_get_clean();
}
