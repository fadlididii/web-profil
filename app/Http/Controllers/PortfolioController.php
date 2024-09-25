<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_link' => 'required|url',
            'description' => 'required',
        ]);
    
        // Menyimpan gambar yang di-upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
    
        // Menyimpan data ke database
        Portfolio::create([
            'name' => $request->name,
            'image_url' => 'images/' . $imageName, // Menyimpan path gambar
            'project_link' => $request->project_link,
            'description' => $request->description,
        ]);
    
        return redirect()->route('portfolios.index')->with('success', 'Data berhasil ditambahkan');
    }  

    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_link' => 'required|url',
            'description' => 'required',
        ]);
    
        $portfolio = Portfolio::findOrFail($id);
    
        // Cek apakah ada gambar yang diupload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $portfolio->image_url = 'images/' . $imageName;
        }
    
        $portfolio->name = $request->name;
        $portfolio->project_link = $request->project_link;
        $portfolio->description = $request->description;
        $portfolio->save();
    
        return redirect()->route('portfolios.index')->with('success', 'Data berhasil diperbarui');
    }    

    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Data berhasil dihapus');
    }

    // Menampilkan data ke halaman home
    public function showHome()
    {
        $portfolios = Portfolio::all(); 
        return view('home', compact('portfolios'));
    }

    // Menampilkan data ke halaman portfolio
    public function showPortfolio()
    {
        $portfolios = Portfolio::all(); 
        return view('portfolio', compact('portfolios'));
    }

}