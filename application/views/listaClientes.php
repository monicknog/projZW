<!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Tables       </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Lista Clientes            </h1>
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
                          <td><a href="<?php echo base_url('welcome/teste2');?>">Editar</a></td>
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