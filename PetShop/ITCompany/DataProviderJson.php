<?php

class DataProviderJson {
   
    public function writeFile($file_name, $obj) 
    {
        if (empty($file_name) || $obj === null) {
            throw new Exception("Choose filename or object");
        } else {
            $text = json_encode($obj);
            $file = fopen($file_name, "w");
            if (!$file) {
                exit("Can not open the file");
            }
            fwrite($file, $text);
            fclose($file);
        }
    }

    public function readFile($file_name) 
    {
        if (empty($file_name)) {
            throw new Exception("Choose filename or object");
        } else {
            $file = fopen($file_name, "r");
            if (!$file) {
                exit("Can not open the file");
            }
            $text = fread($file, filesize($file_name));
            fclose($file);
        }
        return json_decode($text,true);
    }

}