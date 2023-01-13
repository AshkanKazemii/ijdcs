<?php



namespace App\Repositories ;

use App\Models\Article;

class ShowArticle 
{
    public function __invoke($id)
    {
        return Article::where("failed" , "=" , "0")->findOrFail($id) ;
    }
}