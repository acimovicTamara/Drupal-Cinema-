<?php
 
namespace Drupal\movie_reservation\Controller;


class MovieReservationController  {

    public function myPage(){
      $movies = [
        ['title' => 'Movie1'],
        ['title' => 'Movie2'],
        ['title' => 'Movie3']
      ];
  
      return [
        '#theme' => 'movie_reservation',
        '#movies' => $movies,
        '#title' => 'All students'
      ]; 
    }
  }
  ?>
  