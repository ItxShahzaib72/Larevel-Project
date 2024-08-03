<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = DB::select('SELECT * FROM `products`');
        return view('adminlayouts.products'  , compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = uniqid();
        $Name = $request->Name;
        $Decription = $request->Description;
        $Quantity = $request->Quantity;
        $Price = $request->Price;
        DB::select("INSERT INTO `products`(`ProductId`,`CategorytId`,`ProductName`, `ProductDescription`,`ProductQuantity`, `ProductPrice`, `ProductStatus`)
        VALUES ('".$id."', '".$id."','".$Name."','".$Decription."','".$Quantity."','".$Price."','Active')");
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)


    {

        

        $ProductData = DB::select('select * from products where ProductId = "'.$id.'" ');

        return $ProductData;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $EditProductName = $request->EditProductName;
         $EditProductDecription = $request->EditProductDescription;
         $EditProductQuantity = $request->EditProductQuantity;
         $EditProductPrice = $request->EditProductPrice;
        $EditProductImage = $request->EditProductImage;
        //  $ProductName = $request->EditProductName;
        DB::select('UPDATE products SET ProductId="'.$id.'", CategorytId="'.$id.'", ProductName="'.$EditProductName.'", ProductDescription = "'. $EditProductDecription.'" , ProductImage = "'.$EditProductImage.'" , ProductQuantity = "'. $EditProductQuantity.'" , ProductPrice = "'.$EditProductPrice.'"  WHERE ProductId = "'.$id.'"');
        return redirect()->back();  
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::select("DELETE FROM `products` WHERE `ProductId` = '".$id."'");
        return redirect()->back();
    }
}