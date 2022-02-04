<?php
 
namespace Drupal\movie_reservation\Controller;


class MovieReservationController  {

    public function showMovie() {
      $query = \Drupal::entityQuery('node')
        ->condition('type', 'movie');
        

      $movies = \Drupal\node\Entity\Node::loadMultiple($query->execute());
      
      $x=1;
      
      

        return array(
          '#theme' => 'movies-list',
          '#movies' => $movies,
          '#title' => 'Welcome to our movie reservation page'
        );
      
    }
  }
