<?php

/*
 * Text Counter
 *
 * A simple plugin that counts words and characters
 * for any text
 *
 * Sample Usage:
 *
 * Word count
 * <?php echo wordcount($page->text()) ?>
 *
 * Character count (incl spaces)
 * <?php echo charcount($page->text()) ?>
 *
 * Character count no spaces
 * <?php echo charcountnospaces($page->text()) ?>
 *
 * Author: Nirusu <http://nirusu.me>
 *
 */

function wordcount($content) {
  $words = kirbytext($content);
  $wordcount = str_word_count(strip_tags($words));

  return $wordcount;
}

function charcount($content) {
  $words = kirbytext($content);
  $words = strip_tags($words);
  $words = trim($words);
  $charcount = strlen($words);

  return $charcount;
}

function charcountnospaces($content) {
  $words = kirbytext($content);
  $words = strip_tags($words);
  $words = trim($words);

  $words = ereg_replace('[[:space:]]+', '', $words);
  $charcount = strlen($words);

return $charcount;
}