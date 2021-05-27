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
  showAction($conn, $_GET['postID']);

else:
  // ROUTE PAR DEFAUT : LISTE DES  DERNIERS POSTS
  // PATTERN: /
  // CTRL: postsController
  // ACTION: index
  include_once '../app/controllers/postsController.php';
  indexAction($conn);

endif;