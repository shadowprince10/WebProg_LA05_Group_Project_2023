<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function viewWishlist($userID) {
        $user = User::find($userID);
        $wishlist = $user -> wishlist() -> with('product') -> get();
        // with('product') loads product model for each wishlist

        return view('wishlist', ['title' => 'Wishlist', 'wishlist' => $wishlist]);
    }

    public function addToWishlist(Request $request, Product $product) {
        $user = Auth::user();

        // check if the product is already added on the wishlist or already exists on the wishlist
        if(!$user -> wishlist() -> where('productID', $product -> productID) -> exists()) {
            $wishlist = new Wishlist();
            $wishlist -> userID = $user -> id;
            $wishlist -> productID = $product -> productID;
            $wishlist -> save();
        }

        return redirect() -> route('wishlist.view');
    }

    public function removeFromWishlist (Wishlist $wishlist) {
        $wishlist -> delete();

        return redirect() -> route('wishlist.view');
    }
    // mahasiswa_2.blade.php
    // ada $mahasiswa di dalam root mahasiswa_2.blade.php, lalu return mahasiswa_2.blade.php dengan $mahasiswa diganti dengan array data $items_list
    // paling berguna kalau sudah connect dengan database
}
