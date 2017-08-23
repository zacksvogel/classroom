<?php

// Home Page
Route::get('/', 'DailyFactsController@index');

// Login Stuff
Auth::routes();

// Login Required
Route::get('/home', 'HomeController@index')->name('home');




// No login Required
Route::get('/aboutMe', function () {
    return view('pages.aboutMe');
});
Route::get('/classSchedule', function () {
    return view('pages.classSchedule');
});
Route::get('/ctelab', function () {
    return view('pages.ctelab');
});
Route::get('/ctepathways', function () {
    return view('pages.ctepathways');
});
Route::get('/studentProjects', function () {
    return view('pages.studentProjects');
});
Route::get('/weather', function () {
    return view('pages.weather');
});
Route::get('/countdownTimers', function () {
    return view('pages.countdownTimers');
});

// Chapters
Route::get('/chapters/accounting', function () {
    return view('pages.chapters.accounting');
});
Route::get('/chapters/avProductions', function () {
    return view('pages.chapters.avProductions');
});
Route::get('/chapters/busEssentials', function () {
    return view('pages.chapters.busEssentials');
});
Route::get('/chapters/businessMang', function () {
    return view('pages.chapters.businessMang');
});
Route::get('/chapters/entrepreneurship', function () {
    return view('pages.chapters.entrepreneurship');
});
Route::get('/chapters/videoProductions', function () {
    return view('pages.chapters.videoProductions');
});
Route::get('/chapters/webpageDesign', function () {
    return view('pages.chapters.webpageDesign');
});

//Accounting
	Route::get('/chapters/acctChapters/acctCh1', function () {
	    return view('pages.chapters.acctChapters.acctCh1');
	});
	Route::get('/chapters/acctChapters/acctCh2', function () {
	    return view('pages.chapters.acctChapters.acctCh2');
	});
	Route::get('/chapters/acctChapters/acctCh3', function () {
	    return view('pages.chapters.acctChapters.acctCh3');
	});
	Route::get('/chapters/acctChapters/acctCh4', function () {
	    return view('pages.chapters.acctChapters.acctCh4');
	});
	Route::get('/chapters/acctChapters/acctCh5', function () {
	    return view('pages.chapters.acctChapters.acctCh5');
	});
	Route::get('/chapters/acctChapters/acctCh6', function () {
	    return view('pages.chapters.acctChapters.acctCh6');
	});
	Route::get('/chapters/acctChapters/acctCh7', function () {
	    return view('pages.chapters.acctChapters.acctCh7');
	});
	Route::get('/chapters/acctChapters/acctCh8', function () {
	    return view('pages.chapters.acctChapters.acctCh8');
	});
	Route::get('/chapters/acctChapters/acctCh9', function () {
	    return view('pages.chapters.acctChapters.acctCh9');
	});
	Route::get('/chapters/acctChapters/acctCh10', function () {
	    return view('pages.chapters.acctChapters.acctCh10');
	});
	Route::get('/chapters/acctChapters/acctCh11', function () {
	    return view('pages.chapters.acctChapters.acctCh11');
	});
	Route::get('/chapters/acctChapters/acctCh12', function () {
	    return view('pages.chapters.acctChapters.acctCh12');
	});
	Route::get('/chapters/acctChapters/acctCh13', function () {
	    return view('pages.chapters.acctChapters.acctCh13');
	});
	Route::get('/chapters/acctChapters/acctCh14', function () {
	    return view('pages.chapters.acctChapters.acctCh14');
	});
	Route::get('/chapters/acctChapters/acctCh15', function () {
	    return view('pages.chapters.acctChapters.acctCh15');
	});
	Route::get('/chapters/acctChapters/acctCh16', function () {
	    return view('pages.chapters.acctChapters.acctCh16');
	});
	Route::get('/chapters/acctChapters/acctChr1a', function () {
	    return view('pages.chapters.acctChapters.acctChr1a');
	});
	Route::get('/chapters/acctChapters/acctChr1b', function () {
	    return view('pages.chapters.acctChapters.acctChr1b');
	});
	Route::get('/chapters/acctChapters/acctChr2a', function () {
	    return view('pages.chapters.acctChapters.acctChr2a');
	});
	Route::get('/chapters/acctChapters/acctChr2b', function () {
	    return view('pages.chapters.acctChapters.acctChr2b');
	});
	Route::get('/chapters/acctChapters/simulation', function () {
	    return view('pages.chapters.acctChapters.simulation');
	});


// AV Productions
	Route::get('/chapters/avChapters/videoEquipment', function () {
	    return view('pages.chapters.avChapters.videoEquipment');
	});
	Route::get('/chapters/avChapters/videoComposition', function () {
	    return view('pages.chapters.avChapters.videoComposition');
	});
	Route::get('/chapters/avChapters/mutedNewsPackage', function () {
	    return view('pages.chapters.avChapters.mutedNewsPackage');
	});
	Route::get('/chapters/avChapters/firstNewsPackage', function () {
	    return view('pages.chapters.avChapters.firstNewsPackage');
	});
	Route::get('/chapters/avChapters/badLipReading', function () {
	    return view('pages.chapters.avChapters.badLipReading');
	});
	Route::get('/chapters/avChapters/stopMotion', function () {
	    return view('pages.chapters.avChapters.stopMotion');
	});
	Route::get('/chapters/avChapters/secondNewsPackage', function () {
	    return view('pages.chapters.avChapters.secondNewsPackage');
	});
	Route::get('/chapters/avChapters/finalProject', function () {
	    return view('pages.chapters.avChapters.finalProject');
	});


// Business Management
	Route::get('/chapters/bmChapters/bmBusinessPlan', function () {
	    return view('pages.chapters.bmChapters.bmBusinessPlan');
	});
	Route::get('/chapters/bmChapters/bmCh1', function () {
	    return view('pages.chapters.bmChapters.bmCh1');
	});
	Route::get('/chapters/bmChapters/bmCh2', function () {
	    return view('pages.chapters.bmChapters.bmCh2');
	});
	Route::get('/chapters/bmChapters/bmCh3', function () {
	    return view('pages.chapters.bmChapters.bmCh3');
	});
	Route::get('/chapters/bmChapters/bmCh4', function () {
	    return view('pages.chapters.bmChapters.bmCh4');
	});
	Route::get('/chapters/bmChapters/bmCh10', function () {
	    return view('pages.chapters.bmChapters.bmCh10');
	});
	Route::get('/chapters/bmChapters/bmCh23', function () {
	    return view('pages.chapters.bmChapters.bmCh23');
	});


// Business Essentials
	Route::get('/chapters/busEssentials/busEssentialsCh1', function () {
	    return view('pages.chapters.busEssentials.busEssentialsCh1');
	});
	Route::get('/chapters/busEssentials/busEssentialsCh5', function () {
	    return view('pages.chapters.busEssentials.busEssentialsCh5');
	});
	Route::get('/chapters/busEssentials/busEssentialsCh6', function () {
	    return view('pages.chapters.busEssentials.busEssentialsCh6');
	});
	Route::get('/chapters/busEssentials/busEssentialsCh7', function () {
	    return view('pages.chapters.busEssentials.busEssentialsCh7');
	});
	Route::get('/chapters/busEssentials/busEssentialsCh9', function () {
	    return view('pages.chapters.busEssentials.busEssentialsCh9');
	});
	Route::get('/chapters/busEssentials/busEssentialsCh10', function () {
	    return view('pages.chapters.busEssentials.busEssentialsCh10');
	});
	Route::get('/chapters/busEssentials/busEssentialsCh16', function () {
	    return view('pages.chapters.busEssentials.busEssentialsCh16');
	});


// Entrepreneurship
	Route::get('/chapters/entreChapters/entreCh1', function () {
	    return view('pages.chapters.entreChapters.entreCh1');
	});
	Route::get('/chapters/entreChapters/entreCh2', function () {
	    return view('pages.chapters.entreChapters.entreCh2');
	});
	Route::get('/chapters/entreChapters/entreCh3', function () {
	    return view('pages.chapters.entreChapters.entreCh3');
	});
	Route::get('/chapters/entreChapters/entreCh5', function () {
	    return view('pages.chapters.entreChapters.entreCh5');
	});
	Route::get('/chapters/entreChapters/entreCh6', function () {
	    return view('pages.chapters.entreChapters.entreCh6');
	});
	Route::get('/chapters/entreChapters/entreCh7', function () {
	    return view('pages.chapters.entreChapters.entreCh7');
	});
	Route::get('/chapters/entreChapters/businessPlan', function () {
	    return view('pages.chapters.entreChapters.businessPlan');
	});


// Video Productions


// Webpage Design
	Route::get('/chapters/webChapters/webBootstrap', function () {
	    return view('pages.chapters.webChapters.webBootstrap');
	});
	Route::get('/chapters/webChapters/webDesign', function () {
	    return view('pages.chapters.webChapters.webDesign');
	});
	Route::get('/chapters/webChapters/webDevops', function () {
	    return view('pages.chapters.webChapters.webDevops');
	});
	Route::get('/chapters/webChapters/webFinalProject', function () {
	    return view('pages.chapters.webChapters.webFinalProject');
	});
	Route::get('/chapters/webChapters/webhtml', function () {
	    return view('pages.chapters.webChapters.webhtml');
	});
	Route::get('/chapters/webChapters/webJavascript', function () {
	    return view('pages.chapters.webChapters.webJavascript');
	});
	Route::get('/chapters/webChapters/webMisc', function () {
	    return view('pages.chapters.webChapters.webMisc');
	});










// don't use below -> just use as an example

// Route::get('page', function () {
//     return view('page');
// })->middleware('auth');
//only can access if logged in


// Route::get('page2', function () {
//     return view('page2');
// })->middleware('guest');
//only can access if not logged in


// Route::get('page3', function () {
//     return view('page3');
// });
//can access if logged in or not logged in