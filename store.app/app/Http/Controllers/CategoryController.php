<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Category = DB::select('SELECT * FROM `categories`');
        return view('adminlayouts.categories' , compact('Category'));
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
        $Name = $request->categoryName;
        DB::select("INSERT INTO `categories`(`categoryId`, `categoryName`, `categoryStatus`)
                         VALUES ('".$id."','".$Name."','Active')");
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
         $CategoryData = DB::select('select * from categories where CategoryId = "'.$id.'"');
         return$CategoryData ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $CategoryName = $request->EditCategoryName;
        DB::select('UPDATE categories SET CategoryName = "'.$CategoryName.'" WHERE CategoryId = "'.$id.'"');
        return redirect()->back();  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return $id;
        DB::select("DELETE FROM `categories` WHERE `CategoryId` = '".$id."'");
        return redirect()->back();
    }
}
