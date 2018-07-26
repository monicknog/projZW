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
      <div class="form-group-material">
      <?php     
                                            if (isset($cliente)) {
                                              foreach ($cliente as $usuario) {?>
                                          
                                                <input id="clienteCarne" type="text" disabled="true" name="clienteCarne" required class="dis input-material" value="<?php echo $usuario->nomeCliente;}}?>">
                                                <label for="clienteCarne" class="label-material ">Cliente</label>
                                            </div>
                                            <?php     
                                            if (isset($empresa)) {
                                              foreach ($empresa as $usuario) {?>
                                          
                                            <div class="form-group-material">
                                              <input id="empresaCarne" type="text" disabled="true" name="empresaCarne" required class="dis input-material" value="<?php echo $usuario->nomeEmpresa; ?>"><?php }}?>
                                              <label for="empresaCarne" class="label-material ">Empresa</label>
                                            </div>
                                    
        <form class="form-horizontal" id="form" method="post" action="<?php echo base_url('welcome/carneF');?>">
                            <div class="row">
                                <div class="col-sm-12">
                                <?php
                                if (isset($cliente)) {
                                              foreach ($cliente as $usuario) {?>
                                          <input id="cliente_idCliente" type="text" hidden="true" name="cliente_idCliente" required class="dis input-material" value="<?php echo $usuario->idCliente;}}?>">
<?php                                          if (isset($empresa)) {
                                              foreach ($empresa as $usuario) {?>
                                          
                                              <input id="empresa_idEmpresa" type="text" hidden="true" name="empresa_idEmpresa" required class="dis input-material" value="<?php echo $usuario->idEmpresa;}}?>">                                 
                                              <div class="form-group-material">
                                                <input id="qtdCarne"  type="number" name="qtdCarne" required class="dis input-material" >
                                                <label for="qtdCarne" class="label-material">Nº Parcelas</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="vencimentoDiaCarne"  type="number" name="vencimentoDiaCarne" required class="dis input-material" >
                                                <label for="vencimentoDiaCarne" class="label-material">Dia Vencimento</label>
                                            </div>
                                            <div class="form-group-material">
                                                <!--<input id="primeiroMesCarne"  type="text" name="primeiroMesCarne" required class="dis input-material" >-->
                                                <label for="primeiroMesCarne" class="label-material">Primeiro Mês</label>
                                                <select id="primeiroMesCarne" name="primeiroMesCarne" class="form-control">
                                                  <option value="1">Janeiro</option>
                                                  <option value="2">Fevereiro</option>
                                                  <option value="3">Março</option>
                                                  <option value="4">Abril</option>
                                                  <option value="5">Maio</option>
                                                  <option value="6">Junho</option>
                                                  <option value="7">Julho</option>
                                                  <option value="8">Agosto</option>
                                                  <option value="9">Setembro</option>
                                                  <option value="10">Outubro</option>
                                                  <option value="11">Novembro</option>
                                                  <option value="12">Dezembro</option>
                                                </select>
                                            </div>
                                            <div class="form-group-material">
<!--                                                <input id="primeiroAnoCarne"  type="text" name="primeiroAnoCarne" required class="dis input-material" >-->
                                                <label for="primeiroAnoCarne" class="label-material">Primeiro Ano</label>
                                                <select id="primeiroAnoCarne" name="primeiroAnoCarne" class="form-control">
                                                  <option value="2018">2018</option>
                                                  <option value="2019">2019</option>
                                                  <option value="2020">2020</option>
                                                  <option value="2021">2021</option>
                                                  <option value="2022">2022</option>
                                                  <option value="2023">2023</option>
                                                  <option value="2024">2024</option>
                                                  <option value="2025">2025</option>
                                                  <option value="2026">2026</option>
                                                  <option value="2027">2027</option>
                                                  <option value="2028">2028</option>
                                                </select>
                                            </div>
                                            <div class="form-group-material">
                                            <label for="valorCarne" class="label-material">Valor</label>
                                            <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">R$</span></div>
                            
  
                            <input type="float" id="valorCarne" name="valorCarne" class="form-control">
                            <div class="input-group-append"><span class="input-group-text">.00</span></div>
 
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