<?php



namespace App\Repositories ;

use App\Models\Article;

class ShowArticleTest 
{
    public function __invoke($id)
    {
        return Article::find($id) ;
    }
}