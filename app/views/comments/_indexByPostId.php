<?php 
/*
  ./app/views/comments/_indexByPostId.php 

  Available VARIABLES:
    - $comments ARRAY(ARRAY(pseudo, content, created_at, post_id))
*/
?>

<!-- comments list -->
  <h3 class="mb-5">
    <?php 
      $commentsCount = count($comments);
      if ($commentsCount > 1):
        echo $commentsCount . ' Comments'; 
      else: 
        echo $commentsCount . ' Comment';
      endif; 
    ?> 
  </h3>
  <ul class="comment-list">
  <?php foreach($comments as $comment): ?>
    <li class="comment">
      <div class="comment-body">
        <h3><?php echo $comment['pseudo']; ?></h3>
        <div class="meta mb-3">
        <?php 
            echo \Core\Functions\date_formater($comment['created_at'], 'F d, Y \a\t g:ia'); 
        ?>
        </div>
        <p><?php echo $comment['content']; ?></p>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
<!-- END comments list -->