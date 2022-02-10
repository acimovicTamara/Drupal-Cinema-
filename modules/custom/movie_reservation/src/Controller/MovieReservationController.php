<?php
 
namespace Drupal\movie_reservation\Controller;
use \Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\Request;

class MovieReservationController  {

    public function showMovie() {

      $genres = \Drupal::entityTypeManager()
        ->getStorage('taxonomy_term')
        ->loadByProperties(['vid' => 'genres']);
      $genre_id = \Drupal::request()->query->get('genre');
      
      $query = \Drupal::entityQuery('node')
        ->condition('type', 'movie');

      if( isset($genre_id)){
          $query->condition('field_genres', $genre_id);
      }  
      $movies = Node::loadMultiple($query->execute());
    
      return array(
          '#theme' => 'movies-list',
          '#movies' => $movies,
          '#title' => 'Welcome to our movie reservation page',
          '#genres' => $genres
      );
    }
  }
