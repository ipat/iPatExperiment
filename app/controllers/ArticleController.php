<?php

class ArticleController extends \BaseController {

	function __construct() {
		$this->beforeFilter('auth', array('except' => array('index')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Article::get());
	}


	


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Article::create(array(
			'title' => Input::get('title'),
			'content' => Input::get('content'),
			'author' => Auth::user()->name,
			'author_id' => Auth::user()->id),
			'isDraft' => Input::get('isDraft'),
			'online_time' => Input::get('online_time'));
		return Response::json(array('success' => true));
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Article::find($id));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return Response::json(Article::find($id));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$article = Article::find($id);
		$article->title = Input::get('title');
		$article->content = Input::get('content');
		$article->isDraft = Input::get('isDraft');
		$article->online_time = Input::get('online_time');
		$article->save();

		return Response::json(array("success" => true));
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);
		$article->delete();

		return Response::json(array("success" => true));
	}


}
