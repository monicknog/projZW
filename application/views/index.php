<!-- Counts Section -->
<section class="dashboard-counts section-padding">
    <div class="container-fluid">
        <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-4 col-md-4 col-4">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="icon-user"></i></div>
                    <div class="name"><strong class="text-uppercase">Novos Clientes</strong><span>Ultimos 7 dias</span>
                        <div class="count-number"><?php echo $ultimos7dias;?></div>
                    </div>
                </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-4 col-md-4 col-4">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="icon-padnote"></i></div>
                    <div class="name"><strong class="text-uppercase">Total Clientes</strong><span>Desde JUL/2018</span>
                        <div class="count-number"><?php echo $totalCliente;?></div>
                    </div>
                </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-4 col-md-4 col-4">
                <div class="wrapper count-title d-flex">
                    <div class="icon"><i class="icon-check"></i></div>
                    <div class="name"><strong class="text-uppercase">Carnês Gerados</strong><span>Desde JUL/2018</span>
                        <div class="count-number"><?php echo $totalCarne;?></div>
                    </div>
                </div>
            </div>
            <!-- Count item widget-->

            <!-- Count item widget-->

            <!-- Count item widget-->

        </div>
    </div>
</section>
<!-- Header Section-->
<section class="dashboard-header section-padding">
    <div class="container-fluid">

        <h5>Dados Empresa</h5>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body">
                        <form class="form-horizontal" id="form" method="post" action="<?php echo base_url('welcome/cadastrarEmpresa'); ?>">
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php if (isset($empresa)) {
                                        foreach ($empresa as $usuario) {
                                            ?>
                                    <input id="idEmpresa" hidden="true" type="text" name="idEmpresa" required class="input-material dis" value="<?php echo $usuario->idEmpresa; ?>">
                                                
                                            <div class="form-group-material">
                                                <input id="nomeEmpresa" disabled="true" type="text" name="nomeEmpresa" required class="dis input-material" value="<?php echo $usuario->nomeEmpresa; ?>">
                                                <label for="nomeEmpresa" class="label-material"
                                                       >Nome</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="telEmpresa" disabled="true" type="text" name="telEmpresa" required class="dis input-material" value="<?php echo $usuario->telEmpresa; ?>">
                                                <label for="telEmpresa" class="label-material">Telefone</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="enderecoEmpresa" disabled="true" type="text" name="enderecoEmpresa" required class="dis input-material" value="<?php echo $usuario->enderecoEmpresa; ?>">
                                                <label for="enderecoEmpresa" class="label-material">Endereço</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="cidadeEmpresa" type="text" disabled="true" name="cidadeEmpresa" required class="dis input-material" value="<?php echo $usuario->cidadeEmpresa; ?>">
                                                <label for="cidadeEmpresa" class="label-material ">Cidade</label>
                                            </div>
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 offset-sm-12">
                                    <a id="editar" onclick="action();" href="#" class="editar btn btn-secondary">Editar</a>
                                    <button id="salvar" type="submit" class="btn btn-primary salvar">Salvar</button>
                                </div>
                            </div>
                            <?php }
                                } ?>
                        </form>
                    </div>
                </div>
            </div>              
            <!-- To Do List-->

            <!-- Pie Chart-->


        </div>
</section>
<!-- Statistics Section-->

<!-- Updates Section -->
