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


$('#especialidade').change(function(){
    var medico = this.value;
    
    var date = document.getElementById('data').value;
    var espec = document.getElementById('especialidade').value;
    var medico = document.getElementById('medico').value;
    location.href = '/agd/medico/' + medico +'/' +date + '/' +espec;
  
});

$('#medico').change(function(){
    let medico_id = this.value;
   console.log(medico_id);

    $.getJSON('/get/esp/' +medico_id , function(meds){
        p = meds;
        $('#especialidade').empty();     
        $('select[id=especialidade]').append('<option value=>Selecione</option>')
        $.each(p, function(key,value){
            $('select[id=especialidade]').append('<option value=' + value.id + '>' + value.nome + '</option>')
        })
    })
})

$(document).on('click', '.btn-edit', function(e){
    var id = $(this).val();
     console.log(id);
     var d = $('.id' +id); 
     var k = document.getElementsByClassName('id' +id);
    console.log(k[0].cells);
    console.log(k[0].cells[0].innerHTML);//horario
    console.log(k[0].cells[1].innerHTML);//paciente
     console.log(k[0].cells[2].innerHTML);//cpf
      console.log(k[0].cells[3].innerHTML);//telefone
       console.log(k[0].cells[4].innerHTML);//celular
        console.log(k[0].cells[5].innerHTML);//idade
         console.log(k[0].cells[6].innerHTML);//Ult.Consulta
          console.log(k[0].cells[7].innerHTML);//primeiraVez
           console.log(k[0].cells[8].innerHTML);//compareceu
           console.log(k[0].cells[9].innerHTML);//pago
           //console.log(k[0].cells[10].children[2].dataset.catid);//obs
    
           var modal = $('#update'); 

           modal.find("[name='hora']").val(k[0].cells[0].innerHTML);
            modal.find("[name='primeiraVez']").val(k[0].cells[7].innerHTML);
               modal.find("[name='compareceu']").val(k[0].cells[8].innerHTML);
                  modal.find("[name='pago']").val(k[0].cells[9].innerHTML);
                     modal.find("[name='obs']").val(k[0].cells[10].innerHTML);
                      modal.find("[name='Salvar']").val(id);
           
            $('#update').modal('show');
    //data : {id:id}
 

    




});
$(document).ready(function () {

       $('#modal-mail').modal('show');
       $("#modal-mail").blur(function(){
        $("#modal-mail").modal('hide');
     //   $("#modal-mail").remove();
     })
    });
    
$("#data").change(function(){
               var medico = document.getElementById('medico').value;
               var espec = document.getElementById('especialidade').value;
                var date = this.value;

            if(!medico == '' && !espec == '')
                location.href = '/agd/medico/' + medico + '/' + date + '/' +espec; 
     });

$("#plano").change(function(){
    var plano = this.value;  
        console.log(this.value);
    $.getJSON('/get/proced/' +plano , function(proceds){
        p = proceds;
        $('#procedimentoMed').empty();     
        $('select[id=procedimentoMed]').append('<option value=>Selecione</option>')
        $.each(p, function(key,value){
            $('select[id=procedimentoMed]').append('<option value=' + value.codTuss + '>' + value.descricao + '</option>')
        })
       

    })
});


$("#procedimentoMed").change(function(){
    let plano = document.getElementById('plano').value;
    $.getJSON('/get/proced/preco/' +this.value+"/"+plano , function(valor){
        $('#valor').empty();     
        $('input[id=valor]').val(valor);
    })

  
});


 $('#delete').on('show.bs.modal', function(event){
  
   var button = $(event.relatedTarget);
   var  id = button.data('catid');
   
   var modal = $(this);
   modal.find('.modal-body #id').val(id);



 });

 $('#obs').on('show.bs.modal', function(event){
  
    var button = $(event.relatedTarget);
    var  obs = button.data('catid');
    
    var modal = $(this);
    modal.find('.modal-body #p').text( obs);
 
  });

 
  


    $(function(){
        $('#paciente').autocomplete({
            appendTo: "body", 
            source: '/buscarName',
     
        });

    });

        $(function(){
        $('#cpf').autocomplete({
            appendTo: "body", 
            source: '/buscarCpf',
            
        });
        
    });

    $(document).ready(function(){
        $("#cpf").blur(function(){
           $.getJSON( '/cpf/' + this.value  , function(cpf){
               var funcionario = cpf;
                
                var nome = $('input[name = paciente]'); 
                   var telefone = $('input[name = telefone]'); 
                  var celular = $('input[name = celular]');   
                  var data = $('input[name = dataDeNascimento]');  
                  nome.val(funcionario[0]['nome']);
                  telefone.val(funcionario[0]['telefone']);
                  celular.val(funcionario[0]['celular']);
                data.val(funcionario[0]['dataDeNascimento']);
           });
         

     });
         $("#pacientee").blur(function(){
           $.getJSON( '/nome/' + this.value  , function(nome){
               var funcionario = nome;
                
                var cpf = $('input[name = cpf]'); 
                   var telefone = $('input[name = telefone]'); 
                  var celular = $('input[name = celular]');   
                  var data = $('input[name = dataDeNascimento]');  
                  cpf.val(funcionario[0]['cpf']);
                  telefone.val(funcionario[0]['telefone']);
                  celular.val(funcionario[0]['celular']);
                data.val(funcionario[0]['dataDeNascimento']);
           });
           
            });
});