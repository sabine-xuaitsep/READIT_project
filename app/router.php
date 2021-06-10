<?php
/* 
  ./app/router.php
*/

if (isset($_GET['postID'])):
  // ROUTE DU DETAIL D'UN POST
  // PATTERN: /?postID=x
  // CTRL: postsControleur
  // ACTION: show
  include_once '../app/controllers/postsController.php';
  \App\Controllers\PostsController\showAction($conn, $_GET['postID']);

elseif (isset($_GET['contact'])):
  // ROUTE DU CONTACT
  // PATTERN: /?contact
  // CTRL: /
  // ACTION: /
  GLOBAL $content, $title;
  $title = "Contact";
  ob_start();
    include '../app/views/templates/partials/_contact.php';
  $content = ob_get_clean();

else:
  // ROUTE PAR DEFAUT : LISTE DES  DERNIERS POSTS
  // PATTERN: /
  // CTRL: postsController
  // ACTION: index
  include_once '../app/controllers/postsController.php';
  \App\Controllers\PostsController\indexAction($conn);

endif;