<?php 
/* 
  ./core/close.php
*/

/**
 * Formatting date with default francophone format
 *
 * @param string $date
 * @param string $format
 * @return string
 */
function date_formater(string $date, string $format = DATE_FORMAT) :string {
  $date = new DateTime($date);
  return $date->format($format);
}