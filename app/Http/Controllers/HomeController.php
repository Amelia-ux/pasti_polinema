<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Relation;
use App\Models\Team;
use App\Models\Workplan;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $workplan = Workplan::all();
        $relation = Relation::all();

        return view('home.index', compact(
            'about',
            'workplan',
            'relation'
        ));
    }

    public function tentang()
    {
        $about = About::all();
        $about = About::first();
        return view('home.tentang', compact(
            'about'
        ));
    }
    public function proker()
    {
        $workplan = Workplan::all();
        return view('home.proker', compact(
            'workplan'
        ));
    }
    public function struktur()
    {
        $team = Team::all();
        return view('home.struktur', compact(
            'team'
        ));
    }
    public function kontak()
    {
        $contact = Contact::all();
        return view('home.kontak', compact(
            'contact'
        ));
    }
}
