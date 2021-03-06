<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        //dd($products);
        return view('products.index')->with('products', $products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'pd_code'    => 'required',
            'pd_name'    => 'required',
            'pd_detail'  => 'required',
            'pd_price'   => 'required|numeric'
            //'created_at' => 'required',
            //'updated_at' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('products/create')
                ->withErrors($validator);
                //->withInput(Input::except('password'));
        } else {
            // store
            $product = new Product();
            /*$product->pd_code       = $request->get('pd_code');
            $product->pd_name       = $request->get('pd_name');
            $product->pd_detail     = $request->get('pd_detail');
            $product->pd_price      = $request->get('pd_price');
            $product->created_at    = $request->get('created_at');
            $product->updated_at    = $request->get('updated_at');
            $product->save();*/

            $product->pd_code       = Input::get('pd_code');
            $product->pd_name       = Input::get('pd_name');
            $product->pd_detail     = Input::get('pd_detail');
            $product->pd_price      = Input::get('pd_price');
            $product->created_at    = Input::get('created_at');
            $product->updated_at    = Input::get('updated_at');
            $product->save();

            // redirect
            Session::flash('message', 'Successfully Created Product!');
            return Redirect::to('products');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the nerd
        $product = Product::find($id);
        // show the view and pass the nerd to it
        return View::make('products.show')
            ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $product = Product::find($id);

        // show the edit form and pass the nerd
        return View::make('products.edit')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'pd_code'    => 'required',
            'pd_name'    => 'required',
            'pd_detail'  => 'required',
            'pd_price'   => 'required|numeric'
            //'created_at' => 'required',
            //'updated_at' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('products/' . $id . '/edit')
                ->withErrors($validator);
                //->withInput(Input::except('password'));
        } else {
            // store
            $product = Product::findOrfail($id);
            $product->pd_code       = Input::get('pd_code');
            $product->pd_name       = Input::get('pd_name');
            $product->pd_detail     = Input::get('pd_detail');
            $product->pd_price      = Input::get('pd_price');
            $product->created_at    = Input::get('created_at');
            $product->updated_at    = Input::get('updated_at');
            $product->save();

            // redirect
            Session::flash('message', 'Successfully updated Product!');
            return Redirect::to('products');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $product = Product::find($id);
        $product->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Product!');
        return Redirect::to('products');
    }
}
