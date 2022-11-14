/*!
 * Portugol Editor v1.0.0-beta
 * https://github.com/airesvsg/portugol-editor
 *
 * Licensed MIT © Aires Gonçalves <airesvsg[at]gmail[dot]com>
 */
; ( function() {
  
  var _storage = {
    getIndex: function( item, key, value ) {
      var data = this.get( item );
      if ( typeof data === "object" ) {
        for ( var i in data ) {
          if ( data[i].hasOwnProperty( key ) && data[i][key] === value ) {
            return i;
          }
        }
      }
      return false;
    },
    find: function( item, key, value ) {
      var index = this.getIndex( item, key, value );
      if ( index !== false ) {
        var data = this.get( item );
        return data[index];
      }
      return;
    },
    update: function( item, key, value, data ) {
      var index = this.getIndex( item, key, value );
      if( index !== false ) {
        var _data = this.get( item );
        _data[index] = data;
        return this.set( item, _data );
      }
      return false;
    },
    delete: function( item, key, value ) {
      var index = this.getIndex( item, key, value );
      if ( index !== false ) {
        var _data = this.get( item );
        var tmp = [];
        for ( var i=0; i<_data.length; i++ ) {
          if ( i == index ) {
            continue;
          }
          tmp.push( _data[i] );
        }
        this.set( item, tmp );
        return true;
      }
      return false;
    },
    prepend: function( key, value ) {
      var data = this.get(key, []);
      if( typeof data === "object" ) {
        for( var i in data ) {
          value.push( data[i] );
        }       
      }
      data = value;     
      return this.set( key, data );
    },
    get: function( key, def ) {
      var data = localStorage.getItem( key );
      try {
        data = JSON.parse( data );
      }catch(e){}
      if ( data === null && def ) {
        return def;
      }
      return data;
    },
    set: function( key, value ) {
      if ( typeof value === "object" ) {
        value = JSON.stringify( value );
      }
      return localStorage.setItem( key, value );
    }
  };

  var _doc = {
    extension: "aires",
    keys: [ "title", "source", "created", "updated", "id" ],
    init: function() {
      this.repaint();
    },
    setId: function( id ) {
      this.id = id;
      _storage.set( "_portugol_id", this.id );
      return this;
    },
    getNewId: function() {
      this.id = new Date().getTime();
      this.setId( this.id );
      return this.id;
    },
    getCurrentId: function() {
      this.id = _storage.get( "_portugol_id" );
      if ( ! this.id ) {
        this.getNewId();
      }
      return this.id;
    },
    getFiles: function() {
      this.files = _storage.get( "_portugol_files" );
      if ( ! this.files ) {
        this.files = [];
        _storage.set( "_portugol_files", this.files );
      }
      return this.files;
    },
    getCurrentFile: function() {
      this.getCurrentId();
      this.file = _storage.find( "_portugol_files", "id", this.id );
      if ( ! this.file ) {
        this.empty();
      }
      return this.file;
    },
    removeMarker: function( editor ) {
      var markers = editor.session.getMarkers();

      for ( var i in markers ) {
        editor.session.removeMarker( markers[i].id );
      }

      return this;
    },
    removeMarkers: function() {
      return this.removeMarker( _editor.$edtSource )
                .removeMarker( _editor.$edtOutput );
    },
    removeCurrent: function( id ) {
      if ( ! id ) {
        id = this.getCurrentId();
      }

      if ( id ) {
        _storage.delete( "_portugol_files", "id", id );
        this.newFile();
      }

      return this;
    },
    removeAll: function() {
      _storage.set( "_portugol_files", [] );
      this.empty().change();
    },
    empty: function() {
      this.file = {
        "title": "Sem título",
        "source": "",
        "created": "",
        "updated": "",
        "id": ""
      };
      return this;
    },
    change: function() {      
      _editor.$fldTitle.val( this.file.title );
      _editor.$edtSource.setValue( this.file.source, -1 );
      _editor.$edtSource.focus();
      return this;
    },
    update: function() {
      if ( ! this.file ) {
        this.empty();
      }
      this.file.id      = this.getCurrentId();
      this.file.title   = _editor.$fldTitle.val();
      this.file.source  = _editor.$edtSource.getValue();
      this.file.updated = new Date();
      return this;
    },
    newFile: function() {
      this.getNewId();
      this.empty().change();
    },
    repaint: function() {
      this.removeMarkers();
      this.getCurrentFile();
      this.change();
    },
    saveFile: function() {
      this.getFiles();
      this.update();
      if ( "" === this.file.created ) {
        this.file.created = new Date();
        _storage.prepend( "_portugol_files", [ this.file ] );
      } else {
        _storage.update( "_portugol_files", "id", this.id, this.file );
      }
    },
    isValidExtension: function( filename ) {
      filename = filename.split( /\./g );
      return filename.length && filename[ filename.length-1 ] === this.extension;
    },
    isValidFile: function( file ) {
      for( var k in this.keys ) {
        if ( $.inArray( this.keys[k], Object.keys( file ) ) === -1 ) {
          return false;
        }
      }
      return true;
    },
    fileExists: function( file ) {
      if ( this.isValidFile( file ) && this.getFiles() ) {
        for ( var i in this.files ) {
          if ( this.files[i].id === file.id ) {
            return true;
          }
        }
      }
      return false;
    },
    import: function( file ) {
      var ok = true;
      var exists = false;

      if ( ! this.isValidFile( file ) ) {
        alert( "Arquivo malformado!" );

        return false;
      }

      exists = this.fileExists( file );

      if ( exists ) {
        ok = confirm( "O arquivo ( " + file.title + " ) já existe, deseja importar assim mesmo?" );
      }

      if ( ok ) {
        if ( exists ) {
          _storage.update( "_portugol_files", "id", file.id, file );
        } else {
          _storage.prepend( "_portugol_files", [ file ] );
        }

        if ( file.id === this.getCurrentId() ) {
          this.setId( file.id ).repaint();
        }

        return true;
      }

      return false;
    },
    export: function( current ) {
      var file = this.getCurrentFile();
      
      if ( ! current ) {
        file = this.getFiles();
      }

      try {
        file = JSON.stringify( file );
      }catch( e ) {
        file = "";
      }
      
      return file; 
    }
  };

  var _editor = {
    init: function() {
      this.defineElements()
        .bindElements()
        .initialStates();
    },
    defineElements: function() {
      this.portugol           = Portugol.init();
      this.newLine            = /\n/;
      
      // Header
      this.$header            = $( "#header" );
      this.$fldTitle          = $( "#fld-title" );
      
      // Menu
      this.$menuItem          = $( ".menu-item" );
      this.$btnExample        = $( ".btn-example" );
      
      // Arquivo
      this.$btnNewFile        = $( ".btn-new-file" );
      this.$btnOpenFile       = $( ".btn-open-file" );
      this.$btnRenameFile     = $( ".btn-rename-file" );
      
      this.$btnRemoveFile     = $( ".btn-remove-file" );
      this.$btnRemoveAllFiles = $( ".btn-remove-all-files" );
      
      this.$btnImport         = $( ".btn-import" );
      this.$btnExport         = $( ".btn-export" );
      this.fldFile            = "fld-file";
      this.$fldFile           = $( "#" + this.fldFile );
      
      this.$btnPrint          = $( ".btn-print" );
      
      // Editar
      this.$btnUndo           = $( ".btn-undo" );
      this.$btnRedo           = $( ".btn-redo" );
      
      this.clsBtnCopy         = ".btn-copy";
      this.clsBtnCut          = ".btn-cut";
      
      // Visualizar
      this.$btnMode           = $( ".btn-mode" );
      
      // Executar
      this.$btnRun            = $( ".btn-run" );
      this.$btnRunHighlight   = $( ".btn-run-highlight" );
      
      this.$iframeRun         = $( "#iframe-run" );
      this.runHighlight       = "run-highlight";
      
      // Toolbar
      this.$toolbar           = $( ".toolbar" );
      this.$btnToggleHeader   = $( ".btn-toggle-header" );
      
      // Modal
      this.$btnModal          = $( ".btn-modal" );
      this.$btnCloseModal     = $( ".modal-close-btn" )
      this.$modal             = $( ".modal" );
      
      // Editor
      this.$cntEditors        = $( "#cnt-editors" );
      
      this.idSource           = "edt-source";
      this.idOutput           = "edt-output";
      
      this.$wrpSource         = $( "#" + this.idSource );
      this.$wrpOutput         = $( "#" + this.idOutput );
      
      this.$edtSource         = ace.edit( this.idSource );
      this.$edtOutput         = ace.edit( this.idOutput );
      
      // Others
      this.clsExportAll       = "export-all";
      
      this.clsOpen            = "open";
      this.clsClose           = "close";
      
      this.clsDisabled        = "disabled";
      this.clsEnabled         = "enabled";
            
      this.$edtSource.$blockScrolling = Infinity;
      this.$edtOutput.$blockScrolling = Infinity;
      
      this.$edtSource.focus();
      this.$edtOutput.setReadOnly( true );

      return this;
    },
    initialStates: function() {
      var show = _storage.get( "_portugol_show_header", true );
      var view = _storage.get( "_portugol_view_mode", "coderMode" );
      
      this.toggleHeader( ! show );
      this.toggleMode( view );
      this.hasUndo();
      
      _doc.init();

      this.parse();

      return this;
    },
    bindElements: function() {
      var self = this;

      // Menu
      self.$menuItem.click( function( e ) {
        e.preventDefault();

        if ( $( this ).hasClass( self.clsOpen ) ) {
          $( this ).removeClass( self.clsOpen );
        } else {
          self.$menuItem.removeClass( self.clsOpen );
          $( this ).addClass( self.clsOpen );
        }
      } );

      // Arquivo
      self.$btnNewFile.click( function( e ) {
        e.preventDefault();
        
        _doc.newFile();
      } );

      self.$btnOpenFile.click( function( e ) {
        e.preventDefault();
        
        var items = [];
        var modal = $( this ).data( "modal" );
        var files = _doc.getFiles();
        
        if ( files.length ) {
          for ( var i in files ) {
            items.push( "<li><a href=\"javascript:;\" class=\"list-title btn-filename\" data-id=\"" + files[i].id + "\">" + files[i].title + "</a></li>" );
          }
        } else {
          items.push( "<p>Não há arquivo salvo.</p>" );
        }

        $( "#" + modal ).find( ".list" ).html( items.join( "" ) );
        $( "#" + modal ).fadeIn();        
      } );

      $( document ).on( "click", ".btn-filename", function( e ) {
        e.preventDefault();
        
        var id = $( this ).data( "id" );        
        _doc.setId( id ).repaint();
        self.$modal.fadeOut();
      } );

      self.$btnRenameFile.click( function( e ) {
        e.preventDefault();

        self.$fldTitle.focus();
      } );

      self.$fldTitle.keyup( function() {
        _doc.saveFile();
      } );

      self.$btnRemoveFile.click( function( e ) {
        e.preventDefault();

        if ( confirm( "Tem certeza que desejas remover o arquivo?" ) ) {
        	_doc.removeCurrent();
        }
      } );

      self.$btnRemoveAllFiles.click( function( e ) {
        e.preventDefault();

        if ( confirm( "Tem certeza que desejas remover todos os arquivos? ") ) {
        	_doc.removeAll();
        }
      } );

      self.$btnImport.click( function() {
        self.$fldFile.click();
      } );

      self.$fldFile.change( function() {
        var file = document.getElementById( self.fldFile ).files[0];
        if ( ! _doc.isValidExtension( file.name ) ) {
          alert( "Extensão inválida!" );
          return;
        }
        var reader = new FileReader();
        reader.readAsText( file, "UTF-8" );
        reader.onload = function( e ) {
          try {
            var data = JSON.parse( e.target.result );
            if ( Array.isArray( data ) ) {
              var errors = 0;
              for ( var i in data ) {
                if ( ! _doc.import( data[i] ) ) {
                  errors++;
                }
              }

              if ( errors > data.length ) {
                alert( "A importação não foi realizada." );
              } else if ( errors ) {
                alert( "A importação foi realizada, mas não importou todos os arquivos." );
              } else {
                alert( "Importação realizada com sucesso." );
              }
            } else {
              if ( _doc.import( data ) ) {
                alert( "Importação realizada com sucesso." );                
              } else {
                alert( "A importação não foi realizada." );                
              }
            }
          } catch( e ) {
            alert( "Error ao importar" );
          } 
        }

        $(this).val( "" );
      } );

      self.$btnExport.click( function( e ) {
        e.stopPropagation();
        
        var all = $( this ).hasClass( self.clsExportAll );
        var date = new Date().toJSON().slice( 0, 10 );
        var data = _doc.export( all );

        if ( data.length && data !== "[]" ) {
	        $( this ).attr( {
	          "download": "exportacao-" + date + ".aires",
	          "href": "data:," + data
	        } );        	
        } else {
        	alert( "Não há arquivo para ser exportado!" );
        }
        
        self.$menuItem.removeClass( self.clsOpen );
      } );

      self.$btnPrint.click( function( e ) {
        e.preventDefault();

        window.print();
      } );

      // Editar
      self.$btnUndo.click( function( e ) {
        e.preventDefault();
        
        self.$edtSource.undo();
        self.hasUndo();
      } );

      self.$btnRedo.click( function( e ) {
        e.preventDefault();
        
        self.$edtSource.redo();
        self.hasUndo();
      } );

      if ( Clipboard.isSupported() ) {
        new Clipboard( self.clsBtnCopy, {
            text: function() {
              return self.copyCut();
            }
        } );

        new Clipboard( self.clsBtnCut, {
          text: function() {
            return self.copyCut( true );
          }
        } );
      } else {
        self.$btnCopy.remove();
        self.$btnCut.remove();
      }

      // Visualizar
      self.$btnMode.click( function( e ) {
        e.preventDefault();

        var mode = "focusMode";
        
        if ( $( this ).hasClass( "coder-mode" ) ) {
          mode = "coderMode";
        } else if ( $( this ).hasClass( "helper-mode" ) ) {
          mode = "helperMode";
        }
        
        self.toggleMode( mode );
      } );

      // Executar
      self.$btnRun.click( function( e ) {
        e.preventDefault();

        var scriptTag = '';

        _doc.removeMarkers();
        scriptTag = "<script>" + self.$edtOutput.getValue() + "<\/script>";

        self.$iframeRun.contents().find( "body" ).html( "" ).append( scriptTag );
      } );

      self.$btnRunHighlight.click( function( e ) {
        e.preventDefault();

        var source = self.$edtSource.getValue().split( self.newLine );
        var output = self.$edtOutput.getValue().split( self.newLine );
        var tmp = [
          "( function() {",
          "var edtSource = ace.edit( \"" + self.idSource + "\" );",
          "var edtOutput = ace.edit( \"" + self.idOutput + "\" );",
          "var Range = ace.require( \"ace/range\" ).Range;"
        ];

        $( "#" + self.runHighlight ).remove();
        _doc.removeMarkers();

        for ( var i in output ) {
          tmp.push( "edtSource.session.addMarker(new Range(" + i + ", 0, " + i + ", " + source[i].length + "), \"marker\", \"line\");" );
          tmp.push( "edtOutput.session.addMarker(new Range(" + i + ", 0, " + i + ", " + output[i].length + "), \"marker\", \"line\");" );
          tmp.push(output[i]);
        }
        tmp.push( "} () )" );
        $( "<script id=\"" + self.runHighlight + "\">" + tmp.join( "" ) + "<\/script>" ).appendTo( "body" );
      } );

      // Ajuda
      self.$btnExample.click( function( e ) {
        e.stopPropagation();

        self.$menuItem.removeClass( self.clsOpen );
      } );

      // Toolbar
      self.$btnToggleHeader.click( function( e ) {
        e.preventDefault();

        var visible = self.$header.is( ":visible" );

        self.toggleHeader( visible );
      } );

      // Modal
      self.$btnModal.click( function( e ) {
        e.preventDefault();

        var target = $( this ).data( "target" );
        
        self.$modal.hide();
        $( "#" + target ).fadeIn( "fast" );
      } );

      self.$btnCloseModal.click( function( e ) {
        e.preventDefault();

        self.$modal.fadeOut();
      } );

      // Editor
      self.$edtSource.on( "change", function() {
        _doc.removeMarkers();
        if ( ! self.$wrpSource.hasClass( "focus" ) ) {
          self.parse( true );
          _doc.saveFile();
          self.hasUndo();
        }
      } );

      $( window ).resize( function() {
        self.resizeEditors();
      } ).resize();

      return self;
    },
    resizeEditors: function() {
      var offset = 15;
      var height = this.$toolbar.height() + offset;

      if ( this.$header.is( ":visible" ) ) {
        height += this.$header.height();
      }

      this.$cntEditors.height( $( window ).height() - height );
    },
    hasUndo: function() {
      var self = this;
      var undoMng = self.$edtSource.session.getUndoManager();    

      if ( undoMng.hasUndo() ) {
        self.$btnUndo.removeClass( self.clsDisabled );
      } else {
        self.$btnUndo.addClass( self.clsDisabled );
      }

      if ( undoMng.hasRedo() ) {
        self.$btnRedo.removeClass( self.clsDisabled );
      } else {
        self.$btnRedo.addClass( self.clsDisabled );
      }
    },
    copyCut: function( cut ) {
      var selected = true;
      var value = this.$edtSource.getSelectedText();
      
      if ( ! value.length ) {
        selected = false;
        value = this.$edtSource.getValue();
      }

      if ( cut ) {
        if ( selected ) {
          this.$edtSource.getSession().replace( this.$edtSource.selection.getRange(), "" );
        } else {
          this.$edtSource.setValue( "", -1 );
        }
      }
      
      this.hasUndo();

      return value;
    },
    toggleMode: function( mode ) {
      var self = this;

      self.$cntEditors.removeAttr( "class" );
      self.$btnMode.removeClass( self.clsEnabled );

      if ( "coderMode" == mode ) {
        $( ".coder-mode" ).addClass( self.clsEnabled );
        self.parse( true );
      } else if ( "helperMode" == mode ) {
        $( ".helper-mode" ).addClass( self.clsEnabled );
        self.$cntEditors.addClass( "helper" );
      } else {
        mode = "focusMode";
        $( ".focus-mode" ).addClass( self.clsEnabled );
        self.$cntEditors.addClass( "focus" );
      }

      _storage.set( "_portugol_view_mode", mode );

      return mode;
    },
    toggleHeader: function( hide ) {
      this.$menuItem.removeClass( this.clsOpen );

      if ( hide ) {
        this.$header.hide();
        this.$btnToggleHeader.addClass( this.clsClose );
        hide = false;
      } else {
        this.$header.show();
        this.$btnToggleHeader.removeClass( this.clsClose );
        hide = true;
      }
      
      this.resizeEditors();

      _storage.set( "_portugol_show_header", hide );

      return this;
    },
    parse: function( output ) {
      var source = this.portugol.parse( this.$edtSource.getValue() );

      if ( source.length ) {
        source = js_beautify( source );
      }

      if ( output ) {
        this.$edtOutput.setValue( source, -1 );
      }

      return source;
    }
  };

  var editor = {
    init: function() {
      _editor.init();
    }
  };

  window.editor = editor;

} () );