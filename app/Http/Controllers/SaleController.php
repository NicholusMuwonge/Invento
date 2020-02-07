<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ItemSales;
use App\Models\Servicing;
use App\Models\Inventory;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $user_id = \Auth::user()->getUserInfo()['sub'];
        $sales = ItemSales::with("service","item")->where('user_id',$user_id)->get();
        return view('dashboard.sales')->with('sales', $sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service=Servicing::all();
        $item=Inventory::all();
        return view('dashboard.saleCreate', compact('service','item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // define user id from Auth0
        $user_id = \Auth::user()->getUserInfo()['sub'];
        $request->request->add(['user_id' => $user_id]);
        $request->validate([
            'item_id'=>'required',
            'service_id'=>'required',
            'type'=>'required'
        ]);

        $sale = new ItemSales([
            'item_id' => $request->get('item_id'),
            'service_id' => $request->get('service_id'),
            'type' => $user_id,
            'user_id' => $request->get('user_id'),
            'quantity' => $request->get('quantity'),
            'total_cost' => $request->get('total_cost')
        ]);
        $sale->save();
        // ItemSales::create($request->all());

        return redirect('dashboard/sale')->with('success', 'Sale created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $sale = ItemSales::where("id",$id)->get();
        // $user_id = \Auth::user()->getUserInfo()['sub'];
        // $item_id = $sale->item->id;
        // $service_id = $sale->service->id;
        // $itemInfo = Inventory::with('id')->get()->find($item_id);
        // $serviceInfo = Servicing::with('id')->get()->find($service_id);
        // return view('dashboard.saleSingle', compact('sale', 'user_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = ItemSales::with("service","item")->where('id',$id)->get()->first();
        $item_id = $sale->item->id;
        $service_id = $sale->service->id;
        $itemInfo = Inventory::with('id')->get()->find($item_id);
        $serviceInfo = Inventory::with('id')->get()->find($service_id);
        return view('dashboard.saleEdit', compact('sale', 'itemInfo','serviceInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sale)
    {
        $sale->user_id = 1;

        $sale->save();
        return redirect('dashboard/sales')->with('success', 'Successfully updated your sale!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sale)
    {
        $sale = ItemSales::find($sale->id);
        $sale->delete(); 

      return redirect('dashboard/sales')->with('success', 'Successfully deleted your sale!');
    }
}

// https://www.youtube.com/playlist?list=PLillGF-RfqbYhQsN5WMXy6VsDMKGadrJ-
