<?php 

class Comment extends Eloquent {

	protected $fillable = array('author', 'comment', 'articleId');
}