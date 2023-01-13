<?php

use App\Http\Controllers\ChiefEditor\ArticleManagment\ApprovalArticle;
use App\Http\Controllers\ChiefEditor\ArticleManagment\ApprovalArticleByCheifEditor;
use App\Http\Controllers\ChiefEditor\ArticleManagment\ApprovedArticles;
use App\Http\Controllers\ChiefEditor\ArticleManagment\ArticlesCommentedByReferees;
use App\Http\Controllers\ChiefEditor\ArticleManagment\PublishedArticle;
use App\Http\Controllers\ChiefEditor\ArticleManagment\RejectApprovedArticle;
use App\Http\Controllers\ChiefEditor\ArticleManagment\RejectionArticle;
use App\Http\Controllers\ChiefEditor\ArticleManagment\ViewCommentsReferee;
use App\Http\Controllers\ChiefEditor\ArticleManagment\ViewSubmittedArticlesForApprovalPage;
use App\Http\Controllers\Chiefeditor\ArticleManagment\ViewTestArticle;
use App\Http\Controllers\ChiefEditor\Dashboard\DashboardPage;
use App\Http\Controllers\Referee\ArticleManagment\ViewTestArticle as ArticleManagmentViewTestArticle;
use Illuminate\Support\Facades\Route;


Route::prefix("/panels/chief_editor")->middleware(["auth" , "IdentityValidationChiefEditor"])->group(function($route) {


    $route->get("/", DashboardPage::class)->name("chiefeditor.index");


    $route->prefix("/submitted-articles-for-approval")->group(function($route) {

        $route->get("/", ViewSubmittedArticlesForApprovalPage::class)->name("chiefeditor.submitted-articles-for-approval");

        $route->get("/success/{id}", ApprovalArticle::class)->name("chiefeditor.submitted-articles-for-approval.success");
        $route->get("/rejection/{id}", RejectionArticle::class)->name("chiefeditor.submitted-articles-for-approval.reject");

        $route->get("/test/{id}", ArticleManagmentViewTestArticle::class)->name("chiefeditor.view-test-articles-for-approval");

    });
    

    $route->prefix("/approved-articles")->group(function($route) {

        $route->get("/", ApprovedArticles::class)->name("chiefeditor.approved-articles");
        

        $route->get("/view_comments_referees/{id}", ViewCommentsReferee::class)->name("chiefeditor.view_comments_referees");
        $route->post("/view_comments_referees/Abstain-referee/{article_id}/{user_id}", ApprovalArticleByCheifEditor::class)->name("chiefeditor.Abstain-from-the-referee");


        $route->get("/rejection/{id}", RejectApprovedArticle::class)->name("chiefeditor.rejection.articles-approved");

    });

    $route->get("/published-articles", PublishedArticle::class)->name("chiefeditor.published-articles");


    $route->get("/articles_commented_by_referees", ArticlesCommentedByReferees::class)->name("chiefeditor.articles-commented-by-referees");

}) ;