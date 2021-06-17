<?php
/* 
  ./app/views/templates/partials/_aside.php
*/
?>

  <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
    <div class="sidebar-box">
      <form action="#" class="search-form">
        <div class="form-group">
          <span class="icon icon-search"></span>
          <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
        </div>
      </form>
    </div>

    <!-- CATEGORIES -->
    <div class="sidebar-box ftco-animate">
    <?php 
      // asking categories to categoriesModel
      include_once '../app/models/categoriesModel.php';
      $categories = \App\Models\CategoriesModel\findAll($conn);
      
      // load categories/index directly
      include '../app/views/categories/_index.php';
    ?>
    </div>
    <!-- END CATEGORIES -->

    <!-- RECENT BLOG -->
    <div class="sidebar-box ftco-animate">
    <?php 
      // asking posts to postsModel
      include_once '../app/models/postsModel.php';
      $posts = \App\Models\PostsModel\findAll($conn, 3);

      // load posts/_recents directly
      include '../app/views/posts/_recents.php';
      ?>
    </div>
    <!-- END RECENT BLOG -->

    <!-- TAG -->
    <?php 
      include_once '../app/controllers/tagsController.php';
      \App\Controllers\TagsController\indexAction($conn);
    ?>
    <!-- END TAG -->

  </div>