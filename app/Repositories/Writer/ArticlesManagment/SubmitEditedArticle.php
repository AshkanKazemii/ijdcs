<?php


namespace App\Repositories\Writer\ArticlesManagment;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class SubmitEditedArticle extends RevivalArticle {


    public function __invoke($data)
    {

        if(isset($data['file'])) {
            $article = $this->editionArticleWithFile($data) ;
            $this->revivalArticle($article->id) ;
            return $article;
        } 
        
        $article = $this->editionArticleWithOutFile($data);
        $this->revivalArticle($article->id) ;
        return $article ;
    }

    private function editionArticleWithFile($data) 
    {
        $fileName = $this->uploadArticleFile($data);
        $exists_file = $this->existsArticleFile($fileName) ;
        if($exists_file){
            $this->deletePreviousFile($data['id']);
            $article = Article::where("id" , "=" , $data['id'])->update([
                "title" => $data['title'] , 
                "lang" => $data['lang'] , 
                "keywords" => $data['keywords'] , 
                "fa_abstract" => $data['fa_abstract'] , 
                "en_abstract" => $data['en_abstract'] , 
                "file" => $fileName , 
                "description" => $data['description'] , 
                "resources" => $data['resources'] , 
                "user_id" => Auth::user()->id , 
            ]);
            
            return $this->getArticle($data['id']) ;
        } 

        return false;
    }

    private function editionArticleWithOutFile($data) 
    {
        $article = Article::where("id" , "=" , $data['id'])->update([
            "title" => $data['title'] , 
            "lang" => $data['lang'] , 
            "keywords" => $data['keywords'] , 
            "fa_abstract" => $data['fa_abstract'] , 
            "en_abstract" => $data['en_abstract'] , 
            "description" => $data['description'] , 
            "resources" => $data['resources'] , 
            "user_id" => Auth::user()->id , 
        ]);
        
        return $this->getArticle($data['id']) ;
    }


    private function uploadArticleFile($data)
    {
        return $data->file("file")->store("article");
    }

    private function existsArticleFile($article_file_name)
    {
        return (File::exists(public_path() . "/{$article_file_name}")) ? true : false ;
    }

    private function deletePreviousFile($article_id)
    {
        $article_file_name = $this->getArticle($article_id)->file;
        return File::delete(public_path() . "/{$article_file_name}");
    }

    private function getArticle($article_id)
    {
        return Article::find($article_id);
    }

 
    
}