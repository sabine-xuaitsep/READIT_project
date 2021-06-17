<?php 
/*
  ./app/views/posts/_recents.php 

  Available VARIABLES:
    - $posts: ARRAY(ARRAY(id, title, created_at, resume, image, content, author_id, categorie_id))
*/

use \Core\Functions;

?>

<h3>Recent Blog</h3>
<?php foreach($posts as $post): ?>
<div class="block-21 mb-4 d-flex">
  <a class="blog-img mr-4" style="background-image: url(assets/images/<?php echo $post['image']; ?>);"></a>
  <div class="text">
    <h3 class="heading"><a href="?postID=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
    <div class="meta">
      <div><a href="#"><span class="icon-calendar"></span> <?php echo Functions\date_formater($post['created_at'], 'F d, Y'); ?></a></div>
      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
    </div>
  </div>
</div>
<?php endforeach; ?>