<?php

include_once "Page.php";

class PageController {
    public static function index() {
        include_once "PageView.php";
    }
    public static function users() {
        $users = Page::showUsers();
        
    }

    
}

if(isset($_GET['page'] ) == 'index'){
    PageController::index();
    
}
if(isset($_GET['page']) == 'users'){
    
    PageController::users();
}