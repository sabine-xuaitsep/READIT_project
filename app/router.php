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


elseif (isset($_GET['catID'])):
  // ROUTE DES POSTS PAR CATEGORIE
  // PATTERN: /?catID=x
  // CTRL: categoriesController
  // ACTION: show
  include_once '../app/controllers/categoriesController.php';
  \App\Controllers\CategoriesController\showAction($conn, $_GET['catID']);


  elseif (isset($_GET['tagID'])):
    // ROUTE DES POSTS PAR TAG
    // PATTERN: /?tagID=x
    // CTRL: tagsController
    // ACTION: show
    include_once '../app/controllers/tagsController.php';
    \App\Controllers\TagsController\showAction($conn, $_GET['tagID']);


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


elseif (isset($_POST['comments']) === "add"):
  // ROUTE DE L'AJOUT D'UN COMMENTAIRE
  // PATTERN: ?comments=add
  // CTRL: commentsController
  // ACTION: store
  include_once '../app/controllers/commentsController.php';
  \App\Controllers\CommentsController\storeAction($conn, $_POST['comments']);
  

else:
  // ROUTE PAR DEFAUT : LISTE DES  DERNIERS POSTS
  // PATTERN: /
  // CTRL: postsController
  // ACTION: index
  include_once '../app/controllers/postsController.php';
  \App\Controllers\PostsController\indexAction($conn);

endif;