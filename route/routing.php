<?php
    $host = explode('?', $_SERVER['REQUEST_URI'])[0]; 

    $num = substr_count($host, '/');
    $way = explode('/', $host)[$num]; // method of obtaining the number of substrings


    if($way == '' || $way == 'index.php') {
        $response = Controller::StartSite(); // how to get a response from the site

    }
    elseif ($way =='books') {
        $response = Controller::BookList(); // how to get a response from the list of the books

    }
    elseif ($way ='book') {
        if (isset($_GET['title'])) {
            $title = $_GET['title'];
        }
        $response = Controller::BookOne($title); // how to get a response from the one book

    }
    else {
        $response = Controller::error404(); // how to get an error response


    }

?>






        

    
