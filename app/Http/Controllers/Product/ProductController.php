<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function dashboard() {
        return view('dashboard');
    }
    
    public function index()
    {
        try {
            $products = Product::withTrashed()->latest()->paginate(5);
            $deletedProductsCount = Product::onlyTrashed()->count();
            return view('products.index', compact('products', 'deletedProductsCount'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Pada Halaman Index');
            // return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function create()
    {
        try {
            return view('products.create');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi Kesalahan Pada Halaman Create');
        }
    }

    public function store(Request $request): RedirectResponse
    {
        // DB::beginTransaction();
        // try {
            // validate form
            $request->validate([
                'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
                'title'         => 'required|min:5',
                'description'   => 'nullable',
                'price'         => 'required|numeric',
                'stock'         => 'required|numeric'
            ]);

            //upload image
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            //create product
            Product::create([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);

            // DB::commit();
            //redirect to index
            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     return redirect()->back()->with('error', 'Data gagal disimpan!');
        //     // return redirect()->back()->with('error', $e->getMessage());
        // }
    }

    public function show(string $id): View
    {
        try {
            //get product by ID
            $product = Product::findOrFail($id);
    
            //render view with product
            return view('products.show', compact('product'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menampilkan data!');
        }
    }

    public function edit(string $id): View
    {
        try{
            //get product by ID
            $product = Product::findOrFail($id);
    
            //render view with product
            return view('products.edit', compact('product'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan pada halaman edit');
        }
    }


    public function update(Request $request, $id): RedirectResponse
    {
        DB::beginTransaction();
        try{
            //validate form
            $request->validate([
                'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
                'title'         => 'required|min:5',
                'description'   => 'nullable',
                'price'         => 'required|numeric',
                'stock'         => 'required|numeric'
            ]);

            //get product by ID
            $product = Product::findOrFail($id);

            //check if image is uploaded
            if ($request->hasFile('image')) {

                //upload new image
                $image = $request->file('image');
                $image->storeAs('public/products', $image->hashName());

                //delete old image
                Storage::delete('public/products/' . $product->image);

                //update product with new image
                $product->update([
                    'image'         => $image->hashName(),
                    'title'         => $request->title,
                    'description'   => $request->description,
                    'price'         => $request->price,
                    'stock'         => $request->stock
                ]);
            } else {

                //update product without image
                $product->update([
                    'title'         => $request->title,
                    'description'   => $request->description,
                    'price'         => $request->price,
                    'stock'         => $request->stock
                ]);
            }

            //redirect to index
            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Data gagal diubah!');
        }
        
    }

    public function restore($id)
    {
        try{
            $product = Product::withTrashed()->find($id);
            if ($product) {
                $product->restore();
            }
    
            return redirect()->route('products.index')->with('success', 'Data berhasil dipulihkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data gagal dipulihkan!');
        }
    }

    // Mengembalikan semua produk yang di-soft delete
    public function restoreAll(): RedirectResponse
    {
        try {
            Product::onlyTrashed()->restore();
            return redirect()->route('products.index')->with('success', 'Semua data berhasil dipulihkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Semua data gagal dipulihkan');
        }
    }



    public function destroy($id): RedirectResponse
    {
        try {
            // Dapatkan produk berdasarkan ID
            $product = Product::findOrFail($id);
    
            // Lakukan soft delete produk
            $product->delete();
    
            // Redirect ke index dengan pesan sukses
            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function forceDelete($id): RedirectResponse
    {
        try {
            // Dapatkan produk termasuk yang telah di-soft delete
            $product = Product::withTrashed()->findOrFail($id);
    
            // Hapus gambar dari penyimpanan fisik
            Storage::delete('public/products/' . $product->image);
    
            // Hapus produk dari database secara permanen
            $product->forceDelete();
    
            // Redirect ke index dengan pesan sukses
            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus Secara Permanen!']);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data gagal dihapus secara permanen');
        }
    }
}
