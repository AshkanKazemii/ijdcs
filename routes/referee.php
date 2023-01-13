<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Referee\Dashboard\DashboardPage;
use App\Http\Controllers\Referee\ArticleManagment\ViewTestArticle;
use App\Http\Controllers\Referee\ArticleManagment\CommentingToArticle;
use App\Http\Controllers\Referee\ArticleManagment\CommentingToArticlePage;


Route::prefix("/panels/referee")->middleware(["auth" , "IdentityValidationReferee"])->group(function($route) {


    $route->get("/", DashboardPage::class)->name("referee.index");


    $route->get("/commenting-to-article/{id}", CommentingToArticlePage::class)->name("referee.commenting-to-article");
    $route->post("/commenting-to-article/{id}", CommentingToArticle::class);


    $route->get("/test/{id}", ViewTestArticle::class)->name("referee.view-test-articles-for-approval");

}) ;