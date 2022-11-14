<?php

    include_once('../model/bdd_model.php');
    
    if( isset($_GET['id']) )
    {
        $id = $_GET['id'];

        try{
            $db = new Database();
            $db->init_book_table();
            $book = $db->get_book_by_id($id);

        }catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }