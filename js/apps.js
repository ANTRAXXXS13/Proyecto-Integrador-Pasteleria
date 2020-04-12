$('#modalLRInputRegisFDN').datepicker({
    language: "es",
    format: "dd/mm/yyyy",
    uiLibrary: 'bootstrap'

});

$( 'body' ).on( 'click', '#modalLRInputRegisNumInt', function(event) {    
    if( $(this).attr('data-toggle') != 'button' ) { $(this).toggleClass('active');      }
    if( $(this).hasClass( 'active' ) == true )    { $("input").prop('disabled', false); }
    if( $(this).hasClass( 'active' ) == false )   { $("input").prop('disabled', true);  }
});