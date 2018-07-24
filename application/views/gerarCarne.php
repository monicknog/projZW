<!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Gerar Carnês    </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Gerar Carnês</h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>
              <div class="card">
                <div class="card-body">
<input class="form-control " id="myInput" type="text" placeholder="Pesquisar...">                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nome</th>
                          <th>CPF</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody id="myTable">
                          <?php
                        if (isset($cliente)) {
                            foreach ($cliente as $usuario) {?>
                        <tr>
                             
                          <th scope="row"><?php echo $usuario->idCliente;?></th>
                          <td><?php echo $usuario->nomeCliente;?></td>
                          <td><?php echo $usuario->cpfCliente;?></td>
                          <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter" >Gerar Carnê</a></td>
                        </tr>
                        <?php }}?>    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Dados Carnê</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" id="form" method="post">
                            <div class="row">
                                <div class="col-sm-12">                                 
                                            <div class="form-group-material">
                                                <input id="qtd"  type="number" name="nomeEmpresa" required class="dis input-material" >
                                                <label for="qtd" class="label-material">Nº Parcelas</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="primeiroMesCarne"  type="text" name="primeiroMesCarne" required class="dis input-material" >
                                                <label for="primeiroMesCarne" class="label-material">Primeiro Mês</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="primeiroAnoCarne"  type="text" name="primeiroAnoCarne" required class="dis input-material" >
                                                <label for="primeiroAnoCarne" class="label-material">Primeiro Ano</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="clienteCarne" type="text"  name="clienteCarne" required class="dis input-material">
                                                <label for="clienteCarne" class="label-material ">Cliente</label>
                                            </div>
                                                                                <div class="form-group-material">
                                                <input id="empresaCarne" type="text" name="empresaCarne" required class="dis input-material" >
                                                <label for="empresaCarne" class="label-material ">Empresa</label>
                                            </div>
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 offset-sm-12">
                                    <a id="editar" data-dismiss="modal" href="#" class="editar btn btn-secondary">Cancelar</a>
                                    <button id="salvar" type="submit" class="btn btn-primary salvar">Salvar</button>
                                </div>
                            </div>
                            
        </form>                        
      </div>

    </div>
  </div>
</div>
      </section>