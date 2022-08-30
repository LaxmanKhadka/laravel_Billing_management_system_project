<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Response;
use Illuminate\Http\Request;

class csvConntroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function csvexport(Request $req){
    $product= Product::all();

    $fileName=$req->type.".csv";
    // which type of data export
    $header = array(
        "Content-type"        => "text/csv",
        "Content-Disposition" => "attachment; filename=$fileName",
        "Pragma"              => "no-cache",
        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
        "Expires"             => "0"
    );

    $columns = array('productCategory','vendorCategory','productName','productCode','productQuantity','productPrice','productDescription');

        $callback = function() use($product, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($product as $task) {
                $row['productCategory']  = $task->productCategory;
                $row['vendorCategory']    = $task->vendorCategory;
                $row['productName']    = $task->productName;
                $row['productCode']  = $task->productCode;
                $row['productQuantity']  = $task->productQuantity;
                $row['productPrice']  = $task->productPrice;
                $row['productDescription']  = $task->productDescription;

                fputcsv($file, array($row['productCategory'], $row['vendorCategory'], $row['productName'], $row['productCode'], $row['productQuantity'],$row['productPrice'],$row['productDescription']));
            } 
            

            fclose($file);
        };

        return response()->stream($callback, 200, $header);

    }
}
