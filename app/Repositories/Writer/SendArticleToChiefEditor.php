<?php

namespace App\Repositories\Writer ;

use App\Models\ArticleApprovalsChiefEditor;
use App\Models\User;

class SendArticleToChiefEditor
{
    public function __invoke($article)
    {
        ArticleApprovalsChiefEditor::create([
            "is_confirmation" => false , 
            "user_id" => $this->getIdInChiefEditor()->id , 
            "article_id" => $article->id , 
            "seen" => false
        ]);
    }

    private function getIdInChiefEditor()
    {
        return User::where("role" , "chiefeditor")->first();
    }
}