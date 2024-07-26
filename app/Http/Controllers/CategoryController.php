<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use BotMan\Drivers\Telegram\Extensions\Keyboard;
use BotMan\Drivers\Telegram\Extensions\KeyboardButton;



class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function preguntarSioNo(){
        $botones = array(KeyboardButton::create('✅ SI')->callbackData('si'), KeyboardButton::create('❌ NO')->callbackData('no'));
        $inlineKeyboard = Keyboard::create()
                                    ->type(Keyboard::TYPE_INLINE)
                                    ->oneTimeKeyboard(false)
                                    ->addRow(
                                        $botones[0],$botones[1]
                                        )
                                        ->addSameRow(0,
                                        KeyboardButton::create('✅ SI')->callbackData('si')
                                            )
                                    ->toArray();    
        echo json_encode($inlineKeyboard);
    }

    
     public function create()
    {
        //return view('categories.create');
        $this->preguntarSioNo();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
