<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index(Request $request)
    {
        if(!empty($request->query('search'))){
            $status = $request->query('search');
            //dd($status);
            $products = Product::where('status', $status)->get();
       } else {
        $products = Product::all();
       }
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $form_data = $this->validation($request->all());


        //dd($form_data);
        $new_product = Product::create($form_data);
        return redirect()->route('products.show', $new_product->id);
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $form_data = $request->all();
        $product->title = $form_data['title'];
        $product->price = $form_data['price'];
        $product->description = $form_data['description'];
        $product->status = $form_data['status'];
        $product->available = $form_data['available'];
        $product->update();
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
    private function validation($data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|max:98',
            'price' => 'required|max:99999|min:0',
            'description' => '',
            'status' => 'required|max:30',
            'available' => 'required'


        ], [
            'title.required' => 'il titolo ?? richiesto',
            'title.max' => 'il titolo non puo superare i :max caratteri',
            'price.required' => 'il prezzo ?? richiesto',
            'price.max' => 'il prezzo non puo superare :max ??',
            'price.min' => 'il prezzo non puo essere inferiore a :min ??',
            'status.required' => 'definire lo stato del prodotto ',
            'status.max' => 'lo stato del prodotto  non puo  superare i :max caratteri',
            'available.required' => 'la disponibilit?? ?? richiesta '
        ])->validate();

        return $validator;
    }
}