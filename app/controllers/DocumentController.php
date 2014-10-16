<?php

class DocumentController extends BaseController {

    /*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function renderSingle()
    {
        $mdfilename = 'business-rules.md';

        $filename = storage_path('md/'. $mdfilename);
        $contents = File::get($filename);
        $mdrendered = Markdown::render($contents);

        $mdrendered = str_replace("<h1", "<h1 class='page-header'" , $mdrendered);
        $mdrendered = str_replace("<table", "<table class='table table-striped table-bordered'" , $mdrendered);


        $mdrendered = str_replace("<!--", "" , $mdrendered);
        $mdrendered = str_replace("-->", "" , $mdrendered);


        return View::make('single', array('mdrendered' => $mdrendered));
    }

    public function  t1()
    {
        $mdfilename = 't1.md';

        $filename = storage_path('md/'. $mdfilename);
        $contents = File::get($filename);
        $mdrendered = Markdown::render($contents);

        //$mdrendered = str_replace("<h1", "<h1 class='page-header'" , $mdrendered);
        //$mdrendered = str_replace("<table", "<table class='table table-striped table-bordered'" , $mdrendered);

        $html = new Htmldom($mdrendered);
        
        $html->find('h1', 0)->outertext = "<h1 class='page-header'>Foo</h1>";

        //foreach($html->find('h1') as $element) {
        //    echo $element->outertext. '<br>';
        //}

        echo $html;

        //return $mdrendered;
    }

}
