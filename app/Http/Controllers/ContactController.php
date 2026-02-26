<?php

namespace App\Http\Controllers;

use Domain\Contact\ViewModel\ContactViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index():View
    {
       $items = ContactViewModel::make()->contacts();
       return view('contacts.items', compact('items'));
    }

    public function search(Request $request):View
    {

        $value = trim($request->search);
        $items = ContactViewModel::make()->search($value);
        return view('contacts.items', compact('items', 'value'));


    }

}
