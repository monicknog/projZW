<!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active">Lista Clientes       </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">LISTA CLIENTES </h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <input class="form-control " id="myInput" type="text" placeholder="Pesquisar..."><div class="table-responsive">
                      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>COD</th>
                          <th>NOME</th>
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
                          <td><a href="<?php echo base_url('welcome/atualizarCliente/'.$usuario->idCliente);?>">Editar</a></td>
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
      </section>