<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
  return view('frontend.pages.login');
});

Route::get('/', function () {
  return view('frontend.pages.home');
});

Route::get('/about', function () {
  return view('frontend.pages.about');
});

Route::get('/project', function () {
  return view('frontend.pages.project');
});

Route::get('/detail-project', function () {
  return view('frontend.pages.detail-project');
});

Route::get('/donasi', function () {
  return view('frontend.pages.donasi');
});
