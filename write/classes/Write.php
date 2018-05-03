<?php
/**
 * Created by PhpStorm.
 * User: Botir
 * Date: 26.04.2018
 * Time: 18:39
 */

class Write
{
    public $filename;
    public $path = "V:\home\oop.uzb\www\write\\files";
    public $content;
    public $Message;
    public $handle;

    public function __construct($filename)
    {
        $this->filename=$filename;

       if ($this->checkFileExist() == true){
        if  ($this->checkFileWritable() == true){
            if ($this->handle = fopen($this->filename, 'a')) {
                $this->Message = "Ne mogu otkrit file {$this->filename}.";
            }
        }
       }
    }

    public function writeFile($content){
        $this->content = $content;
        if (fwrite($this->handle, $this->content) === FALSE) {
            $this->Message = "Ne mogu proizvesti zapis v file ($this->filename)";
        }
        else {
            $this->Message = "Ura! Zapisali ($this->content) v file ($this->filename)";
        }
    }

    public function returnMessage(){
        echo $this->Message."<br>";
    }

    public function checkFileExist(){
        if (file_exists($this->path."\\".$this->filename)){
            return true;
        }
        else{
            $this->Message = "Ne Mogu nayti file ".$this->path."\\".$this->filename;
            return false;
        }
    }

    public function checkFileWritable(){
        if (is_writable($this->path."\\".$this->filename))
        {
            return true;
        }
        else
        {
            $this->Message = "File {$this->filename} nedostupen dlya zapisi.";
            return false;
        }
    }

    function __destruct()
    {
        if ($this->handle)
        {
            fclose($this->handle);
        }
        $this->returnMessage();
    }
}