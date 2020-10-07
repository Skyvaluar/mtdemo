<?php

namespace App\Http\Controllers\PartialViewControllers;

use App\Http\Controllers\Controller;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DataThreeController extends Controller
{
    public function index()
    {
        // Keywords classes used to to search in "original.blade.php". Extracted HTML from EDB-priser
        $classTags = array(
            'productName' => '',
            'description-container' => '',
            'price-box' => '',
        );

        $replacers = array();
        
        // Rendering view to simulate getting HTML from 3rd party site.
        $view = View::make('original')->render();
        $dom = new DOMDocument('1.0', 'utf-8');
        $dom->loadHTML($view);
        $dom->preserveWhiteSpace = false;

        // Love Regex, but not happy about the memory issues that it can cause (from experience) 
        // and decided to go with DOMXPath instead.
        $searchHTML = new DOMXPath($dom);

        // Searching for occurrences 
        foreach($classTags AS $class => $value){
            $nodes = $searchHTML->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $class ')]");
            foreach($nodes AS $node){
                $replacers[] = preg_replace('/\s+/', ' ', $node->nodeValue);
            }
        }

        return view('partials.data-tab-three', compact('replacers'));
    }
}
