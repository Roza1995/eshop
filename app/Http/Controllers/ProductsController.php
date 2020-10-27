<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use Illuminate\Http\Request;
use App\Product;
use App\Testimonial;


class ProductsController extends Controller
{
  public function getProducts(Request $request)
  {

    $limit = $request->input('limit');
    $searchText = $request->input('search');
    $filteredProduct = $request->input('filteredProduct');

    if (empty($limit) || ($limit > 100)) {
      $request['limit'] = 100;
    }
    $products = Product::paginate($limit);

    if ($searchText) {
      $products = Product::select('id', 'name', 'type', 'imgUrl')
        ->where('name', 'LIKE', "%$searchText%")->get();
    }

    if($filteredProduct){
      $products = Product::select('id', 'name', 'type', 'imgUrl')->where(
        'type', '=', "$filteredProduct")->get();
    }

    if ($searchText && $filteredProduct) {
      $products = Product::select('id', 'name', 'type', 'imgUrl')
        ->where('name', 'LIKE', "%$searchText%")
        ->Where('type', '=', "$filteredProduct")->get();
    }

    return new ProductCollection($products);

  }

  public function getTestimonials()
  {
    $testimonials = Testimonial::all();
    return response()->json($testimonials);
  }

  public function getProductById($id)
  {
    $product = Product::find($id);
    $images = Product::find($id)->images()->get();
    $product['images'] = $images;
    return response()->json($product);
  }
  public function getTypes(){

    $types = Product::distinct()->get(['type']);
    return response()->json($types);
  }







}
