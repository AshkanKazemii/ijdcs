<?php

namespace App\Repositories\ChiefEditor\Dashboard ;

use App\Models\ArticleApprovalsChiefEditor;

class ViewPostedArticles
{

    public function __invoke()
    {
        return ArticleApprovalsChiefEditor::where("seen" , "=" , false)->get();
    }
}