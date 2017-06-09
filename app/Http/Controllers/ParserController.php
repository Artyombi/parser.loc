<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class ParserController extends Controller
{
    public function index()
    {
        return view('test')
            ->with('name', 'Maryna')
            ->with('param', session('param', 'This will be replaced after submit'))
            ->with('action', route('submit-parser'));
    }

    public function submit(Request $request)
    {
        return redirect()
            ->route('parser')
            ->with('param', $request->get('whateverName'));
    }
}
