<?php 

//Ele está dentro de App
namespace App;

//Chama o Eloquent
use Illuminate\Database\Eloquent\Model;

//O Eloquent pega o nome do Model e adiciona um 's' para pegar o nome da tabela
//Como o meu Model tem o mesmo nome da tabela, criamos uma variavel protected

/**
 * 
 */
class Lista extends Model{
	
	//Especifica o nome da tabela
	protected $table = 'lista';

	//O Laravel subentende que há esses campos na tabela: created_at OU updated_at
	//Porem no nosso caso nao temos

	//Quando for criar ou fazer update da tabela, o eloquent não precisa usar os requisitos de data
	public $timestamps = false;

	
}



?>