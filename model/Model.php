<?php
    /**
    *
    */
    class Model{
        // Get a list of books using the function. Return to all books 
        public static function getBookList() {
            include_once 'model/booksArray.php';
            return $books; 

        }
        // Get one book using the function (each book has its own name, returns one book or the entire list of books for review)
        public static function getBook($title){
            $allBook = Model::getBookList();
            $i = 0;
            $test = array(false);
            foreach ($allBook as $oneBook) {
                if($oneBook['bookname'] ==$title){
                    $test = array(true, $allBook[$i]);
                    return $test;
                }
                $i++;
            }
            return $test;
        }
    } 
    
    
    

?>






    
