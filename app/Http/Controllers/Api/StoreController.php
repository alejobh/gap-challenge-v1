<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Store;

class StoreController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function getStores()
  {
    $stores = Store::orderBy('name', 'ASC')->get();
    $total = count($stores);
    return response()->json(['stores'=> $stores, 'success' => true, 'total_elements'=>$total]);
  }

  public function deleteStore($id)
  {
    $store = Store::find($id);
    $store->getArticles()->delete();
    $store->delete();

    return response()->json(['success' => true, 'msg'=>'deleted']);
  }

}
