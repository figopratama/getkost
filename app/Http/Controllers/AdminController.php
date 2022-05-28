<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Kamar;


class AdminController extends Controller
{
    public function view_category()
    {
        $data = category::all();

        return view ('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name = $request->category;
        $data->save();

        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Delete Successfully');
    } 

    public function view_kamar()
    {
        $category = Category::all();
        return view('admin.catalog', compact('category'));
    }

    public function add_kamar(Request $request)
    {
        $kamar = new kamar;

        $kamar->address = $request->address;
        $kamar->category = $request->category;
        $kamar->facility = $request->facility;
        $kamar->price = $request->price;
        $kamar->quantity = $request->quantity;
        
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('kamar', $imagename);
        $kamar->image = $imagename;
        
        $kamar->contact = $request->contact;

        $kamar->save();

        return redirect()->back()->with('message', 'Kamar berhasil ditambahkan!');
    }

    public function show_kamar()
    {
        $kamar = kamar::all();

        return view('admin.show_catalog', compact('kamar'));
    }

    public function delete_kamar($id)
    {
        $kamar = kamar::find($id);
        $kamar->delete();

        return redirect()->back()->with('message', 'Hapus kamar berhasil!');
    }

    public function update_kamar($id)
    {
        $kamar = kamar::find($id);

        $category = category::all();

        return view('admin.update_catalog', compact('kamar', 'category'));
    }

    public function update_kamar_confirm(Request $request, $id)
    {
        $kamar = kamar::find($id);

        $kamar->address = $request->address;
        $kamar->category = $request->category;
        $kamar->facility = $request->facility;
        $kamar->price = $request->price;
        $kamar->quantity = $request->quantity;
        
        $image = $request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('kamar', $imagename);
            $kamar->image = $imagename;
        }

        $kamar->contact = $request->contact;

        $kamar->save();

        return redirect()->back()->with('message', 'Update kamar berhasil!');
        
    }
}
