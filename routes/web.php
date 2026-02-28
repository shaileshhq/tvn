<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('login', function () {
    return redirect()->route('admin.login');
})->name('login');

//Home
Route::get('/',[FrontController::class, 'index'])->name('front.index');

//About
Route::get('about',[FrontController::class, 'about'])->name('front.about');
Route::get('principal',[FrontController::class, 'principal'])->name('front.principal');
Route::get('director',[FrontController::class, 'director'])->name('front.director');
Route::get('teacher',[FrontController::class, 'teacher'])->name('front.teacher');
Route::get('committee',[FrontController::class, 'committee'])->name('front.committee');


//Contact
Route::get('contact',[FrontController::class, 'contact'])->name('front.contact');
Route::post('contact-store',[ContactController::class, 'contactStore'])->name('front.contactStore');

//campus
Route::get('infrastructure',[FrontController::class, 'infrastructure'])->name('front.infrastructure');

//Admission
Route::get('nursery-nine',[FrontController::class, 'nurserynine'])->name('front.nursery-nine');
Route::post('nursery-nine-store',[FrontController::class, 'nurserynineStore'])->name('front.nurserynineStore');

Route::get('eleven',[FrontController::class, 'eleven'])->name('front.eleven');
Route::post('eleven-store',[FrontController::class, 'elevenStore'])->name('front.elevenStore');

Route::get('guideline',[FrontController::class, 'guideline'])->name('front.guideline');

Route::get('tc-form',[FrontController::class, 'tcform'])->name('front.tc-form');
Route::post('tcform-store',[FrontController::class, 'tcformStore'])->name('front.tcformStore');

//info corner
Route::get('timing',[FrontController::class, 'timing'])->name('front.timing');
Route::get('transport',[FrontController::class, 'transport'])->name('front.transport');
Route::get('affiliated',[FrontController::class, 'affiliated'])->name('front.affiliated');

Route::get('privacy-policy',[FrontController::class, 'privacy'])->name('front.privacy');
Route::get('terms-condition',[FrontController::class, 'terms'])->name('front.terms');
Route::get('refund-policy',[FrontController::class, 'refund'])->name('front.refund');

//photo Gallery
Route::get('gallery',[FrontController::class, 'gallery'])->name('front.gallery');

//News
Route::get('news',[FrontController::class, 'news'])->name('front.news');
Route::get('news-detail/{slug}',[FrontController::class, 'newsdetail'])->name('front.news-detail');

Route::get('event/{slug}',[FrontController::class, 'eventdetail'])->name('front.event-detail');

//Document
Route::get('document',[FrontController::class, 'document'])->name('front.document');
Route::get('important-notice',[FrontController::class, 'ImportantNotice'])->name('front.important-notice');

//
Route::get('registration',[FrontController::class, 'registration'])->name('front.registrationform');
Route::get('front-login',[FrontController::class, 'login'])->name('front.loginform');
