<?php
 
namespace Drupal\movie_reservation\Controller;


class MovieReservationController  {

    public function myPage(){
      $movies = [
        ['title' => 'Movie1'],
        ['title' => 'Movie2'],
        ['title' => 'Movie3'],
      ];
  
      return [
        '#theme' => 'movies-list',
        '#movies' => $movies,
        '#title' => 'Drupal <3'
      ]; 
    }
  }
