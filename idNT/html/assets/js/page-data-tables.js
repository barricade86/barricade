var App = (function () {

  App.dataTables = function( ){
    'use strict'

    //Basic Instance
    $("#datatable").dataTable();
    
    //Search input style
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
    $('.dataTables_length select').addClass('form-control');  

    //Add dataTable Functions
    var functions = $('<div class="btn-group"><button class="btn btn-default btn-xs" type="button">Actions</button><button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" class="dropdown-menu pull-right"><li><a href="#">Edit</a></li><li><a href="#">Copy</a></li><li><a href="#">Details</a></li><li class="divider"></li><li><a href="#">Remove</a></li></ul></div>');
    $("#datatable tbody tr td:last-child").each(function(){
      $(this).html("");
      functions.clone().appendTo(this);
    });
    
    //Add dataTable Icons
    var functions = $('<a class="btn btn-default btn-xs" href="#" data-original-title="Open" data-toggle="tooltip"><i class="fa fa-file"></i></a> <a class="btn btn-primary btn-xs" href="#" data-original-title="Edit" data-toggle="tooltip"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="#" data-original-title="Remove" data-toggle="tooltip"><i class="fa fa-times"></i></a>');
    $("#datatable-icons tbody tr td:last-child").each(function(){
      $(this).html("");
      functions.clone().appendTo(this);
    });
      
     /* Formating function for row details */
      function fnFormatDetails ( oTable, nTr )
      {
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Rendering engine:</td><td>'+aData[1]+' '+aData[4]+'</td></tr>';
          sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
          sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
          sOut += '</table>';
           
          return sOut;
      }
     
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement( 'th' );
      var nCloneTd = document.createElement( 'td' );
      nCloneTd.innerHTML = '<img class="toggle-details" src="' + App.conf.assetsPath + '/' + App.conf.imgPath + '/plus.png" />';
      nCloneTd.className = "center";
       
      $('#datatable2 thead tr').each( function () {
          this.insertBefore( nCloneTh, this.childNodes[0] );
      } );
       
      $('#datatable2 tbody tr').each( function () {
          this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
      } );
       
      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#datatable2').dataTable( {
          "aoColumnDefs": [
              { "bSortable": false, "aTargets": [ 0 ] }
          ],
          "aaSorting": [[1, 'asc']]
      });
       
      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#datatable2').delegate('tbody td img','click', function () {
          var nTr = $(this).parents('tr')[0];
          if ( oTable.fnIsOpen(nTr) )
          {
              /* This row is already open - close it */
              this.src = App.conf.assetsPath + '/' + App.conf.imgPath + "/plus.png";
              oTable.fnClose( nTr );
          }
          else
          {
              /* Open this row */
              this.src = App.conf.assetsPath + '/' + App.conf.imgPath + "/minus.png";
              oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
          }
      } );
      
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
    $('.dataTables_length select').addClass('form-control');    

    //Horizontal Icons dataTable
    $('#datatable-icons').dataTable();

  };

  return App;
})(App || {});
