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
    return \DB::transaction(function () use ($id) {
      $store = Store::find($id);
      $store->getArticles()->delete();
      $store->delete();

      return response()->json(['success' => true, 'msg'=>'deleted']);
    });
  }

  public function updateStore(Request $request, $id)
  {
    return \DB::transaction(function () use ($id, $request) {
      $this->validate($request, [
        'name' => 'required|max:255',
        'address' => 'required|max:255'
      ]);
      $store = Store::find($id);
      if($store!=null){
        $store->name = $request['name'];
        $store->address = $request['address'];
        $store->save();
        return response()->json(['success' => true, 'store'=>$store]);
      } else {
        return response()->json(['success' => false, 'error_code'=> 404, 'error_msg' => config('constants.HTTP.404')]);
      }
    });

  }
}
