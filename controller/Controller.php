<?php
/**
  *
  */
  class Controller{


    // connecting the main page of the site using the function
    public static function StartSite(){
        include 'view/main.php'; 
        
    } 

    // getting the connection of the list of books using the function 
    public static function BookList(){
        $booksList = Model::getBookList();
        include 'view/bookList.php'; 
    } 

    // getting the connection of one book using the function
    public static function bookOne($title){
        $test = Model::getBook($title);
        if ($test[0]==true){
            $book = $test[1];
            include 'view/bookOne.php'; 


        }
        // connecting error checking
        else {
            include 'view/error404.php'; 
        }
    }
    // finding an error using a function
    public function error404(){
        include 'view/error404.php'; 

    }
  }
  ?> 
