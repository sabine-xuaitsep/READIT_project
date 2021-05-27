<?php
/* 
  ./app/models/authorModel.php
*/

/**
 * Author by post ID
 *
 * @param PDO $conn
 * @param integer $id
 * @return array
 */
function findOneAuthorByPostId(PDO $conn, int $id) :array {
  $sql = 'SELECT a.id, a.lastname, a.firstname, a.biography, a.image
          FROM authors a
          JOIN posts p ON p.author_id = a.id
          WHERE p.id = :id;';
  
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(PDO::FETCH_ASSOC);
}
