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
    <?php 
      // asking categories to categoriesModel
      include_once '../app/models/categoriesModel.php';
      $categories = \App\Models\CategoriesModel\findAll($conn);

      // load categories/index directly
      include '../app/views/categories/_index.php';
    ?>
    <!-- END CATEGORIES -->

    <div class="sidebar-box ftco-animate">
      <h3>Recent Blog</h3>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(assets/images/image_1.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(assets/images/image_2.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
      <div class="block-21 mb-4 d-flex">
        <a class="blog-img mr-4" style="background-image: url(assets/images/image_3.jpg);"></a>
        <div class="text">
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
            <div><a href="#"><span class="icon-person"></span> Admin</a></div>
            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
          </div>
        </div>
      </div>
    </div>

    <!-- TAG -->
    <!-- <div class="sidebar-box ftco-animate">
      <h3>Tag Cloud</h3>
      <div class="tagcloud">
        <a href="#" class="tag-cloud-link">cat</a>
        <a href="#" class="tag-cloud-link">abstract</a>
        <a href="#" class="tag-cloud-link">people</a>
        <a href="#" class="tag-cloud-link">person</a>
        <a href="#" class="tag-cloud-link">model</a>
        <a href="#" class="tag-cloud-link">delicious</a>
        <a href="#" class="tag-cloud-link">desserts</a>
        <a href="#" class="tag-cloud-link">drinks</a>
      </div>
    </div> -->
    <!-- END TAG -->

  </div>