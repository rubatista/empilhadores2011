<?php

namespace App\Repositories;

//Models
use App\Models\Product;
use App\Models\SubCategory;

class CategoryRepository
{
  public static function getSubCategories()
	{
		return SubCategory::where('name', '!=', null)
			->get();
	}
}
