<?php
/* 
  ./app/models/postsModel.php
*/

/**
 * Last 10 posts
 *
 * @param PDO $conn
 * @return array
 */
function findAll(PDO $conn) :array {
  $sql = 'SELECT * 
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;';
  
  $rs = $conn->query($sql);
  return $rs->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * One post by ID
 *
 * @param PDO $conn
 * @param integer $id
 * @return array
 */
function findOneById(PDO $conn, int $id) :array {
  $sql = 'SELECT * 
          FROM posts
          WHERE id = :id;';
  
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(PDO::FETCH_ASSOC);
}