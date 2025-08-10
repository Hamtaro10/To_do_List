<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function showCategoryForm(){
        return view('pages.category');
    }

    public function showEditCategoryForm($id){
        Category::findOrFail($id);
        return view('pages.edit_category', compact('compact'));
    }

    public function createCategory(Request $request){

        $validated = $request -> validate([
            'user_id' => "required|exists:users,id",
            'name' => "min:6|max:25|unique:categories,name",
            'description' => "min:5|max:255"
        ]);
        $category = Category::create([
            'Jenis Kegiatan' => $validated['name'],
            'Isi Kegiatan' => $validated['description']
        ]);

        session()->flash('success', 'Kategori berhasil dibuat: ' . $category->name);

        return redirect()->route('pages.category');
    }

    public function editCategory(Request $request, $id){
        $validated = $request -> validate([
            'user_id' => "required|exists:users,id",
            'name' => "min:6|max:25|unique:categories,name" . $id,
            'description' => "min:5|max:255"
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'Jenis Kegiatan' => $validated['name'],
            'Isi Kegiatan' => $validated['description']
        ]);

        session()->flash('succes', 'Kategori Berhasil Diubah !');
        return redirect()->route('pages.category');
    }

    public function deleteCategory($id){

        $category = Category::findOrFail($id);
        $category->delete();

        session()->flash('succes', 'Kategori Telah Berhasil Dihapus');

        return redirect()->route('pages.category');
    }
}
