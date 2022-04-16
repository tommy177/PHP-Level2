<?php

class Autoload
{
    public function loadClass($className)
    {
        $arg1 = ['app\\','\\'];
        $arg2 = ['../','/'];
         $className = str_replace($arg1,$arg2,$className);
            $fileName = "$className.php";
            var_dump($fileName);
            if (file_exists($fileName)) {
                include $fileName;
        }
    }
}