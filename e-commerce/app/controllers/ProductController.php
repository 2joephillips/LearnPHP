<?php

class ProductController extends BaseController
{
	public function indexAction()
	{
		$query = Product::with(["category"]);
		$category = Input::get("categoty");

		if($category)
		{
			$query->where("category_id", $category);
		}

		return $query->get();
	}
}