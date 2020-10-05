<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Enumerations\CategoryType;
use App\Http\Requests\ProductStockRequest;
use App\Http\Requests\GeneralProductRequest;
use App\Http\Requests\ProductPriceValidation;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id', 'slug', 'price', 'created_at')->paginate(PAGINATION_COUNT);
        return view('admin.pages.products.general.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['brands']  = Brand::active()->select('id')->get();
        $data['tags']  = Tag::select('id')->get();
        $data['categories']  = Category::active()->select('id')->get();

        return view('admin.pages.products.general.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralProductRequest $request)
    {
        DB::beginTransaction();

        //validation

        if (!$request->has('is_active'))
            $request->request->add(['is_active' => 0]);
        else
            $request->request->add(['is_active' => 1]);

        $product = Product::create([
            'slug' => $request->slug,
            'brand_id' => $request->brand_id,
            'is_active' => $request->is_active,
        ]);
        //save translations
        $product->name = $request->name;
        $product->description = $request->description;
        $product->short_description = $request->short_description;
        $product->save();

        //save product categories

        $product->categories()->attach($request->categories);

        //save product tags

        $product->tags()->attach($request->tags);

        DB::commit();
        return redirect()->route('products.index')->with(['success' => 'تم ألاضافة بنجاح']);
    }

    public function getPrice($product_id)
    {

        return view('admin.pages.products.prices.create')->with('id', $product_id);
    }

    public function saveProductPrice(ProductPriceValidation $request)
    {
        try {

            Product::whereId($request->product_id)->update($request->only(['price', 'special_price', 'special_price_type', 'special_price_start', 'special_price_end']));

            return redirect()->route('products.index')->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
        }
    }

    public function getStock($product_id)
    {

        return view('admin.pages.products.stock.create')->with('id', $product_id);
    }

    public function saveProductStock(ProductStockRequest $request)
    {

        Product::whereId($request->product_id)->update($request->except(['_token', 'product_id']));

        return redirect()->route('products.index')->with(['success' => 'تم التحديث بنجاح']);
    }
}
