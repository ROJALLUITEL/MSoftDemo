<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills=Bill::all();
        return view('bill.index',['bills'=>$bills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bill.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
            $request->validate([
                'price' => 'required|numeric|min:0',
                'discount' => 'required|numeric|min:0|max:100',
            ]);
            $price = $request->input('price');
            $discount = $request->input('discount');
        
            $total = $price - ($price * ($discount / 100));
            Bill::create([
                'company_name' => $request->input('company_name'),
                'customer_name' => $request->input('customer_name'),
                'location' => $request->input('location'),
                'contact' => $request->input('contact'),
                'items' => $request->input('items'),
                'price' => $price,
                'discount' => $discount,
                'total' => $total,  
            ]);
            return redirect()->route('bill.index')->with('success', 'Bill added successfully!');
        }
        

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function show(Bill $bill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit(Bill $bill)
    {
        return view('bill.edit',['bill'=>$bill]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bill $bill)
    {
        $data = $request->validate([
            'company_name'=> 'required',
            'customer_name'=> 'required',
            'location' => 'required',
            'contact' => 'required',
            'items' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'total' => 'required'

          ]);
          $bill ->update($data);
          return redirect (route('bill.index'))->with('success' ,'bill updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bill $bill)
    {
        $bill->delete();
        return redirect (route('bill.index'))->with('success' ,'bill deleted successfully');
    }

    public function calculateTotal(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric|min:0',
            'discount' => 'required|numeric|min:0|max:100',
        ]);

        $price = $request->input('price');
        $discount = $request->input('discount');

        $total = $price - ($price * ($discount / 100));

        return redirect()->route('discount.form')->with('total', $total);
    }

}
