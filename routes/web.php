<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/products', function () {
    return view('products');
});
Route::get('/business', function () {
    return view('business');
})->name('business');

// Demo Request
use App\Http\Controllers\DemoRequestController;

Route::post('/request-demo', [DemoRequestController::class, 'requestDemo'])->name('request.demo');

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
// Route::get('/quiz', function () {
//     return view('quiz');
// });


// Products---------------------------------------------------------------------------------------------------------

Route::view('products/trainings', 'products.trainings');
Route::view('products/trainings/disrupting-unhappiness', 'products.trainings.disrupting-unhappiness');
Route::view('products/trainings/mental-wellness', 'products.trainings.mental-wellness');
Route::view('products/trainings/leading-positivity', 'products.trainings.leading-positivity');
Route::view('products/trainings/lead-with-smile', 'products.trainings.lead-with-smile');
Route::view('products/trainings/stress-mastery', 'products.trainings.stress-mastery');
Route::view('products/trainings/conflict-resolution', 'products.trainings.conflict-resolution');
Route::view('products/trainings/happiness-advantage', 'products.trainings.happiness-advantage');
Route::view('products/trainings/happiness-edge', 'products.trainings.happiness-edge');
Route::view('products/trainings/happiness-factor', 'products.trainings.happiness-factor');
Route::view('products/trainings/happiness-formula', 'products.trainings.happiness-formula');
Route::view('products/app', 'products.app');
Route::view('products/courses', 'products.courses');
Route::view('products/coaching', 'products.coaching');
Route::view('products/webinars', 'products.webinars');
Route::view('products/seminars', 'products.seminars');
Route::view('products/workshops', 'products.workshops');
Route::view('products/offsites', 'products.offsites');
Route::view('products/retreats', 'products.retreats');

Route::view('products/trainings/packages', 'products.packages');

Route::get('/booking-form', function () {
    return view('products.booking-form');
})->name('booking.form');


//-----Controllers--------------------------------------------------------------------------------------------------


//Subscribe
use App\Http\Controllers\SubscriptionController;

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

//Contact Us
use App\Http\Controllers\ContactController;

Route::post('/contact/send', [ContactController::class, 'send'])
    ->name('contact.send');


//Download Quiz
// use App\Http\Controllers\QuizController;

// Route::get('/quiz', [QuizController::class, 'downloadQuizPdf'])->name('quiz');

Route::get('/quiz', function () {
    return view('quiz');
});


use App\Http\Controllers\YoutubeController;

Route::get('/api/youtube-videos', [YoutubeController::class, 'getPlaylistVideos']);
