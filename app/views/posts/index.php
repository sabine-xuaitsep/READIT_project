<?php 
/*
  ./app/views/posts/show.php 

  Available VARIABLES:
    - $posts: ARRAY(ARRAY(id, title, created_at, resume, image, content, author_id, categorie_id))
    - $post: ARRAY(id, title, created_at, resume, image, content, author_id, categorie_id)
*/

use \Core\Functions;

?>

<div class="container">
  <div class="row d-flex">

    <!--  ARTICLE -->
    <?php foreach($posts as $post): ?>
      <div class="col-md-6 d-flex ftco-animate">
        <div class="blog-entry justify-content-end">
          <a href="?postID=<?php echo $post['id']; ?>" class="block-20" style="background-image: url('assets/images/<?php echo $post['image']; ?>');">
          </a>
          <div class="text p-4 float-right d-block">
            <div class="topper d-flex align-items-center">
              <div class="one py-2 pl-3 pr-1 align-self-stretch">
                <span class="day">
                  <?php echo Functions\date_formater($post['created_at'], 'd'); ?>
                </span>
                
              </div>
              <div class="two pl-0 pr-3 py-2 align-self-stretch">
                <span class="yr"><?php echo Functions\date_formater($post['created_at'], 'Y'); ?></span>
                <span class="mos"><?php echo Functions\date_formater($post['created_at'], 'F'); ?></span>
              </div>
            </div>
            <h3 class="heading mb-3"><a href="?postID=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
            <p><?php echo $post['resume']; ?></p>
            <p><a href="?postID=<?php echo $post['id']; ?>" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <!--  END ARTICLE -->

  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <ul>
          <li><a href="#">+</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>