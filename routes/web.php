<?php

use App\Twoot;

Route::get('/', function () {
    // Récupérer tous les "twoots" et les ajouter à la vue
    return view('app')->with([
        'twoots' => Twoot::all()
    ]);
});

//Ici, décommenter et créer la route '/about'
//Route::get('______', function(){
//    return ____; //Renvoyer la vue 'about' !
//});

Route::get('/about', function(){
	return view('about');
});

Route::post('/twoots', function(){
	if(request()->text){
		Twoot::create([
			'text' => request()->text.' blabla '. time()
		]);	
	}
	return redirect()->to('/');
   // Twoot::______([
   //     'text' => request()->____
   // ]);

   // return redirect()->to('_');
});

Route::get('twoots/{id}', function($id){
	return view('fullView')->with([
		'twoot' => Twoot::find($id)
	]);
});

Route::delete('twoots/{id}', function($id){
//    Trouver le twoot, puis le supprimer
//    Twoot::____($id)->______();
	Twoot::find($id)->delete();
	// Twoot::destroy($id);

    return redirect()->to('/');
});
