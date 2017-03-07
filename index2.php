<?php

class FileUpload {

    protected $path;

    public function save($callback)
    {
        //funcion per guardar el fitxer
        $this->path = '/tmp/sdsd/';
        $callback($this->path);
    }
}

class Profile {
    public function updateProfile()
    {
        $f = new FileUpload();

        $f->save(function ($path){
            echo 'El fitxer ha estat guardat correctament' . $path;
        });
    }
}

$profile = new Profile();
$profile->updateProfile();