<?php 
/*
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file `index.php` in cui:
 - è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà

*/
class Movie {
  public $title;
  public $genre;
  public $direction;
  public $duration;
  public function __construct($_title, $_genre, $_duration,$_direction)
  {
    $this->title = $_title; 
    $this->genre = $_genre; 
    $this->duration = $_duration; 
    $this->direction = $_direction; 
  }
  public function Get_all_info(){

    return 
    '<h4>' . $this->title  . '</h4>' .
    '<ul>'.
    '<li>' . $this->direction . '</li>' . 
    '<li>' . $this->genre[0] . '</li>' . 
    '<li>' . $this->duration . '  ' . 'minuti' . '</li>' .
    '</ul>';
  }
};


?>