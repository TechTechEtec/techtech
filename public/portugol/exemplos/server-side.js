/*
 * 1- Baixar o arquivo: par-impar.aires ( Ajuda > Exemplo > Par ou ímpar );
 * 2- Baixar o arquivo: server-side.js ( Ajuda > Exemplo > Server-side );
 * 3- Colocar os arquivos no mesmo diretório;
 * 5- Abrir o terminal e entre com o comando: node server-side.js ( certifique-se que você tem o node.js instalado )
 */ 
 
var fs = require("fs");
var portugol = require("./portugol").init();

fs.readFile( "par-impar.aires", "utf-8", function( err, data ) {
  if ( err ) {
    throw err;
  }

  try {
    data = JSON.parse( data );
    console.log( portugol.parse( data.source ) );
  }catch( e ) {
    throw e;
  }
} );