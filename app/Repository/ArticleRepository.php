<?php
namespace App\Repository;

use App\Repository\AbstractRepository;
use App\Eloquent\Article;

class ArticleRepository extends AbstractRepository
{

	/**
	 * ArticleRepository constructor.
	 * @param Article $article
     */
	public function __construct(Article $article){
		$this->model = $article;
	}
}