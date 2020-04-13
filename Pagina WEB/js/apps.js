$("#btnModalLRFormLRForm").on("click", function(){
    $("#modalLRForm").modal();
})

/*$('#sandbox-container .input-group.date').datepicker({
    format: "dd/mm/aaaa",
    language: "es",
    uiLibrary: 'bootstrap4'
});*/

$('#fechNac .input-group.date').datepicker({
    timepicker: false,
    datepicker: true,
    format: 'd-m-Y',
    language: 'es'
});

$( 'body' ).on( 'click', '#numInt', function(event) {    
    if( $(this).attr('data-toggle') != 'button' ) { $(this).toggleClass('active');      }
    if( $(this).hasClass( 'active' ) == true )    { $("input").prop('disabled', false); }
    if( $(this).hasClass( 'active' ) == false )   { $("input").prop('disabled', true);  }
});