<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addToCart(Request $request)
    {
        $product = $request->input('product');
        $quantity = $request->input('quantity');
        $cart = session('cart', []);

        // If product already exists in cart, update quantity
        if (isset($cart[$product])) {
            $cart[$product] += $quantity;
        } else {
            // If product not in cart, add it
            $cart[$product] = $quantity;
        }

        // Store updated cart in session
        session(['cart' => $cart]);

        return response()->json([
            'message' => 'Product added to cart successfully',
            'cart' => $cart
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $product = $request->input('product');
        $cart = session('cart', []);

        if (isset($cart[$product])) {
            unset($cart[$product]);
            session(['cart' => $cart]);
            return response()->json([
                'message' => 'Product removed from cart successfully',
                'cart' => $cart
            ]);
        }

        return response()->json([
            'message' => 'Product not found in cart',
            'cart' => $cart
        ], 404);
    }
}