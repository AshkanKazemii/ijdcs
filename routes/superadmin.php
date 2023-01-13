<?php

use App\Http\Controllers\Superadmin\ArticleManagment\PublishedArticle;
use App\Http\Controllers\Superadmin\ArticleManagment\PublishedArticleListPage;
use App\Http\Controllers\Superadmin\ArticleManagment\RejectedArticle;
use App\Http\Controllers\Superadmin\ArticleManagment\RejectedArticleListPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\Dashboard\CreateNewUser;
use App\Http\Controllers\Superadmin\Dashboard\DashboardPage;
use App\Http\Controllers\Superadmin\Jurnal\DeleteRoleJurnal;
use App\Http\Controllers\Superadmin\Jurnal\DefiningRoleJurnal;
use App\Http\Controllers\Superadmin\Dashboard\CreateNewUserPage;
use App\Http\Controllers\Superadmin\Jurnal\DefiningPersonsJurnal;
use App\Http\Controllers\Superadmin\Quarterly\CreateNewQuarterly;
use App\Http\Controllers\Superadmin\Jurnal\DefiningRoleJurnalPage;
use App\Http\Controllers\Superadmin\Jurnal\DefiningPersonsJurnalPage;
use App\Http\Controllers\Superadmin\Jurnal\DeletePersonJurnal;
use App\Http\Controllers\Superadmin\Quarterly\CreateNewQuarterlyPage;


Route::prefix("/panels/superadmin")->middleware(["auth" , "IdentityValidationSuperadmin"])->group(function($route) {


    $route->get("/", DashboardPage::class)->name("superadmin.index");

    $route->post("/published-article/{id}", PublishedArticle::class)->name("superadmin.published-article");
    $route->post("/rejected-article/{id}", RejectedArticle::class)->name("superadmin.rejected-article");

    $route->get("/published-article-list", PublishedArticleListPage::class)->name("superadmin.published-article-list");
    $route->get("/rejected-article-list", RejectedArticleListPage::class)->name("superadmin.rejected-article-list");

    $route->get("/create-user", CreateNewUserPage::class)->name("superadmin.create-user");
    $route->post("/create-user", CreateNewUser::class);

    $route->get("/create-quarterly", CreateNewQuarterlyPage::class)->name("superadmin.create-quarterly");
    $route->post("/create-quarterly", CreateNewQuarterly::class);


    $route->get("/defining-role-jurnal", DefiningRoleJurnalPage::class)->name("superadmin.defining-role-jurnal");
    $route->post("/defining-role-jurnal", DefiningRoleJurnal::class);
    $route->post("/defining-role-jurnal/delete/{id}", DeleteRoleJurnal::class)->name("superadmin.delete-role-jurnal");


    $route->get("/defining-persons-jurnal", DefiningPersonsJurnalPage::class)->name("superadmin.defining-persons-jurnal");
    $route->post("/defining-persons-jurnal", DefiningPersonsJurnal::class);
    $route->post("/defining-persons-jurnal/delete/{id}", DeletePersonJurnal::class)->name("superadmin.delete-persons-jurnal");
}) ;