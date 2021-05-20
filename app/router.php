<?php
/* 
  ./app/router.php
*/

// ROUTE PAR DEFAUT : LISTE DES  DERNIERS POSTS
// PATTERN: /
// CTRL: postsController
// ACTION: index
include_once '../app/controllers/postsController.php';
indexAction($conn);