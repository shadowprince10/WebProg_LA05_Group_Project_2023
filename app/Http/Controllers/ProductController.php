<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function viewProducts() {
        $products = Product::paginate(5);
        return view('view-products', compact('products'));
    }

    public function postProducts() {
        return view('post-products', ['title' => 'Post Product']);
    }

    public function addProducts(Request $request) {
        $validatedInput = $request -> validate([
            'name' => 'required|min:4',
            'price' => 'required|numeric|min:1000',
            'description' => 'required|min:10',
            'category' => 'required|in:manga,keychain,stationary,clothes,figure',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:1000000',
            'image-name' => 'required|min:2|max:30',
        ]);


        if ($request -> hasFile('image')) {
            $img = $request -> file('image');
            $imgName = $request -> input('image-name');
            $imgType = $file -> getClientOriginalExtension(); // to obtain the image file type (png/jpeg/jpg)
            $imgPath = "public/assets/products/";
            // untuk upload file, file yang di-submit user di-upload ke direktori storage > app > public
            // direktori storage > app > public terhubung dengan direktori public > storage

            // bagaimana cara memasukkan $imgPath ke atribut image?
            $img -> storeAs($imgPath, $imgName . '.' . $imgType);
        }

        Product::create([
            'name' => $validatedInput['name'],
            'description' => $validatedInput['description'],
            'price' => $validatedInput['price'],
            'category' => $validatedInput['category'],
            'image' => $validatedInput['image'],
        ]);

        return redirect() -> route('products.view');
    }

    public function editProducts(Product $product) {
        return view('update-products', compact('product'), ['title' => 'Update Product']);
    }

    public function updateProducts(Request $request, Product $product) {
        $validatedInput = $request -> validate([
            'name' => 'required|min:4',
            'price' => 'required|numeric|min:1000',
            'description' => 'nullable|min:10',
            'category' => 'required|in:manga,keychain,stationary,clothes,figure', // gimana cara update ke product -> category -> categoryName?
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:1000000',
            'image-name' => 'nullable|min:2|max:30'
        ]);

        if ($request -> hasFile('image')) {
            $img = $request -> file('image');
            $imgName = $request -> input('image-name');
            $imgType = $file -> getClientOriginalExtension(); // to obtain the image file type (png/jpeg/jpg)
            $imgPath = "public/assets/products/";
            // untuk upload file, file yang di-submit user di-upload ke direktori storage > app > public
            // direktori storage > app > public terhubung dengan direktori public > storage
            $img -> storeAs($imgPath, $imgName . '.' . $imgType);
        }

        $product -> update([
            'name' => $validatedInput['name'],
            'description' => $validatedInput['description'],
            'price' => $validatedInput['price'],
            'category' => $validatedInput['category'],
            'image' => $validatedInput['image'],
        ]);

        return redirect() -> route('products.view');
    }

    public function deleteProducts(Product $product) {
        $product -> delete();

        return redirect() -> route('products.view');
    }

    public function redirectCategory(Product $product) {
        if ($product -> category === 'clothes') {
            return redirect() -> route('clothes.view');
        }

        elseif ($product -> category === 'figure') {
            return redirect() -> route('figure.view');
        }

        elseif ($product -> category === 'keychain') {
            return redirect() -> route('keychain.view');
        }

        elseif ($product -> category === 'stationary') {
            return redirect() -> route('stationary.view');
        }

        else {
            return redirect() -> route('manga.view');
        }
    }
}
