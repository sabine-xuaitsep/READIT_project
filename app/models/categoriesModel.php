<?php
/* 
  ./app/models/categoriesModel.php
*/

namespace App\Models\CategoriesModel;

/**
 * Categories list
 *
 * @param \PDO $conn
 * @return array
 */
function findAll(\PDO $conn) :array {
  $sql = 'SELECT *
          FROM categories
          ORDER BY id ASC;';
  
  $rs = $conn->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

/**
 * Category by ID
 *
 * @param \PDO $conn
 * @param integer $id
 * @return array
 */
function findOneById(\PDO $conn, int $id) :array {
  $sql = 'SELECT *
          FROM categories
          WHERE id = :id;';
  
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}