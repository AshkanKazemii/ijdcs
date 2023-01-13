<?php

use App\Http\Controllers\Writer\ArticlesManagment\EditArticlePage;
use App\Http\Controllers\Writer\ArticlesManagment\StatusArticles;
use App\Http\Controllers\Writer\ArticlesManagment\SubmitEditedArticle;
use App\Http\Controllers\Writer\Dashboard\DashboardPage;
use App\Http\Controllers\Writer\RegistrationArticle\RegistrationArticlePage;
use App\Http\Controllers\Writer\RegistrationArticle\SubmissionArticle;
use Illuminate\Support\Facades\Route;


Route::prefix("/panels/writer")->middleware(["auth" , "IdentityValidationWriter"])->group(function($route) {

    $route->get("/", DashboardPage::class)->name("writer.index");

    $route->get("/registeration-article" , RegistrationArticlePage::class)->name("writer.registeration-article-page") ;
    $route->post("/registeration-article" , SubmissionArticle::class)->name("writer.submission-article") ;

    $route->get("/articles-managment/status-articles" , StatusArticles::class)->name("writer.status-articles") ;
    
    $route->get("/articles-managment/edit-article/{id}" , EditArticlePage::class)->name("writer.edit-article") ;
    $route->post("/articles-managment/edit-article/{id}" , SubmitEditedArticle::class)->name("writer.submission-edition-article") ;

});