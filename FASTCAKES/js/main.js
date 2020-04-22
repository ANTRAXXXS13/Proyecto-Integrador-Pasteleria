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

 $(function() {
    $( ".accordion" ).accordion({collapsible: true});
  });