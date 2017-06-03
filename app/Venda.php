<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
	protected $table = 'vendas';
	public $timestamps = false;
	private $id_venda;
	private $nome_vendedor;
	private $email_vendedor;
	private $produto;
	private $valor_venda;
	private $porcentagem_comissao;
	private $valor_comissao;
	private $data_venda;
	
	public function lastID(){
		$id_venda = Venda::table('vendas')->select('nome_vendedor','email','valor_comissao')->orderBy('data_venda','desc')->limit(1)->get();
		return $id_venda;
	}
	
}
