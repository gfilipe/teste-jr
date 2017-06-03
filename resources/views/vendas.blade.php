<!DOCTYPE html>
<html>
    <head>
        <title>API Vendas - Gabriel Filipe Carvalho</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 22px;
            }
			.vendedor{
				color: red;
				font-weight: bold;
				font-style: italic;
				font-family: arial !important;
				font-size: 14px;
			}
			.email{
				color: blue;
				font-weight: bold;
				font-style: italic;
				font-family: arial !important;
				font-size: 14px;
			}
			.produto{
				color: brown;
				font-weight: bold;
				font-style: italic;
				font-family: arial !important;
				font-size: 14px;
			}
			.valor{
				color: #333;
				font-weight: bold;
				font-style: italic;
				font-family: arial !important;
				font-size: 14px;
			}
			.autor{
				color: purple;
				font-family: arial !important;
				font-size: 12px;
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Documentação API para inserção de vendas</div>
				<small class="autor">criado por: Gabriel Filipe Carvalho</small>
				<br/><br/>
				<span style="font-weight: bold; font-family: arial;">URL da API:</span>
				<p>http://localhost/teste-jr/public/vendas/<span class="vendedor">{nome_vendedor}</span>/<span class="email">{email}</span>/<span class="produto">{nome_produto}</span>/<span class="valor">{valor_venda}</span></p>
				<br/><br/>
				<span style="font-weight: bold; font-family: arial;">Informações sobre os parametros da URL</span>
				<ul>
					<li style="text-align: left;">nome_vendedor - texto</li>
					<li style="text-align: left;">email - texto</li>
					<li style="text-align: left;">nome_produto - texto</li>
					<li style="text-align: left;">valor_venda - decimal(ex.: 1.200,35 ou 1200,35)</li>
				</ul>
				<br/><br/>
				<span style="font-weight: bold; font-family: arial;">Valor Retornado pela API: um array json</span>
				<?php 
					$retorno = array(
						'Nome' => 'Gabriel Carvalho',
						'E-mail' => 'gabriel@teste.com.br',
						'Valor de Comissao' => 157.35
					);
				?>
				<p><?php echo '<pre>'.json_encode($retorno,JSON_PRETTY_PRINT).'</pre>'; ?></p>
			</div>
        </div>
    </body>
</html>
