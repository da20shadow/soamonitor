<?php
Class Func{

    public function checkInput($input){
        $input = htmlspecialchars($input);
        $input = trim($input);
        return stripcslashes($input);
    }
}