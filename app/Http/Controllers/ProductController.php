<?php

namespace App\Http\Controllers;

use App\Models\AssetModel;
use App\Models\TypeModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data = TypeModel::with('assets')->get();

        return view('pages.landing.product', compact('data'));
    }

    public function detail($id){
        $asset = AssetModel::find($id);
        return view('pages.landing.detail', compact('asset'));
    }
}
