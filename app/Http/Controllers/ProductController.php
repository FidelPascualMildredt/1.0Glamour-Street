<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('products.create');
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size limit as needed
            'material' => 'nullable|string',
            'stock' => 'nullable|integer',
            'code' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            // Add validation rules for other fields as needed
        ]);
        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }
        // Create the product with the validated data
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
            'material' => $request->material,
            'stock' => $request->stock,
            'code' => $request->code,
            'category_id' => $request->category_id,
            // Add other fields as needed
        ]);
        // Redirect the user to a relevant page
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file size limit as needed
            'material' => 'nullable|string',
            'stock' => 'nullable|integer',
            'code' => 'nullable|string',
            'category_id' => 'sometimes|required|exists:categories,id',
            // Agregar validaciones para los demás campos según sea necesario
        ]);

        // Actualizar los datos del producto
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->material = $request->material;
        $product->stock = $request->stock;
        $product->code = $request->code;
        $product->category_id = $request->category_id;
        // Si se proporcionó una nueva imagen, almacenarla
        // Verificar si se proporcionó un nuevo archivo de imagen
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Verificar si la imagen es válida
            if ($image->isValid()) {
                // Generar un nombre único para la imagen
                $imageName = time() . '.' . $image->getClientOriginalExtension();

                // Mover la imagen a la carpeta 'public/images'
                $image->move(public_path('images'), $imageName);

                // Actualizar el nombre de la imagen en el modelo del producto
                $product->image = $imageName;
            } else {
                // Manejar el caso de que la imagen no sea válida
                return redirect()->back()->with('error', 'La imagen no es válida.');
            }
        }


        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado correctamente');
    }

    public function displayProducts()
    {

        $products = Product::all();
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        return view('welcome', compact('products', 'categories', 'colors', 'sizes'));
    }
}
