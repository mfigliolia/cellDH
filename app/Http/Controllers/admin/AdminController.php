<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Categorie;
use App\Brand;

class AdminController extends Controller
{
    public function index(){
        return view('admin/index');
    }

    public function showProducts(){
        $products = Product::paginate(5);


        return view('admin/products', ['productos' => $products]);
    }

    public function addProducts() {
        $categories = Categorie::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();

        return view('admin/add-product', ['categorias' => $categories, 'marcas' => $brands]);
    }

    public function storeProducts(Request $request) {
        request()->validate([
            'name' => 'max:255|unique:products',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required|image|max:2048'
        ], [
            'name.required' => 'El nombre de producto es obligatorio',
            'name.unique' => 'Cuidado, este producto ya existe',
            'name.max' => 'El título es muy largo',
            'description.required' => 'La descripción del producto es obligatoria',
            'price.required' => 'El precio es obligatorio',
            'photo.required' => 'Cargá la foto del producto'
        ]);
        
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = str_slug($request->input('name')) . '.' . $file->extension();
            $folder = 'images';
            $path = $file->storeAs($folder, $name);
        }
        /*if ($request->hasFile('photo')) {
            $nombreImagen = str_slug($request->input('name')) . '.' . $request->file('photo')->extension();
            $request->file('photo')->storeAs('images/products', $nombreImagen);
        }*/

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->categorie_id = $request->input('categorie_id');
        $product->brand_id = $request->input('brand_id');
        $product->photo = $name;
        $product->save();

        // $product = Product::create(request()->all());
        //return 'Producto cargado correctamente';

        return redirect('admin/products/add');
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Categorie::all();
        $brands = Brand::all();
        //dd($product);
        return view('admin/edit-product', ['producto' => $product, 'categorias' => $categories, 'marcas' => $brands]);
    }

    public function update(Request $request, $id) {
        $product = Product::find($id);

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = str_slug($request->input('name')) . '.' . $file->extension();
            $folder = 'images';
            $path = $file->storeAs($folder, $name);
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->categorie_id = $request->input('categorie_id');
        $product->brand_id = $request->input('brand_id');
        $product->photo = $name;

        $product->save();

        return redirect('admin/products');
    }

    public function destroy($id) {
        
        $product = Product::find($id);
        $product->delete();

        return redirect('admin/products');
    }

    
    // CATEGORÍAS //

    public function showCategories() {

        $categories = Categorie::all();

        return view('admin/categories', ['categorias' => $categories]);
    }

    public function addCategories() {
        return view('admin/add-categorie');
    }

    public function storeCategories(Request $request) {
        request()->validate([
            'name' => 'unique:categories'
        ], [
            'name.unique' => 'Cuidado, esta categoría ya existe'
        ]);

        $categorie = new Categorie;
        $categorie->name = request()->input('name');
        $categorie->save();

        return redirect('admin/categories/add');
    }

    // MARCAS //

    public function showBrands() {

        $brands = Brand::all();

        return view('admin/brands', ['marcas' => $brands]);
    }

    public function addBrands() {
        return view('admin/add-brand');
    }
    public function storeBrands(Request $request) {
        request()->validate([
            'name' => 'unique:brands'
        ], [
            'name.unique' => 'Cuidado, esta marca ya existe'
        ]);

        $categorie = new Brand;
        $categorie->name = request()->input('name');
        $categorie->save();

        return redirect('admin/brands/add');
    }
}
