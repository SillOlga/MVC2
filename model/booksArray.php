<?php
$books = array();

         $mysqli = new mysqli('localhost', 'root', '', 'shop'); // Create a class, put it in a variable, create fields



        if(mysqli_connect_errno()) {
            print_f('Соединение не установлено');
            exit();
        } // Handling connection error


        $mysqli->set_charset('utf8'); // Indicates encoding setting

        
        $query = "Select * From Books"; // Make a query from a table Books


        $result = $mysqli->query($query); // Request in progress  
        $books = $result->fetch_all(MYSQLI_ASSOC); // Download all the books and get the result




//     array("bookname" => "HTML and CSS",
//             "autor" => "Jon Duckett",
//             "price" => "17.19$",
//             "description" => "Every day, more and more people want to learn some HTML and CSS.",
//             "image" => "HTMLandCSS_Duckett.jpg"),
//     array("bookname" => "HTML5",
//             "autor" => "Matthew MacDonald",
//             "price" => "27.65$",
//             "description" => "HTML5 is more than a marcup language-it's a collection of several independent web standards.",
//             "image" => "HTML5TheMissing_MacDonald.jpg"),
//     array("bookname" => "Head First HTML5 Programming",
//             "autor" => "Eric Freeman, Elisabeth Robson",
//             "price" => "35.35$",
//             "description" => "HTML has been on a wild ride. Sure, HTML started as a meremarkup language, but more recently HTML's put on some major muscle.",
//             "image" => "HeadFirstHTML5.jpg"),
//     array("bookname" => "Head First JavaScript Programming",
//             "autor" => "Eric Freeman, Elisabeth Robson",
//             "price" => "37.60$",
//             "description" => "This brain-friendly quide teaches you everything from Javascript language fundamentals to advanced topics, including objects, functions, and the browser's document object model.",
//             "image" => "HeadFirstJavaScript.jpg"),       
//      array("bookname" => "jQuery in Action",
//             "autor" => "Bear Bibeault, Yehuda Katz",
//             "price" => "32.12$",
//             "description" => "A really good web development framework anticipates your needs. jQuery does more-it practically reads your mind.",
//             "image" => "JQueryInAction.jpg"));
?>              


    
    
