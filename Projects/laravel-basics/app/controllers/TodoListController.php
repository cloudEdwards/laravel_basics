<?php

class todoListController extends \BaseController {


	public function __construct() {

		$this->beforeFilter('csrf', array ('on'=>['post','put', 'delete']));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$todo_lists = TodoList::all();
		return View::make('todos/index')->with('todo_lists', $todo_lists);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('todos/create');
	}
	


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		//define rules
		$rules = array ( 
			'name'=> array ( 
			'required','unique:todo_lists' )
		);
		
		// create validator
		$validator = Validator::make(Input::all(),$rules);

		// test if validator fails
		if ($validator->fails()) 
		{
			return Redirect::route('todo.create')->withErrors($validator)->withInput();
		}

		// handle form input and save to database
		$name = Input::get('name');
		$list = new TodoList();
		$list->name = $name;
		$list->save();

		return Redirect::route('todos.index')->withMessage('Congrats! You made a database do stuff :)');
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$list = TodoList::findOrFail($id);
		$items = $list->listItems()->get();
		return View::make('todos.show')->withList($list)
			->withItems($items);
	}

/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$list = TodoList::findOrFail($id);
		return View::make('todos.edit')->withList($list);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//define rules
		$rules = array ( 
			'name'=> array ( 
			'required','unique:todo_lists' )
		);
		
		

		// create validator
		$validator = Validator::make(Input::all(),$rules);

		// test if validator fails

		if ($validator->fails()) {
			return Redirect::route('todos.edit', $id)->withErrors($validator)->withInput();
		}

			// handle form input and save to database
		$name = Input::get('name');
		$list =  TodoList::findOrFail($id);
		$list->name = $name;
		$list->update();
		return Redirect::route('todos.index')->withMessage('Congrats! Update successful.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$todo_list = TodoList::findOrFail($id)->delete();
		return Redirect::route('todos.index')->withMessage('List Destroyed Successfully');
	}


}
