<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Article;
use App\Store;

class ArticleController extends Controller
{
    public function getArticles() {
      //gets all the articles
      $articles = Article::with(['store_name:id,name'])->orderBy('name', 'DESC')->get();

      //Call the solving function of the article's store_name value
      $articles_solved = $this->solveArticle($articles);

      //gets the length of the $articles collection
      $total = count($articles);

      //Returns the json response
      return response()->json(['articles'=> $articles_solved, 'success' => true, 'total_elements'=>$total]);
    }


    public function getArticlesByStore($id) {
      //$id is not a number
      if(is_numeric($id)){

        //Try to find an store with that $id
        $store = Store::find($id);

        //Store not found (is null)
        if($store===null) {
          return response()->json(['success' => false, 'error_code'=> 404, 'error_msg' => config('constants.HTTP.404')]);
        }

        /*
        * Store found
        */

        //Call the solving function of the article's store_name value
        $articles_solved = $this->solveArticle($store->getArticles);

        //gets the length of the $articles collection
        $total = count($articles_solved);

        //returns the json response
        return response()->json(['articles'=> $articles_solved, 'success' => true, 'total_elements'=>$total]);

      } else {
        return response()->json(['success' => false, 'error_code'=> 400, 'error_msg' => config('constants.HTTP.400')]);
      }
    }

    public function deleteArticle($id)
    {
      return \DB::transaction(function () use ($id) {
        $article = Article::find($id);
        $article->delete();
        return response()->json(['success' => true, 'msg'=>'deleted']);
      });
    }

    public function updateArticle(Request $request, $id)
    {
      return \DB::transaction(function () use ($id, $request) {
        $this->validate($request, [
          'name' => 'required|max:255',
          'description' => 'required|string',
          'price' => 'required',
          'total_in_shelf' => 'required',
          'total_in_vault' => 'required',
        ]);
        $article = Article::find($id);
        if($article!=null){
          $article->name = $request['name'];
          $article->description = $request['description'];
          $article->price = $request['price'];
          $article->total_in_shelf = $request['total_in_shelf'];
          $article->total_in_vault = $request['total_in_vault'];
          $store->save();
          return response()->json(['success' => true, 'store'=>$store]);
        } else {
          return response()->json(['success' => false, 'error_code'=> 404, 'error_msg' => config('constants.HTTP.404')]);
        }
      });

    }

    /*
    * The next function is to solve that an article will always have a store_name with {id, name} and we need just the name
    * @return Collection of articles
    */
    private function solveArticle($articles) {
      $articles_solved = [];
      foreach($articles as $article) {

        //The next line converts the article toJson just to get the properties that we want, and then use json_decode to let it be a array[]
        $article_single = json_decode($article->toJson());


        //this line assigns to the property 'store_name' of the object article to its name
        $article_single->store_name = $article->store_name->name;

        // pushes to the $articles_solved array
        array_push($articles_solved, $article_single);
      }
      //returns the solved articles array
      return $articles_solved;
    }
}
