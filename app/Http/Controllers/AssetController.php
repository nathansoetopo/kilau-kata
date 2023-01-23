<?php

namespace App\Http\Controllers;

use App\Models\TypeModel;
use App\Models\AssetModel;
use App\Models\AuthorModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PublisherModel;
use App\Models\CategoriesModel;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    public function index(){
        $data = AssetModel::with('author', 'category', 'type', 'publisher')->get();
        return view('admin.pages.book.index', compact('data'));
    }

    public function create(){
        $publishers = PublisherModel::all();
        $authors = AuthorModel::all();
        $categories = CategoriesModel::all();
        $types = TypeModel::all();

        return view('admin.pages.book.create', compact('publishers', 'authors', 'categories', 'types'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'price' => 'numeric|required',
            'category_id' => 'numeric|required',
            'type' => 'numeric|required',
            'author_id' => 'numeric|required',
            'publisher_id' => 'numeric|required',
            'realese_date' => 'date|required',
            'cover' => 'max:2000|required'
        ]);

        DB::beginTransaction();
        try{
            $cover = $request->file('cover')->store('cover');

            $store = AssetModel::create([
                'category_id' => $request->category_id,
                'author_id' => $request->author_id,
                'publisher_id' => $request->publisher_id,
                'type_id' => $request->type,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description ?? '-',
                'price' => $request->price,
                'realese_date' => $request->realese_date,
                'cover' => $cover
            ]);

            $type = TypeModel::find($request->type);

            if($type->asset == 1){

                $asset = '-';

                if($request->hasFile('asset')){
                    $asset = $request->file('asset')->store('assets');
                }elseif($request->url != NULL){
                    $asset = $request->url;
                }

                $store->book()->create([
                    'page' => $request->page ?? 0,
                    'isbn' => $request->isbn ?? 0,
                    'asset' => $asset
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Data Buku Berhasil Ditambahkan');
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function edit(Request $request, $id){
        $publishers = PublisherModel::all();
        $authors = AuthorModel::all();
        $categories = CategoriesModel::all();
        $types = TypeModel::all();
        $data = AssetModel::with('author', 'category', 'type', 'publisher', 'book')->find($id);

        return view('admin.pages.book.edit', compact('publishers', 'authors', 'categories', 'types', 'data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'price' => 'numeric|required',
            'category_id' => 'numeric|required',
            'type' => 'numeric|required',
            'author_id' => 'numeric|required',
            'publisher_id' => 'numeric|required',
            'realese_date' => 'date|required',
            'cover' => 'max:2000|sometimes'
        ]);

        DB::beginTransaction();
        try{
            $data = AssetModel::with('book')->find($id);

            if($request->hasFile('cover')){
                if(Storage::exists($data->cover)){
                    Storage::delete($data->cover);
                }
                $cover = $request->file('cover')->store('cover');
            }

            $data->update([
                'category_id' => $request->category_id,
                'author_id' => $request->author_id,
                'publisher_id' => $request->publisher_id,
                'type_id' => $request->type,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'description' => $request->description ?? '-',
                'price' => $request->price,
                'realese_date' => $request->realese_date,
                'cover' => $cover ?? $data->cover
            ]);

            $type = TypeModel::find($request->type);

            if($type->asset == 1){
                if($request->hasFile('asset')){
                    if(Storage::exists($data->book->asset)){
                        Storage::delete($data->book->asset);
                    }
                    $asset = $request->file('asset')->store('assets');
                }elseif($request->url != NULL){
                    $asset = $request->url;
                }else{
                    $asset = $data->book->asset;
                }

                $data->book()->update([
                    'page' => $request->page ?? $data->page,
                    'isbn' => $request->isbn ?? $data->isbn,
                    'asset' => $asset
                ]);
            }

            DB::commit();
            return redirect()->back()->with('success', 'Data Buku Berhasil Ditambahkan');
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back()->withErrors($e->getMessage());
        }
    }

    public function delete($id){
        $data = AssetModel::with('book', 'type')->find($id);

        if($data->type->asset == 1){
            if(Storage::exists($data->book->asset)){
                Storage::delete($data->book->asset);
            }
        }

        if(Storage::exists($data->cover)){
            Storage::delete($data->cover);
        }

        $data->delete();
        return redirect()->back()->with('success', 'Data Buku Berhasil Dihapus');
    }
}
