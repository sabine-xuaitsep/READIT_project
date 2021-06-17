<?php
/* 
  ./app/models/postsModel.php
*/

namespace App\Models\PostsModel;

/**
 * Last $limit posts
 *
 * @param PDO $conn
 * @param integer $limit
 * @return array
 */
function findAll(\PDO $conn, int $limit = 10) :array {
  $sql = 'SELECT * 
          FROM posts
          ORDER BY created_at DESC
          LIMIT :limit;';

  $rs = $conn->prepare($sql);
  $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * One post by ID
 *
 * @param PDO $conn
 * @param integer $id
 * @return array
 */
function findOneById(\PDO $conn, int $id) :array {
  $sql = 'SELECT * 
          FROM posts
          WHERE id = :id;';
  
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}