<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\PO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;

class POController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	public function index()
	{
		$list = PO::all();
		return view('pages.po',['poList'=>$list]);

	}
	public function create()
	{

	}
	public function store()
	{

	}
	public function show($id)
	{

	}
	public function edit($id)
	{

	}
	public function update($id)
	{
		$d = new PO;
 		$d->where('idtransaksi',$id)->update(['status' => Input::get('status')]);
		$list = PO::all();
		return view('pages.po',['poList'=>$list]);

        //return Redirect::to('/po');
	}
	public function destroy($id)
	{
		return Redirect::to('/po');
	}
}
