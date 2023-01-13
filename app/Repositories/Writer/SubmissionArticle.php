<?php

namespace App\Repositories\Writer ;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SubmissionArticle 
{
    public function __invoke($data)
    {
        $fileName = $this->uploadArticleFile($data);
        $exists_file = $this->existsArticleFile($fileName) ;
        
        if($exists_file){
            $article = Article::create([
                "title" => $data['title'] , 
                "lang" => $data['lang'] , 
                "keywords" => $data['keywords'] , 
                "fa_abstract" => $data['fa_abstract'] , 
                "en_abstract" => $data['en_abstract'] , 
                "file" => $fileName , 
                "description" => $data['description'] , 
                "resources" => $data['resources'] , 
                "quarterly_id" => 1 ,
                "user_id" => Auth::user()->id , 
                "failed" => "null"
            ]);
            
            return $article ;
        } 

        return false;
    }

    private function uploadArticleFile($data)
    {
        return $data->file("file")->store("article");
    }

    private function existsArticleFile($article_file_name)
    {
        return (File::exists(public_path() . "/{$article_file_name}")) ? true : false ;
    }

}