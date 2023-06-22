<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Productsmodel;
use App\Models\Subcategorymodel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Products extends Component
{
    use LivewireAlert;

    public $categories;
    public $selectedcategories = null;
    public $selectedsubcategories = null;
    public $subcategories;
    public $name, $description; 
    // $categories_id, $subcategories_id;

    protected $rules = [
        'selectedcategories' => 'required|integer',
        'selectedsubcategories' => 'required|integer',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'categories' => 'required',
    ];
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'description' => 'required',
            'name' => 'required',
            'selectedcategories' => 'required|exists:categories,id', // ensure the category exists
            'selectedsubcategories' => 'required|exists:subcategories,id', // ensure the subcategory exists
        ]);
    }

    public function mount()
    {
        $this->categories = Category::all();
        // $this->subcategories = Subcategorymodel::where('categories_id', $this->categories_id)->get();
        // $this->subcategories = Subcategorymodel::all();
    }


    public function render()
    {
        $products = Productsmodel::all();
        return view('livewire.products', ['products'=>$products]);
    }

    public function toast($heading, $type, $text )
    {
        $this->alert($type, $heading, [
            'position' =>  'top-end',
            'timer' =>  '3000',
            'toast' =>  true,
            'text' =>  $text,
        ]);
    }

    public function storeProducts()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'selectedcategories' => 'required|exists:categories,id',
            'selectedsubcategories' => 'required|exists:subcategories,id',
        ]);

        $products = new Productsmodel();

        $products->name = $this->name;
        $products->description = $this->description;
        $products->categories_id = $this->selectedcategories;
        $products->subcategories_id = $this->selectedsubcategories;

        $products->save();

        $this->toast('Added', 'success', 'Product Added');

        $this->name = '';
        $this->description = '';
        $this->selectedcategories = '';
        $this->selectedsubcategories = '';
    }

    public function updatedSelectedcategories($categories_id)
    {
        $this->subcategories = Subcategorymodel::where('categories_id', $categories_id)->get();
    }
}
