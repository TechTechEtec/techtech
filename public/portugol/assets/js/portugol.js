/*!
 * Portugol Editor v1.0.0-beta
 * https://github.com/airesvsg/portugol-editor
 *
 * Licensed MIT © Aires Gonçalves <airesvsg[at]gmail[dot]com>
 */
; ( function() {

	var Config = {
		"newLine": "\n",
		"token": {
			"blocks": {
				"begin-algoritm": [ "inicioAlgoritmo", "" ],
				"end-algoritm": [ "fimAlgoritmo", "" ],
				"if": [ "se(.*)entao", "if ( {{1}} ) {" ],
				"else-if": [ "senao( +)se(.*)entao", "} else if( {{2}} ) {" ],
				"else": [ "senao", "} else {" ],
				"end-if": [ "fimSe", "}" ],
				"for": ["para(.*)faca", "for({{1}}){"],
				"end-for": ["fimPara", "}"],
				"while": [ "enquanto(.*)faca", "while ( {{1}} ) {" ],
				"end-while": [ "fimEnquanto", "}" ],
				"switch": [ "escolha(.*)", "switch( {{1}} ) {" ],
				"case": [ "caso(.*)", "case {{1}}:" ],
				"default": [ "casoPadrao", "default:" ],
				"break": [ "parar", "break;" ],
				"end-switch": [ "fimEscolha", "}" ],
				"function": [ "(.*)funcao(.*)", "{{1}}function {{2}} {" ],
				"end-function": [ "fimFuncao", "}" ],
				"return": [ "retorna(.*)", "return {{1}}" ],
				"true": [ "(.*)verdadeiro(.*)", "{{1}}true{{2}}" ],
				"false": [ "(.*)falso(.*)", "{{1}}false{{2}}" ],
				"variable": [ "variavel(.*)", "var{{1}}"]
			},
			"functions": {
				"read": [
					"(\\w*\\s*\\w+\\s*(\\+|\\-|\\*|\\/|\\%|\\*\\*|\\<\\<|\\>\\>|\\>\\>\\>|\\&|\\^|\\|){0,1}\\={0,1}\\s*)?\\s*(\\({0,1}\\s*\\w+\\s*\\){0,1}\\({0,1}\\s*)?\\s*leia\\s*\\(\\s*(\\\'|\\\"){0,1}(.*)(\\\'|\\\"){0,1}\\s*\\)\\s*\\){0,1}\\s*\\;{0,1}",
					"{{1}}{{2}}{{3}}prompt({{4}}{{5}}{{6}});"
				],
				"confirm": [ "(.*)confirma\\s*\\((.*)", "{{1}}confirm({{2}}" ],
				"write": [ "(.*)escreva\\s*\\(\\s*(\\\'|\\\"){0,1}(.*)(\\\'|\\\"){0,1}\\s*\\)", "{{1}}alert({{2}}{{3}}{{4}});" ],
				"int": [ "(.*)(\\(\\s*inteiro\\s*\\)(.*))", "{{1}}parseInt({{3}});" ],
				"float": [ "(.*)(\\(\\s*flutuante\\s*\\)(.*))", "{{1}}parseFloat({{3}});" ],
				"pow": [ "(.*)raiz\\s*\\((.*)", "{{1}}Math.pow({{2}}" ],
				"console": [ "(.*)console(.*)", "{{1}}console.log({{2}} )"]
			}
		},
		"order": {
			"blocks": [
				"begin-algoritm", "end-algoritm",
				"else-if", "if", "else", "end-if",
				"end-while", "while",
				"end-switch", "switch", "case", "default", "break",
				"end-function", "function", "return", "true", "false", "variable",
				"for", "end-for"
			],
			"functions": [
				"int", "float", "pow",
				"read", "confirm", "write", "console"
			]
		}
	};

	var Core = {
		"code": "",
		"config": "",
		init: function( settings ) {
			this.config = settings;
			return this;
		},
		split: function() {
			if ( this.hasCode( "string" ) ) {
				this.code = this.code.split( new RegExp( this.config.newLine, "g" ) );
			}
			return this;
		},
		filter: function() {
			if ( this.hasCode( "object" ) ) {				
				this.code = this.code.filter( function( object ) {
					return object.trim().length;
				} );				
			}
			return this;
		},
		join: function() {
			if ( this.hasCode( "object" ) ) {
				this.code = this.code.join( this.config.newLine );
			}
			return this;
		},
		tokinize: function() {
			var self = this;
			self.split();
			if ( self.hasCode( "object" ) ) {
				var config = self.config;
				var key, order, block, index, line, found, tmp, piece;
				for ( key in config.order ) {
					for ( order in config.order[key] ) {
						order = config.order[key][order];
						block = config.token[key][order];
						for ( index in self.code ) {
							line = self.code[index];
							found = line.match( new RegExp( "\\s*" + block[0] ) );
							if ( found ) {
								tmp = block[1];
								for ( piece in found ) {
									if ( piece !== "index" && piece !== "input" ) {
										tmp = tmp.replace( new RegExp( "\\{\\{" + piece + "\\}\\}", "i" ), found[piece]||"" );
									}
								}
								line = tmp;
							}
							self.code[index] = line;
						}
					}
				}
			}
			return self;
		},
		format: function() {
			if ( this.hasCode( "string" ) ) {
				this.split();
			}
			if( this.hasCode( "object" ) ) {
				for ( var i in this.code ) {
					if ( /[var|\{|\}|\)\s]+(.*)[^\;|\{]$/.test( this.code[i] ) ) {
						this.code[i] += ';';
					}
					this.code[i] = this.code[i].replace( /\)$/g, ");" );
					this.code[i] = this.code[i].replace( /\)\;+\)/g, "));" );
					this.code[i] = this.code[i].replace( /\;+/g, ";" );
				}
			}
			return this.join().getCode();
		},
		setCode: function( code ) {
			this.code = code;
			return this;
		},
		getCode: function( code ) {
			return this.code;
		},
		hasCode: function( type ) {
			return typeof this.code === type && this.code.length;
		}
	};

	var Portugol = {		
		init: function( settings ) {
			var config = Object.assign( Config, this.settings, settings );
			Core.init( config );
			return this;
		},
		parse: function( code ) {
			Core.setCode( code ).tokinize();
			if ( Core.hasCode( "object" ) ) {
				return Core.format();
			}
			return "";
		}
	};

	if ( typeof window === "object" ) {
		window.Portugol = Portugol;
	}
	
	if ( typeof module === "object" ) {
		module.exports = Portugol;
	}

} () );