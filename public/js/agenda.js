/*$('#medico').change(function(){
    var medico = this.value;
    console.log(medico);
    horarios = getHorarios();
   for (let index = 0; index < horarios.length; index++) {
       $('tbody').append(
       '<tr>'+
        '<td id="hora">' +  horarios[index] + '</td>'+
        '<td>' + '</td>'+
        '<td>' +  '</td>'+
        '<td id="btnCad"><a class="btn btn-outline-success" data-toggle="modal" data-target=".bd-example-modal-xl" title="cadastrar">'+
           '<i class="fas fa-plus-circle"></i></a>'+
        '</td>'+
        '</tr>')
   } 
    });

*/
    
$('#medico').change(function(){
    var medico = this.value;
    
    var date = document.getElementById('data').value;
    
    location.href = '/agd/medico/' + medico +'/' +date;
  
});
  
$("#data").change(function(){
               var medico = document.getElementById('medico').value;
                var date = this.value;

         location.href = '/agd/medico/' + medico +'/' +date; 
     });


 $('#delete').on('show.bs.modal', function(event){
  console.log(id);
   var button = $(event.relatedTarget);
   var  id = button.data('catid');
   console.log(id);
   var modal = $(this);
   modal.find('.modal-body #id').val(id);



 });

    $(function(){
        $('#nome').autocomplete({
            appendTo: "body", 
            source: '/buscarName',
     
        });

    });

    