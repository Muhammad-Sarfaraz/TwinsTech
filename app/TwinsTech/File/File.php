<?php


class File{

    public function getInfo($location){
        $fileToAnalyze = ($location);
        $info = pathinfo($fileToAnalyze);

        return $info;
    }

    public function FileRename($loc,$name){
        rename("~/file.txt", "~/file.html");
    }
}




