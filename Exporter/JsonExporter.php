<?php
namespace Exporter;

class JsonExporter extends Exporter{
    protected $format = ".json";
    public function export(){
            // var_dump($this->data);
            $file_name = "text-file-" . rand(100,999) . $this->format;
            $file_path = __DIR__ . "/files/$file_name";
            file_put_contents($file_path,json_encode($this->data));
            echo "$file_name successfully Created!\n";
        
    }
}

// $obj = new JsonExporter(["title"=>"loghman","content"=>"CEO @ 7learn"]);
// $obj->export();