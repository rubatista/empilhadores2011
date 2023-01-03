<?php

namespace App\Repositories;

//Models
use App\Models\Product;
use App\Models\SubCategory;

class ProductRepository
{
  public static function getProducts()
	{
		return Product::with([
				'product_details' => function ($query) {
					$query->where('product_id', '!=', null)
								->get();
				},
				'sub_category' => function ($query) {
					$query->where('name', '!=', null)
								->get();
				}
			])
			->where('is_active', '=', true)
			->get();
	}

	public static function getProductSubcategory($subcategory)
	{
		$subcat = SubCategory::where('slug', $subcategory)->first();
		return Product::with([
				'product_details' => function ($query, $subcat) {
					$query->where('product_id', '!=', null)
								->get();
				},
				'sub_category' => function ($query, $subcat) {
					$query->where('slug', $subcat)
								->get();
				}
			])
			->where('is_active', '=', true)
			->get();
	}
	

	public static function getProduct($product)
	{
		return Product::where('slug', 'like', $product)
			->with([
				'product_details' => function ($query) {
					$query->where('product_id', '!=', null)->get();
				},
				'prices' => function ($query) {
					$query->where('product_id', '!=', null)->get();
				},
				'sub_category' => function ($query) {
					$query->with([
						'category' => function ($query) {
							$query->where('name', '!=', null)->get();
						}
					])
					->where('name', '!=', null)->get();
				}
			])
			->first();
	}
}
