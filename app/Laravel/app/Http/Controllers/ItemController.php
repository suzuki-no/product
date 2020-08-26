<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemStock;
use App\Consts\ItemConst;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $results = array();
        $results = Item::where('item_kind', 'test')->get();
        return view('items/index',[
          'items' => $results,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }

    //追加 取得
    public function details(Request $request)
    {

        $results =array();

        $results['item'] = Item::where('item_id', request('ii'))->first();
        $results['stock'] = ItemStock::where('item_id', request('ii'))->where('put_slot',1)->first();
        $extax = $results['item']['sell_price'];
        return view('items/details',[
          'item' => $results['item'],
          'stock' => $results['stock'],
          'sell_price_intax' => ( $extax / ItemConst::TAX ) + $extax,
        ]);

      //return view('items/details',['item_id' => request('item_id')]);
    }

    //追加 取得
    public function getItems()
    {

        $swapList = array();
        $results = array();
        $itemList = Item::all();

        foreach(ItemConst::ItemKind as $index ){
          foreach($itemList as $value ){
            if($value['item_kind'] === $index){
              $swapList[$index][] = $value;
            };
          };
          $results[$index] = $swapList[$index];
        };
        return $results;
        /*
        $results = array();
        $results["item"] = Item::all();
        return $results;
        */
    }
}
