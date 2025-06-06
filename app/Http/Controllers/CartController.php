<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //metodos de la clase que son llamados por route/web.php
    public function cart()
    {
        //logica para mostrar el carrito
        return view('cart');
    }

    public function add_to_cart(Request $request)
    {
        //Logica para engadir un producto al carrito
        //Aqui podes acceer aos datos do formulario usando  $request->input('nome_do_campo')
        
        if ($request->session()->has('cart')) {
             $cart = $request->session()->get('cart');

            $products_array_ids = array_column($cart, 'id');
            $id = $request->input('id');

            if(!in_array($id, $products_array_ids)){
                //Si el producto no está en el carrito, lo añadimos
                $id = $request->input('id');
                $name = $request->input('name');
                $image = $request->input('image');
                $price = $request->input('price');
                $quantity = $request->input('quantity'); //La cantidad por defectro es 1
                $sale_price = $request->input('sale_price'); //Precio de venta si existe

                if ($sale_price != null){
                    $price_to_charge = $sale_price; //Si hay precio de venta lo usamos
                }else{
                    $price_to_charge = $price; //Si no hay precio de venta usamos el precio normal
                }
                $product_array = array(
                    'id' => $id,
                    'name' => $name,
                    'image' => $image,
                    'price' => $price_to_charge,
                    'quantity' => $quantity
                );
                $cart[$id] = $product_array; //Añadimos el producto al carrito
                $request->session()->put('cart', $cart); //Actualizamos la sesion
            } else {
                echo "<script>alert('El producto ya está en el carrito.')</script>";
            }
            $this->calculateTotalCart($request);
            return view('cart');
        } else{
            //Si el carrito no existe, lo creamos y añadimos el producto
            $cart = array();
            //Añadimo sproducto a cart
       
            $id = $request->input('id');
            $name = $request->input('name');
            $image = $request->input('image');
            $price = $request->input('price');
            $quantity = $request->input('quantity'); //La cantidad por defectro es 1
            $sale_price = $request->input('sale_price'); //Precio de venta si existe
            if ($sale_price != null){
                $price_to_charge = $sale_price; //Si hay precio de venta lo usamos
            }else{
                $price_to_charge = $price; //Si no hay precio de venta usamos el precio normal
            }
            $product_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'price' => $price_to_charge,
                'quantity' => $quantity
            );
            $cart[$id] = $product_array; //Añadimos el producto al carrito
            $request->session()->put('cart', $cart); //Actualizamos la sesion

            $this->calculateTotalCart($request);
            return view('cart');
        }
    }
    
    public function calculateTotalCart(Request $request)
    {
        $cart = $request->session()->get('cart');
        $total_price = 0;
        $total_quantity = 0;

        foreach($cart as $id => $product){
            $product = $cart[$id];
            $price = $product['price'];
            $quantity = $product['quantity'];
            //$total_price += $price * $quantity; //Precio total del prodcucto
            //$total_quantity += $quantity; //Cantidad total de productos
            $total_price = $total_price + ($price * $quantity);
            $total_quantity = $total_quantity + $quantity;
        }

        //Actualizamos el total del carrito en la sesion
        $request->session()->put('total', $total_price);
        $request->session()->put('quantity', $total_quantity);
    }

    function remove_from_cart(Request $request){

        if($request->session()->has('cart')){

            $id = $request->input('id');
            $cart = $request->session()->get('cart');

            unset($cart[$id]);

            $request->session()->put('cart', $cart);

            $this->calculateTotalCart($request);

        }

        return view('cart');
    }

    function edit_product_quantity(Request $request){

        if($request->session()->has('cart')){

            $product_id = $request->input('id');
            $product_quantity = $request->input('quantity');

            if($request->has('decrease_product_quantity_btn')){
                $product_quantity = $product_quantity - 1;
            }else if($request->has('increase_product_quantity_btn')){
                $product_quantity = $product_quantity + 1;
            }else{

            }

            if($product_quantity<=0){
                $this->remove_from_cart($request);
            }

            $cart = $request->session()->get('cart');

            if(array_key_exists($product_id, $cart)){
                $cart[$product_id]['quantity'] = $product_quantity;

                $request->session()->put('cart', $cart);

                $this->calculateTotalCart($request);
            }
        }

        return view('cart');
    }

    function checkout(){
        return view('checkout');
    }

    function place_order(Request $request){

        if($request->session()->has('cart')){

            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $city = $request->input('city');
            $address = $request->input('address');

            $cost = $request->session()->get('total');
            $status = "not paid";
            $date = date('Y-m-d');

            $cart = $request->session()->get('cart');

            $order_id = DB::table('orders')->InsertGetId([
                'name'=>$name,
                'email'=>$email,
                'phone'=>$phone,
                'city'=>$city,
                'address'=>$address,
                'cost'=>$cost,
                'status'=>$status,
                'date'=>$date
            ], 'id');

            foreach ($cart as $id => $product){

                $product = $cart[$id];
                $product_id = $product['id'];
                $product_name = $product['name'];
                $product_price = $product['price'];
                $product_quantity = $product['quantity'];
                $product_image = $product['image'];

                DB::table('order_items')->insert([
                    'order_id'=>$order_id,
                    'product_id'=>$product_id,
                    'product_name'=>$product_name,
                    'product_price'=>$product_price,
                    'product_quantity'=>$product_quantity,
                    'product_image'=>$product_image,
                    'order_date'=>$date
                ]);

            }

            $request->session()->put('order_id', $order_id);

            return view('payment');

        }else{
            return redirect('/');
        }
    }

}
