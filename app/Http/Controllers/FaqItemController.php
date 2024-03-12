<?php

namespace App\Http\Controllers;
use App\Models\FaqItem;

class FaqItemController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqItems = FaqItem::all();
        return view('index', compact('faqItems'));
    }

}
