<?php
$page = $_GET['page'];
switch ($url) {
  case 'atlanta':
    $fileName = 'gallery.php?page=atlanta';
    break;
  case 'blm': 
    $fileName = 'gallery.php?page=blm';
    break;
  case 'eastcoastfam': 
    $fileName = 'gallery.php?page=eastcoastfam';
    break;
  case 'newyork': 
    $fileName = 'gallery.php?page=newyork';
    break;
  case 'healthbeauty': 
    $fileName = 'gallery.php?page=healthbeauty';
    break;
  case 'global': 
    $fileName = 'gallery.php?page=global';
    break;
  case '93.5': 
    $fileName = 'gallery.php?page=93.5';
    break;
  case 'miami': 
    $fileName = 'gallery.php?page=miami';
    break;
  case 'zulu': 
    $fileName = 'gallery.php?page=zulu';
    break;
  case 'home':
  default:
    $fileName = 'home.php';
}

include('header.php');
include($fileName);
?>