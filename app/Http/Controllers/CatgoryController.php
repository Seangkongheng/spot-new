<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CatgoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat=Category::all();
        return view('admin.category.category',compact('cat'));
        
    }

    public function upload(Request $request)
    {
       if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validateData =$request->validate([
        'name'=>'required|max:255',
        'decription'=>'nullable|max:255'
      ]);

      $category = new Category;
      $category->name=$validateData['name'];
      $category->decription=$validateData['decription'];
      $category->save();

      return redirect('admin/dasboad/category/create')->with('status', 'Category created successfully.');;
    }

    

    /**
     * Display the specified resource.
     */
    public function show()
    {
  
        return view('admin.category.category');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
      $category=Category::Find($id);
      $category->name = $request->input('name');
      $category->decription = $request->input('decription');

      // Save the updated category
      $category->save();
      return redirect('admin/dasboad/category')->with('status', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/dasboad/category')->with('status', 'Category deleted successfully');
    }
}
