    
    

$("#btnModalLRFormLRForm").on("click", function(){
    $("#modalLRForm").modal();
});

$(function() {
    $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
        uiLibrary: 'bootstrap4',
        language: 'es'
    });
 });

/* 
$( 'body' ).on( 'click', '#numInt', function(event) {    
    if( $(this).attr('data-toggle') != 'button' ) { $(this).toggleClass('active');      }
    if( $(this).hasClass( 'active' ) == true )    { $("input").prop('disabled', false); }
    if( $(this).hasClass( 'active' ) == false )   { $("input").prop('disabled', true);  }
}); */