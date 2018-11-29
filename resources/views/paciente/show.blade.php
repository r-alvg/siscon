@extends('layout.app')

@section('estilos')
<style>
    .btn{
        
    }
    .pesquisar{
        margin-top:1.7rem;
    }
    .seletorSexo{
        margin-top: 2rem;
        padding-right: 1.5rem;
        margin-top:1.7rem; 
    }
    .endCentralizado > label{
        color:blue;
        text-aling:center;
        
    }
    .form-control{
        border-radius:10px 10px; 
    }
    .titulocadastro{
        margin:0 auto;
        margin-top:2rem;
        width:80rem;
    }
    .naveg{
        float: left;
    }
    .navegacao{
        text-align:right ;
        float: right;
       
    }
    a{
        color: white;
    }
    .titulocadastro{
        text-align: center;
        margin-top: 1.5rem;
        width: 80%;
    }
    .dadosForm{
        margin-top: 1rem;
    }

    legend{
        margin-top: 1rem;
    }


</style>

@endsection


@section('tela')
<hr>

<div class="container-fluid col-lg-10 corpo-paciente">

    



              <div class="form-group navegacao">
                    <div class="col">
                           
                             <a  class="btn btn-outline-secondary"   href="{{route('paciente.listar')}}"   data-toggle="tooltip" data-placement="top" title="pesquisar"><i class="fas fa-search"></i></a>
                             <a  class="btn btn-outline-info"   onClick="history.go(0)"  data-toggle="tooltip" data-placement="top" title="Recarregar"><i class="fas fa-redo"></i></a>
                            <a  class="btn btn-outline-secondary"   onClick="history.go(-1)"  data-toggle="tooltip" data-placement="top" title="Voltar"><i class="fas fa-share"></i></a>
                    </div>
                </div>
             <h4 class="titulocadastro"> Dados do {{$p->nome}}</h4>


        <fieldset class="form-group dadosForm">
                <legend aling="center">Dados Pessoais</legend>
<div class="row"><!-- dados pessoas -->

  <div class="form-group col-md-4 mb-3">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"  maxlength="43" class="form-control {{$errors->has('nome') ? 'is-invalid': '' }}" placeholder="nome" required
        @if(!empty($p)) value = "{{$p->nome}}" @else value = {{old('nome')}} @endif readonly>

        @if($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('nome')}}
                </div>
        @endif
    </div>


    <div class = "col-md-2 mb-3">

        <div class="form-group">

            <label for="cpf">Cpf</label>
            <input type="text" name="cpf" id="cpf"   class="form-control {{$errors->has('cpf') ? 'is-invalid': '' }}" placeholder="Cpf" aria-describedby=""   maxlength="13" required
            @if(!empty($p)) value = "{{$p->cpf}}" @else value = {{old('cpf')}} @endif readonly>

                @if($errors->has('cpf'))
                <div class="invalid-feedback">
                    {{$errors->first('cpf')}}
                    </div>
                @endif
        </div>
    </div>

        
   <div class="col-md-2 mb-3">
            <div class="form-group">
              <label for="cpf">RG</label>
              <input type="text" name="identidade" id="RG" class="form-control {{$errors->has('identidade') ? 'is-invalid': '' }}" placeholder="identidade" aria-describedby="identidade" maxlength="13"
               @if(!empty($p)) value = "{{$p->identidade}}" @else value = {{old('identidade')}} @endif readonly>

                @if($errors->has('identidade'))
                <div class="invalid-feedback">
                    {{$errors->first('identidade')}}
                    </div>
                @endif
 
              
            </div>
            </div><!--col cpf -->

                <div class="form-group col-md-2 mb-3">
            <label for="orgEmissor">Orgão Emissor</label>

            <input type="text" name="org_emissor" id="org_emissor" maxlength="15"  required class="form-control {{$errors->has('org_emissor') ? 'is-invalid': '' }}" placeholder="ex:Detran" aria-describedby=""
           @if(!empty($p)) value = "{{$p->identidade}}" @else value = {{old('org_emissor')}} @endif readonly>
                 @if($errors->has('org_emissor'))
            <div class="invalid-feedback">
                {{$errors->first('org_emissor')}}
            </div>
                @endif



        </div>

    <div class="col-md-2 mb-3">
        <div class="form-group">
            <label for="dataDeNascimento">Data Nascimento</label>
            <input type="date" name="dataDeNascimento"  required  id="dataDeNascimento" class="form-control {{$errors->has('dataDeNascimento') ? 'is-invalid': '' }}"  min="1850-04-01" max= document.querySelector('input[type="date"]' pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"
             @if(!empty($p)) value = "{{$p->dataDeNascimento}}" @else value = {{old('dataDeNascimento')}} @endif readonly>

                @if($errors->has('dataDeNascimento'))
        <div class="invalid-feedback">
            {{$errors->first('dataDeNascimento')}}
            </div>
            @endif


        </div>
    </div><!--col dt Nascimento-->
</div><!-- row dados pessoas 1-->



<div class="row"> <!--naciolidade-->
    
            <div class="col-md-2 mb-3">
        <div class="form-group">
          <label for="nacionalidade">Nacionalidade</label>
          <input type="text" name="nacionalidade" maxlength="15" required id="nacionalidade" class="form-control {{$errors->has('nacionalidade') ? 'is-invalid': '' }}" placeholder="nacionalidade" value="Brasileiro"
        @if(!empty($p)) value = "{{$p->nacionalidade}}" @else value ={{old('orgEmissor')}}  @endif readonly>
           @if($errors->has('nacionalidade'))
            <div class="invalid-feedback">
                {{$errors->first('nacionalidade')}}
            </div>
          @endif

        </div>
    </div><!--col nacionalidade -->

        
         <div class="col-md-2 mb-3">
            <div class="form-group">

            <label for="naturalidade">Naturalidade</label>
            <input type="text" name="naturalidade" maxlength="15" required id="naturalidade" class="form-control {{$errors->has('naturalidade') ? 'is-invalid': '' }}" 
            placeholder="naturalidade"@if(!empty($p)) value = "{{$p->naturalidade}}" @else value =  {{old('naturalidade')}} @endif readonly>
            @if($errors->has('naturalidade'))
                <div class="invalid-feedback">
                    {{$errors->first('naturalidade')}}
                 </div>
            @endif

            </div>
    </div><!--col naturalidade -->

         <div class="col-md-3 mb-3">
            <div class="form-group">
            
                <label for="selectbasic">Escolaridade </label>
        
                  <select required id="escolaridade" name="escolaridade" class="form-control {{ $errors->has('escolaridade') ? 'is-invalid': ''  }}" readonly>
                        @if(!empty($p->escolaridade))
                        <option value="{{$p->escolaridade}}">{{$p->escolaridade}}</option>
                         @endif
              
            
                  </select>
                @if($errors->has('escolaridade'))
             <div class="invalid-feedback">
              {{$errors->first('escolaridade')}}
            </div>
            @endif
            </div>
        </div>

    
                        <div class="col-3">
                <div class="form-group">
                  <label for="">Profissão*</label>
                  <input type="text" name="prof" id="" class="form-control" readonly  placeholder="prof" value="Brasileiro"  @if(!empty($p)) value = {{$p->profissao}} @else value = "" @endif readonly>
                  <small id="prof" class="text-muted">informe o seu pais de origem</small>
                </div>
        </div><!--col nacionalidade -->

        

    <div class="col-md-2 mb-3">
            <div class="form-group">

                <label for="selectbasic">Sexo </label>
                <select required id="genero" name="sexo" class="form-control {{ $errors->has('sexo') ? 'is-invalid': ''  }}" readonly>
                 @if(!empty($p->sexo))

                    @switch($p->sexo)
                    @case('M')
                        @php $tipo = 'Masculino' ; @endphp
                        @break

                    @case( 'F')
                        @php $tipo = 'Feminino' ; @endphp
                        @break
                    @case( 'N')
                        @php $tipo = 'Não declarado' ; @endphp
                        @break
                    @case( 'I')
                        @php $tipo = 'Indefinido' ; @endphp
                        @break

                    @endswitch

                    <option value = {{$p->sexo}}>{{$tipo}}</option>
                    @else
                    <option value=""></option>
                   
                @endif
           
                 </select>
        </div>
</div><!--col genero-->
      </div><!-- row -->
    <div class="row">

    <div class="col-md-2 mb-3">
            <div class="form-group">

                <label for="selectbasic">Etnia </label>
                <select required id="etnia" name="etnia" class="form-control {{$errors->has('etnia') ? 'is-invalid': '' }}" readonly>
                @if(!empty($p->etnia))

                @switch($p->etnia)
                @case('B')

                    @php $tipo = 'Branco' ; @endphp
                    @break

                @case( 'P')

                    @php $tipo = 'Pardo' ; @endphp
                    @break
                @case( 'N')

                    @php $tipo = 'Negro' ; @endphp
                    @break

                @case( 'I')

                    @php $tipo = 'Indigenas' ; @endphp
                    @break

                @endswitch
                    <option value= {{$p->etnia}}>{{$tipo}}</option>
                @else
                    <option value=""></option>
         

                @endif

            </select>
      
        </div>
    </div><!--  etinia-->

    
                  <div class="col-md-2 mb-3">
                <div class="form-group">

                    <label for="selectbasic">Status </label>
                      <select required id="status" name="status" class="form-control {{$errors->has('status') ? 'is-invalid': '' }}" @if(!empty($p)) 
                      value = "{{$p->Status}}" @else value =   {{old('status')}} @endif readonly>
                      <option value="A">Ativo</option>
                        <option value="I">Inativo</option>
                      </select>
                             @if($errors->has('status'))
                             <div class="invalid-feedback">
                                {{$errors->first('status')}}
                            </div>
                            @endif

                </div>
            </div><!--  etinia-->
            <div class="col-md-2 mb-3">
            <div class="form-group">
                <label for="telefone">Telefone </label>
                    <input id="telefone" name="telefone" class="form-control {{$errors->has('telefone') ? 'is-invalid': '' }}" required="" type="text" maxlength="13"
                     @if(!empty($p)) value = "{{$p->telefone}}" @else value = {{old('telefone')}} @endif readonly>

                      @if($errors->has('telefone'))
                <div class="invalid-feedback">
                    {{$errors->first('telefone')}}
                    </div>
                    @endif


            </div>
        </div>  <!-- col Telefone-->

        <div class="col-md-2 mb-3">
                <div class="form-group">
                    <label for="celular">Celular </label>
                        <input id="celular" name="celular" class="form-control {{$errors->has('celular') ? 'is-invalid': '' }}" required="" type="text" maxlength="13"
                      @if(!empty($p)) value = "{{$p->celular}}" @else value = {{old('celular')}}  @endif readonly>

                            @if($errors->has('celular'))
                        <div class="invalid-feedback">
                            {{$errors->first('celular')}}
                            </div>
                            @endif        

                </div>
            </div>  <!-- col Telefone-->

            <div class="col-md-3 mb-3">
                <div class="form-group">
                       <label for="email">Email address</label>
                       <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid': '' }}" id="email" name = "email" placeholder="name@example.com"
                      @if(!empty($p)) value = "{{$p->email}}" @else value =  {{old('email')}}  @endif readonly>  

                      @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                        </div>
                        @endif
                        <div class="invalid-feedback">
                        Email invalido
                        </div>
                         </div>


            </div> <!-- col Email -->

             <div class="col-md-3 mb-3 Fill invisivel">
                <div class="form-group">
                <label for="crm">CRM</label>
                <input type="text" name="crm" id="" class="form-control {{$errors->has('email') ? 'is-invalid': '' }}" placeholder="crm"  maxlength="15"
                  @if(!empty($p)) value = "{{$p->crm}}" @else value =  {{old('crm')}}  @endif readonly>
           
                      @if($errors->has('crm'))
                    <div class="invalid-feedback">
                        {{$errors->first('crm')}}
                        </div>
                        @endif
                </div>
                </div><!--col nome -->


          


</div><!-- row -->
</fieldset><!--Dados pessoas-->
<hr>

   <fieldset class="form-group ">
                    <legend class = "ttt" aling="center">Endereço</legend>

                <div class="row">
                    <div class="col-md-2 mb-3 ">
                         <div class="form-group">
                               <label for="cep">Cep</label>
                               <input type="text"  required class="form-control input-md {{$errors->has('cep') ? 'is-invalid': '' }}" name="cep" id="cep"
                                placeholder="Apenas numeros" maxlength="15"  @if(!empty($p)) value = "{{$p->cep}}" @else value =  {{old('cep')}}  @endif readonly>
                                      @if($errors->has('cep'))
                            <div class="invalid-feedback">
                                {{$errors->first('cep')}}
                                </div>
                                @endif

                            </div>

                        </div><!-- col cep -->
  
                                <div class="form-group">
                                     <button type="button" class="btn btn-outline-success pesquisar"  onclick="cep.value"> <!--  pesquisacep(cep.value)-->
                                    <strong>pesquisar</strong></button>
                                 </div>
                              

                        

                     <div class="col-md-3 mb-3">
                      <span>Rua</span>
                          <div class="input-group">
                              <input type="text" name="rua" maxlength="40" required class="form-control {{$errors->has('rua') ? 'is-invalid': '' }}" id="rua"
                              @if(!empty($p)) value = "{{$p->rua}}" @else value =  {{old('rua')}}  @endif} readonly>

                                @if($errors->has('rua'))
                                    <div class="invalid-feedback">
                                    {{$errors->first('rua')}}
                                    </div>
                                @endif

                      </div>
                  </div><!-- col rua-->

                   <div class="col-md-1 mb-3">
                    <span >Nº </span>
                    <div class="input-group">
                      <input id="numero" name="numero" maxlength = '6' class="form-control {{$errors->has('numero') ? 'is-invalid': '' }}"placeholder="" required=""  type="text"
                       @if(!empty($p)) value = "{{$p->numero}}" @else value =  {{old('numero')}}  @endif readonly>

                             @if($errors->has('numero'))
                        <div class="invalid-feedback">
                            {{$errors->first('numero')}}
                            </div>
                            @endif

                    </div>

                  </div> <!-- col bumero-->


                  <div class="col-md-2 mb-3">

                   <span>Bairro</span>
                    <div class="input-group">
                      <input id="bairro" name="bairro"  required maxlength="15" placeholder="" required=""  class="form-control {{$errors->has('bairro') ? 'is-invalid': '' }}"type="text"
                      @if(!empty($p)) value = "{{$p->bairro}}" @else value =  {{old('bairro')}}  @endif readonly>

                              @if($errors->has('bairro'))
     <div class="invalid-feedback">
         {{$errors->first('bairro')}}
        </div>
        @endif

                    </div>

                    </div><!-- col bairro-->

                <div class="col-md-2 mb-3">
                   <span>Cidade</span>
                    <div class="input-group">

                      <input id="cidade" name="cidade"  required maxlength="30" placeholder="" required=""  class="form-control {{$errors->has('cidade') ? 'is-invalid': '' }}" type="text"
                      @if(!empty($p)) value = "{{$p->cidade}}" @else value =  {{old('cidade')}}  @endif readonly>

                               @if($errors->has('cidade'))
                        <div class="invalid-feedback">
                            {{$errors->first('cidade')}}
                            </div>
                            @endif

                    </div>
                </div><!-- col cidade -->

                    <div class="col-md-1 mb-3">
                    <span>Estado</span>
                    <div class="input-group">

                        <input id="uf" name="estado"  required maxlength="2" placeholder=""  class="form-control {{$errors->has('estado') ? 'is-invalid': '' }}" type="text"
                         @if(!empty($p)) value = "{{$p->estado}}" @else value =  {{old('estado')}}  @endif readonly>
                                       @if($errors->has('estado'))
     <div class="invalid-feedback">
         {{$errors->first('estado')}}
        </div>
        @endif

                    </div>
                </div>



        </div><!-- row endereco -->

    </fieldset><!--endereço-->
<hr>

        
<fieldset class="form-group">
    <legend aling="center">Convenio</legend>
<div class="row"><!-- convenio -->

    <div class="col">
    <div class="form-group">
        <label for="convenio">Convenio</label>
        <select  id="convenio" name="convenio" id="" class="form-control" readonly>
            @if (!$convenio == null)
            <option value="{{$convenio->cnpj}}" selected >{{$convenio->nome}}</option>
            @endif
            @foreach($convenios as $c)
                  <option value="{{$c->cnpj}}">{{$c->nome}}</option>
            @endforeach
        </select>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
            <div class="col">
                    <div class="form-group">
                     <label for="planos">Planos</label>
                     <select name="plano_id" id="plano_id" class="form-control"readonly>
                         @if (!$plano == null) 
                         <option value="{{$plano->id}}" selected > {{$plano->nome}}</option>
                          @endif
        
                     </select>
                    </div>
                  </div>
      </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label for="plano">Indicação</label>
                <input id="indicacao" name="indicacao" class="form-control"  require type="text" maxlength="13" @if($phc != null) value = {{$phc->indicacao}} @else value = "" @endif readonly>
        </div>
    </div>  <!-- col Plano-->

    <div class="col-2">
        <div class="form-group">
            <label for="plano">Carteira<h11>*</h11></label>
                <input id="carteira" name="carteira" class="form-control"  required type="text" maxlength="13" @if($phc != null)) value = {{$phc->carteira}} @else value = "" @endif readonly>
        </div>
    </div>  <!-- col Plano-->

   <div class="col-md-2 mb-3">
                <div class="form-group">

                    <label for="situacao">Situacao</label>
                      <select required id="situacao" name="situacao" class="form-control {{$errors->has('situacao') ? 'is-invalid': '' }}" readonly>
                      @if($phc != null)) 
                     <option value= {{$phc->situacao}}> {{$phc->situacao}}</option>
                     @endif
                      </select>
                             @if($errors->has('situacao'))
                    <div class="invalid-feedback">
                        {{$errors->first('situacao')}}
                        </div>
                        @endif

    <!--<div class="col">
        <div class="form-group">
            <label for="plano">Validade<h11>*</h11></label>
                <input id="telefone" name="telefone" class="form-control" required type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                >
        </div>
    </div>  col Plano-->

</fieldset><!--endereço-->


<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-body">
            <div class="container-fluid">
                @foreach ($p->planos()->get()  as $pp)
                    @if (!empty($pp))
                   
                   
                        <div class="row">
                            <div class="col">
                                <span>conv : {{ $pp->convenio->nome}} </span>
                            </div>
                            <div class="col">
                                    <span>s : {{ $pp->nome }}</span>
                            </div>
                            <div class="col">
                                    <span>nome : {{ $p->nome }}</span>
                            </div>
                            <div class="col">
                                    <span>nome : {{ $p->nome }}</span>
                            </div>
                            <div class="col">
                                    <span>nome : {{ $p->nome }}</span>
                            </div>
                            <div class="col">
                                    <span>nome : {{ $p->nome }}</span>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>

            </div>
    </div>
</div>
</div>
</div><!-- container -->


@endsection

@section('scripts')
   

<script type="text/javascript" src="{{ asset('js/cep.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/buscaAjax.js') }}"></script>

@endsection