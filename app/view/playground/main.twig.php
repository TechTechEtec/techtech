{% extends "partials/layout.twig.php" %}

{% block title %} Playground | Techtech {% endblock %}

{% block aditionalStyle %} 
    <link rel="stylesheet" type="text/css" href="{{BASE}}portugol/assets/css/editor.css">
{% endblock %}

{% block main %}

<h1 class="my-2 text-darkpurple uppercase font-bold tex-2xl md:text-3xl">Playground</h1>

<!-- Header with some actions -->
<div class="w-full my-[1rem] mx-auto rounded-lg border-2 border-solid border-lightpurple bg-lightpurple p-1">

	<div id="header">
		<div id="doc-metas">
			<input type="text" id="fld-title" value="" placeholder="Nome do arquivo">		
		</div>

		<ul id="menu">
			<li class="menu-item">
				<a href="javascript:;">Arquivo</a>
				<ul class="menu-subitem">
					<li><a href="javascript:;" class="btn-new-file"><i class="icon icon-file"></i> Novo</a></li>
					<li><a href="javascript:;" class="btn-open-file" data-modal="modal-open-file"><i class="icon icon-folder"></i> Abrir...</a></li>
					<li><a href="javascript:;" class="btn-rename-file">Renomear...</a></li>
					<li class="divider"></li>
					<li><a href="javascript:;" class="btn-remove-file"><i class="icon icon-trash"></i> Remover...</a></li>
					<li><a href="javascript:;" class="btn-remove-all-files">Remover tudo</a></li>
					<li class="divider"></li>
					<li><a href="javascript:;" class="btn-import"><i class="icon icon-import"></i> Importar...</a></li>
					<li><a href="javascript:;" class="btn-export"><i class="icon icon-export"></i> Exportar...</a></li>
					<li><a href="javascript:;" class="btn-export export-all">Exportar tudo</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="javascript:;">Visualizar</a>
				<ul class="menu-subitem">
					<li class="header">Modo</li>
					<li><a href="javascript:;" class="btn-mode focus-mode"><i class="icon icon-target"></i> Focado</a></li>
					<li><a href="javascript:;" class="btn-mode helper-mode"><i class="icon icon-help"></i> Ajuda</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="javascript:;">Executar</a>
				<ul class="menu-subitem">
					<li><a href="javascript:;" class="btn-run"><i class="icon icon-play"></i> Executar</a></li>
					<li><a href="javascript:;" class="btn-run-highlight"><i class="icon icon-lines"></i> Executar e Marcar</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="javascript:;">Ajuda</a>
				<ul class="menu-subitem">
					<li><a href="javascript:;" class="btn-modal" data-target="modal-help">Documentação</a></li>
					<li class="divider header">Exemplos</li>
					<li><a href="exemplos/par-impar.aires" class="btn-example" download>Par ou ímpar</a></li>
					<li><a href="exemplos/fibonacci.aires" class="btn-example" download>Fibonacci</a></li>
					<li><a href="exemplos/imprensadinho.aires" class="btn-example" download>Imprensadinho</a></li>
				</ul>
			</li>
		</ul>	
	</div>

	<!-- Toolbar -->
	<div class="toolbar clearfix w-full overflow-x-auto">
		<div class="toolbar-buttons pull-left min-w-[max-content]">
			<a href="javascript:;" class="btn-new-file" title="Novo arquivo"><i class="icon icon-file"></i></a>
			<a href="javascript:;" class="btn-open-file" data-modal="modal-open-file" title="Abrir arquivo"><i class="icon icon-folder"></i></a>
			<a href="javascript:;" class="btn-remove-file" title="Remover arquivo"><i class="icon icon-trash"></i></a>
			<div class="divider"></div>
			<a href="javascript:;" class="btn-import" title="Importar arquivo"><i class="icon icon-import"></i></a>
			<a href="javascript:;" class="btn-export" title="Exportar arquivo"><i class="icon icon-export"></i></a>
			<div class="divider"></div>
			<a href="javascript:;" class="btn-undo" title="Desfazer ( Ctrl + z )"><i class="icon icon-arrow-back"></i></a>
			<a href="javascript:;" class="btn-redo" title="Refazer ( Ctrl + y )"><i class="icon icon-arrow-forward"></i></a>
			<div class="divider"></div>
			<a href="javascript:;" class="btn-copy" title="Copiar ( Ctrl + c )"><i class="icon icon-copy"></i></a>
			<a href="javascript:;" class="btn-cut" title="Recortar ( Ctrl + x )"><i class="icon icon-cut"></i></a>
			<div class="divider"></div>
			<a href="javascript:;" class="btn-run" title="Executar"><i class="icon icon-play"></i></a>
		</div>
	</div>

	<!-- This Iframe is used to run the code -->
	<iframe id="iframe-run" style="height:0"><body></body></iframe>
	<input type="file" id="fld-file">

	<!-- Code Editor -->
	<div id="cnt-editors">
		<div id="edt-source"></div>
		<div id="cnt-helper">
			<table>
				<thead>
					<tr>
						<td>Entrada</td>
						<td>Saída</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>inicioAlgoritmo</td>
						<td></td>
					</tr>
					<tr>
						<td>fimAlgoritmo</td>
						<td></td>
					</tr>
					<tr>
						<td>se condicao entao</td>
						<td>if ( condicao ) {</td>
					</tr>
					<tr>
						<td>senao se conficao entao</td>
						<td>} else if ( condicao ) {</td>
					</tr>
					<tr>
						<td>senao</td>
						<td>} else {</td>
					</tr>
					<tr>
						<td>fimSe</td>
						<td>}</td>
					</tr>
					<tr>
						<td>escolha codicao</td>
						<td>switch ( condicao ) {</td>
					</tr>
					<tr>
						<td>caso condicao</td>
						<td>case condicao:</td>
					</tr>
					<tr>
						<td>casoPadrao</td>
						<td>default:</td>
					</tr>
					<tr>
						<td>parar</td>
						<td>break</td>
					</tr>
					<tr>
						<td>fimEscolha</td>
						<td>}</td>
					</tr>
					<tr>
						<td>enquanto condicao faca</td>
						<td>while ( codicao ) {</td>
					</tr>
					<tr>
						<td>fimEnquanto</td>
						<td>}</td>
					</tr>
					<tr>
						<td>para condicao faca</td>
						<td>for ( conficao ) {</td>
					</tr>
					<tr>
						<td>fimPara</td>
						<td>}</td>
					</tr>
					<tr>
						<td>funcao ( argumentos )</td>
						<td>function ( argumentos ) {</td>
					</tr>
					<tr>
						<td>fimFuncao</td>
						<td>}</td>
					</tr>
					<tr>
						<td>variavel objeto</td>
						<td>var objeto</td>
					</tr>
					<tr>
						<td>retorna objeto</td>
						<td>return objeto;</td>
					</tr>
					<tr>
						<td>verdadeiro</td>
						<td>true</td>
					</tr>
					<tr>
						<td>falso</td>
						<td>false</td>
					</tr>
					<tr>
						<td class="header" colspan="2">Funções</td>
					</tr>
					<tr>
						<td>leia( string )</td>
						<td>prompt( string )</td>
					</tr>
					<tr>
						<td>escreva( string )</td>
						<td>alert( string )</td>
					</tr>
					<tr>
						<td>confirma( string )</td>
						<td>confirm( string )</td>
					</tr>
					<tr>
						<td>raiz( valor )</td>
						<td>Math.pow( valor )</td>
					</tr>
					<tr>
						<td>console( objeto )</td>
						<td>console.log( objeto )</td>
					</tr>
					<tr>
						<td class="header" colspan="2">Type Casting</td>
					</tr>
					<tr>
						<td>(inteiro) objeto</td>
						<td>parseInt( objeto )</td>
					</tr>
					<tr>
						<td>(flutuante) objeto</td>
						<td>parseFloat( objeto )</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Modal that opens to show the list of recents codes -->
	<div id="modal-open-file" class="modal">
		<div class="modal-container">
			<div class="modal-header clearfix">
				<h1 class="modal-header-title">Abrir</h1>
				<div class="modal-header-actions">
					<a href="javascript:;" class="modal-close-btn"><i class="icon icon-close"></i></a>
				</div>
			</div>
			<div class="modal-content">
				<ul class="list"></ul>
			</div>
		</div>
	</div>

	<!-- Modal that shows the avaiable commands -->
	<div id="modal-help" class="modal">
		<div class="modal-container">
			<div class="modal-header clearfix">
				<h1 class="modal-header-title">Documentação</h1>
				<div class="modal-header-actions">
					<a href="javascript:;" class="modal-close-btn"><i class="icon icon-close"></i></a>
				</div>
			</div>
			<div class="modal-content">
				<p>Sintaxe</p>
				<table>
					<thead>
						<tr>
							<td>Entrada</td>
							<td>Saída</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>inicioAlgoritmo</td>
							<td></td>
						</tr>
						<tr>
							<td>fimAlgoritmo</td>
							<td></td>
						</tr>
						<tr>
							<td>se condicao entao</td>
							<td>if ( condicao ) {</td>
						</tr>
						<tr>
							<td>senao se conficao entao</td>
							<td>} else if ( condicao ) {</td>
						</tr>
						<tr>
							<td>senao</td>
							<td>} else {</td>
						</tr>
						<tr>
							<td>fimSe</td>
							<td>}</td>
						</tr>
						<tr>
							<td>escolha codicao</td>
							<td>switch ( condicao ) {</td>
						</tr>
						<tr>
							<td>caso condicao</td>
							<td>case condicao:</td>
						</tr>
						<tr>
							<td>casoPadrao</td>
							<td>default:</td>
						</tr>
						<tr>
							<td>parar</td>
							<td>break</td>
						</tr>
						<tr>
							<td>fimEscolha</td>
							<td>}</td>
						</tr>
						<tr>
							<td>enquanto condicao faca</td>
							<td>while ( codicao ) {</td>
						</tr>
						<tr>
							<td>fimEnquanto</td>
							<td>}</td>
						</tr>
						<tr>
							<td>para condicao faca</td>
							<td>for ( conficao ) {</td>
						</tr>
						<tr>
							<td>fimPara</td>
							<td>}</td>
						</tr>
						<tr>
							<td>funcao ( argumentos )</td>
							<td>function ( argumentos ) {</td>
						</tr>
						<tr>
							<td>fimFuncao</td>
							<td>}</td>
						</tr>
						<tr>
							<td>variavel objeto</td>
							<td>var objeto</td>
						</tr>
						<tr>
							<td>retorna objeto</td>
							<td>return objeto;</td>
						</tr>
						<tr>
							<td>verdadeiro</td>
							<td>true</td>
						</tr>
						<tr>
							<td>falso</td>
							<td>false</td>
						</tr>
						<tr>
							<td class="header" colspan="2">Funções</td>
						</tr>
						<tr>
							<td>leia( string )</td>
							<td>prompt( string )</td>
						</tr>
						<tr>
							<td>escreva( string )</td>
							<td>alert( string )</td>
						</tr>
						<tr>
							<td>confirma( string )</td>
							<td>confirm( string )</td>
						</tr>
						<tr>
							<td>raiz( valor )</td>
							<td>Math.pow( valor )</td>
						</tr>
						<tr>
							<td>console( objeto )</td>
							<td>console.log( objeto )</td>
						</tr>
						<tr>
							<td class="header" colspan="2">Type Casting</td>
						</tr>
						<tr>
							<td>(inteiro) objeto</td>
							<td>parseInt( objeto )</td>
						</tr>
						<tr>
							<td>(flutuante) objeto</td>
							<td>parseFloat( objeto )</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

<script src="{{BASE}}portugol/assets/js/jquery.js"></script>
<script src="{{BASE}}portugol/assets/js/ace.js"></script>
<script src="{{BASE}}portugol/assets/js/clipboard.js"></script>
<script src="{{BASE}}portugol/assets/js/beautify.js"></script>
<script src="{{BASE}}portugol/assets/js/portugol.js"></script>
<script src="{{BASE}}portugol/assets/js/portugol-editor.js"></script>

<script>
	jQuery(function(){
		editor.init();
	});
</script>

{% endblock %}