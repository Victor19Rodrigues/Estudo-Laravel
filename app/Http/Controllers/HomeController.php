<?php

//Ele está dentro desse diretório 
namespace App\Http\Controllers;

//Extende o Controller.php
use App\Http\Controllers\Controller;

//Biblioteca de requisições
use Illuminate\Http\Request;

//Usar o Model
use App\Lista;

/**
 * 
 */
class HomeController extends Controller{
	
	public function home(){
		//echo 'Testando 1,2,3...';

		/*$array = array(
			'nome' => 'Victor',
			'idade' => '24',
			'sobrenome' => 'Rodrigues'
		);*/
		
		//Pegar todos os registros da tabela
		$lista = Lista::all();

		//Condições de consulta
		//get(): pega os registros
		//delete(): apaga os registros
		//$lista = Lista::where('id','10')->get();
		//$lista = Lista::where('id','<','10')->get();
		//$lista = Lista::where('id','<','10')->limit(3)->get();

		$array = array(
			'lista' => $lista
		);

		// returna view('nome_da_view', array), o array manda as coisas para a view
		return view('home', $array);
	}

	/*public function teste(){
		echo 'Vitão do Laravel';
	}*/

	public function add(Request $req){
		if ($req->has('item')) {
			$item = $req->input('item');

			$lista = new Lista;

			//item é o nome do campo na tabela
			//Para add
			$lista->item = $item;
			$lista->save();

			//Update
			//$lista = Lista::find(id);
			//$lista->item = 'Novo Texto';
			//$lista->save();
		}
		return redirect('/');
		
	}

	public function del($id){
		Lista::find($id)->delete();

		return redirect('/');
	}
}
?>