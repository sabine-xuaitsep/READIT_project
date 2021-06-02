<?php
/* 
  ./app/models/tagsModel.php
*/

namespace App\Models\TagsModel;

/**
 * Tags by post ID
 *
 * @param PDO $conn
 * @param integer $id
 * @return array
 */
function findAllByPostId(\PDO $conn, int $id) :array {
  $sql = 'SELECT t.id, t.name
          FROM tags t
          JOIN posts_has_tags pht ON pht.tag_id = t.id
          WHERE pht.post_id = :id
          ORDER BY t.name ASC;';
  
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}