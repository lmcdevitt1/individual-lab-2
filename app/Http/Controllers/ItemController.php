<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = [
            new Item([
                'name' => 'Hot Coffee',
                'size' => 'Small',
                'price' => 2.49
            ]),
            new Item([
                'name' => 'Hot Coffee',
                'size' => 'Medium',
                'price' => 2.99
            ]),
            new Item([
                'name' => 'Hot Coffee',
                'size' => 'Large',
                'price' => 3.49
            ]),
            new Item([
                'name' => 'Hot Coffee',
                'size' => 'Extra Large',
                'price' => 3.89
            ]),
            new Item([
                'name' => 'Iced Coffee',
                'size' => 'Small',
                'price' => 2.79
            ]),
            new Item([
                'name' => 'Iced Coffee',
                'size' => 'Medium',
                'price' => 3.29
            ]),
            new Item([
                'name' => 'Iced Coffee',
                'size' => 'Large',
                'price' => 3.79
            ])
        ];

        return view('app', ['items' => $items]);
    }
}
