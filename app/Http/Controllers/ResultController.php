<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{

	public function index()
	{
		$raw_data = json_decode(file_get_contents(asset('storage/results.txt')));

		$page = !isset($_GET['page']) ? 1 : $_GET['page'];
		$limit = 4;
		$offset = ($page - 1) * $limit;
		$total_items = count($raw_data);
		$total_pages = ceil($total_items / $limit);
		if($raw_data){
			$final = array_splice($raw_data, $offset, $limit);
		} else {
			$final = false;
		}
		$view = view('index');

		$view->json =  $final;


		return $view;
	}

	public function load()
	{

		$raw_data = json_decode(file_get_contents(asset('storage/results.txt')));

		$page = $_GET['page'];
		$limit = 4;
		$offset = ($page - 1) * $limit;
		$total_items = count($raw_data);
		$total_pages = ceil($total_items / $limit);
		$final = array_splice($raw_data, $offset, $limit);

		return $final;
	}


}
