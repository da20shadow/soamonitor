<?php
Class Func{

    public function checkInput($input): string
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        return stripcslashes($input);
    }
}