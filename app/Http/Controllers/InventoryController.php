<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Inventory;

class InventoryController extends Controller
{
    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    }

    public function index(Request $request)
    {
        $inventories = $this->inventory->all();
        return response()->view('index', ['inventories' => $inventories]);
    }

    public function form(Request $request)
    {
        return response()->view('form');
    }

    public function detail(Request $request, $id)
    {
        return response()->view('detail');
    }
   public function create(Request $request, $id)
    {
        $this->inventory->code=$requese->code;
        $this->inventory->id=$requese->name;
        $this->inventory->qty=$requese->jumlah;
        return response()->view('create');
        
          
        
        
    }
}
