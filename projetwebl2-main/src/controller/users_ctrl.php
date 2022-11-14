<?php

    include_once('../model/bdd_model.php');

    $db = new Database();
    $db->init_user_table();
    $users = $db->get_users();
