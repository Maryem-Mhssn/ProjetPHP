<?php

    include_once "../model/bdd_model.php";        
    
    try{
        $empty = false;

        $db = new Database();
        $db->init_book_table();
        $books = $db->get_books();
        
        if(count($books) == 0 )
        {
            $empty = true;
        }
    }catch(Exception $e)
    {
        echo $e->getMessage();
    }

