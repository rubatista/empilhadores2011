<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class FrontendController extends Controller
{
    public function homepage()
    {
        return view('frontend.homepage');
    }

    public function contacto()
    {
        return view('frontend.contact');
    }

    public function pecas()
    {
        return view('frontend.pecas');
    }

    public function products()
    {
        $instock = ProductRepository::getProducts();
        return view('frontend.products', compact('instock'));
    }

    public function productsSubCategory($subcat)
    {
        $all_products = array();
        $subcategories = CategoryRepository::getSubCategories();
        $products = ProductRepository::getProducts();

        foreach ($subcategories as $subcategory) :
            $all_products += array($subcategory->name => array());
            foreach ($products as $product) :
                if ($product->sub_category->name == $subcategory->name) :
                    array_push($all_products[$subcategory->name], $product);
                endif;
            endforeach;
        endforeach;
        return view('frontend.categories', compact('all_products', 'subcategory', 'subcat'));
    }

    public function product($slug)
    {
        $instock = ProductRepository::getProducts();
        $product = ProductRepository::getProduct($slug);
        return view('frontend.product', compact('product', 'instock'));
    }
}
