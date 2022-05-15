<?php
namespace Exporter;

class PdfExporter extends Exporter{
    protected $format = ".pdf";
    public function export(){
        echo "PDF Export OK!"; //mPdf
    }
}

// $obj = new PdfExporter(["title"=>"khlhklh","content"=>"jgftd"]);
// $obj->export();
