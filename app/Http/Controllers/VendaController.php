<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Venda;

class VendaController extends Controller
{
	
	private $venda;
	
	
	public function __construct(Venda $venda){
		$this->venda = $venda;
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendas');
    }
	
	public function cadastrar($nome_vendedor,$email,$produto,$valor_venda){
		$venda = new Venda();
		$venda->nome_vendedor = $nome_vendedor;
		$venda->email = $email;
		$venda->produto = $produto;
		$source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source,$replace,$valor_venda);
		$venda->valor_venda = $valor;
		$porcentagemComissao = 8.5;
		$venda->porcentagem_comissao = $porcentagemComissao;
		date_default_timezone_set("America/Sao_Paulo");
		$venda->data_venda = date('Y-m-d H:i:s');
		$venda->valor_comissao = $valor * ($porcentagemComissao/100);
		$venda->save();
		$sales = Venda::orderBy('data_venda','desc')->first();
		$result = array(
			'Nome' => $sales->nome_vendedor,
			'E-mail' => $sales->email,
			'Valor de Comissao' => $sales->valor_comissao
		);
		return view('resultado')->with('resultado',json_encode($result,JSON_PRETTY_PRINT));
	}

    
}
