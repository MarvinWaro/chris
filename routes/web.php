<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');




Route::get('applicant_form', function () {
    return view('applicant_form');
})->name('applicant_form');




Route::get('dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('admin_employees', function () {
    return view('admin.employees');
})->name('admin_employees');

Route::get('create_employees', function () {
    return view('admin.create_employees');
})->name('create_employees');

Route::get('admin_department', function () {
    return view('admin.organization.admin_department');
})->name('admin_department');

Route::get('technical_department', function () {
    return view('admin.organization.technical_department');
})->name('technical_department');
