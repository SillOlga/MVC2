<?php
    /**
    *
    */
    class Model{

        public static function getBookList() {
            include_once 'model/booksArray.php';
            return $books; // using the function of getting the list of books makes a return to all books 

        }

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
    } // using the get one book function shows that each book has its own name (returns one book or the entire list of books for review)
    
    
    

?>






    
