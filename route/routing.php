<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0]; 
    // method of obtaining the number of substrings
    $num = substr_count($host, '/');
    $way = explode('/', $host)[$num]; 

    // getting to the main page of the site
    if($way == '' || $way == 'index.php') {
        $response = Controller::StartSite(); 

    }
    // get a response from the list of books
    elseif ($way =='books') {
        $response = Controller::BookList(); 

    }
    // get a response from the one book
    elseif ($way ='book') {
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
        }
        $response = Controller::BookOne($title); 

    }
    // Get an error response
    else {
        $response = Controller::error404(); 


    }

?>






        

    
