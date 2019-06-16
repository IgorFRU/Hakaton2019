<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Good;

class SearchController extends Controller
{
    public function index(Request $reqest) {
        $data = array (
            'in_name' => Good::where('product_name', 'LIKE', "%$reqest->search%")->get(),
            'in_description' => Good::where('description', 'LIKE', "%$reqest->search%")->get()
        );

        // dd($data);

        return view('dashboard/search', $data);
    }
}
