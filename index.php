<?php 

/*  è definita una classe ‘Movie’
    all'interno della classe sono dichiarati degli attributi
    all'interno della classe è definito un costruttore
    all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */

class Movie {
     /**
      * ATTRIBUTI
      */
     public $title;
     public $plot;
     public $genre;


     /**
      * COSTRUTTORE
      */ 
     function __construct($_title, $_plot, $_genre){
         $this->title= $_title;
         $this->plot= $_plot;
         $this->genre= $_genre;


     }

      /**
      * METODI
      */ 

      // get excerpt 
      public function getExcerpt(){
          return substr($this->plot,0,100);
      }

      // get Genre 
      public function getGenre(){
          return $this->genre;
      }
 }


 // ISTANZA 1
 $movie1 = new Movie('The Great Gatsby', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, obcaecati? A odit alias praesentium ducimus ut maiores vitae. Accusamus magni nobis saepe veritatis vel aperiam maiores molestiae a quo voluptate.', 'Drama');
//  $movie1->title = 'The Great Gatsby';
//  $movie1->plot = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, obcaecati? A odit alias praesentium ducimus ut maiores vitae. Accusamus magni nobis saepe veritatis vel aperiam maiores molestiae a quo voluptate.';
//  $movie1->genre = 'Drama';
//  var_dump($movie1);

 // stampa
 echo '<h2> Title: '. $movie1->title . '</h2> ' . 
      ' <p> Incipit plot: '. $movie1->getExcerpt(). '...</p>'. 
       '<div> Genre: '. $movie1->getGenre()  . '</div><br><br>' ;



 // ISTANZA 2
 $movie2 = new movie('Notting Hill', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reprehenderit repellat qui odio voluptate, voluptates dolore nostrum minus iusto. Adipisci doloribus obcaecati maxime temporibus minima culpa repellat consequatur blanditiis modi?', 'Romantic comedy');
//  $movie2->title = 'Notting Hill';
//  $movie2->plot = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam reprehenderit repellat qui odio voluptate, voluptates dolore nostrum minus iusto. Adipisci doloribus obcaecati maxime temporibus minima culpa repellat consequatur blanditiis modi?';
//  $movie2->genre = 'Romantic comedy';
// var_dump($movie2);

 // stampa
 echo '<h2> Title: '. $movie2->title . '</h2> ' . 
      ' <p> Incipit plot: '. $movie2->getExcerpt().  '...</p>'. 
      '<div> Genre: '. $movie2->getGenre()  . '</div>' ;


 