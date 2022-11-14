<?php

    include_once "../model/bdd_model.php";

    try{
        
        $db = new Database();
        $db->init_book_table();
        $books = $db->get_books();

        $array_book = [];

        foreach($books as $book)
        {
            $array_book[] = $book;
        }
        
        echo json_encode($array_book,JSON_THROW_ON_ERROR);
    }catch(Exception $e)
    {
        echo $e->getMessage();
    }

