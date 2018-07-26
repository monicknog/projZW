<!-- Breadcrumb-->
<div class="breadcrumb-holder">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Cadastro Cliente</li>
        </ul>
    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <!-- Page Header-->
        <header> 
            <h1 class="h3 display">CADASTRO CLIENTE</h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>PREENCHA OS DADOS CORRETAMENTE</h4>
                    </div>
                    <div class="card-body">
                        <?php echo form_open('welcome/cadastrarCliente'); ?>
                           <?php if (isset($cliente)){?>
                           <input type="text" hidden="true" class="form-control" name="idCliente" id="nomeCliente" placeholder="" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->idCliente;
                           }?>">
                           <?php }?>


                        <div class="form-group">
                            <label for="nomeCliente">NOME COMPLETO</label>
                            <input type="text" class="form-control" name="nomeCliente" id="nomeCliente" placeholder="" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->nomeCliente;
                            }?>">
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="cpfCliente">CPF</label>
                                <input type="text" class="form-control" id="cpfCliente" name="cpfCliente" placeholder="XXX.XXX.XXX-XX" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->cpfCliente;
                            }?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rgCliente">RG</label>
                                <input type="text" class="form-control" id=rgCliente" name="rgCliente" placeholder="XXXXXXXX-X" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->rgCliente;
                            }?>">
                            </div>

                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telCliente">TELEFONE</label>
                            <input type="text" class="form-control" id="telCliente" name="telCliente" placeholder="(XX)X.XXXX-XXXX" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->telCliente;
                            }?>">
                        </div>                        
                        <div class="form-group col-md-6">
                            <label for="dataNascCliente">DATA NASCIMENTO</label>
                            <input type="date" class="form-control" id="dataNascCliente" name="dataNascCliente" placeholder="" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->dataNascCliente;
                            }?>">
                        </div>
                        </div>
                        
                        <div class="form-row">

                            <div class="form-group col-md-8">
                                <label for="enderecoCliente">ENDEREÇO</label>
                                <input type="text" class="form-control" id="enderecoCliente" name="enderecoCliente" placeholder="RUA X, N X, BAIRRO" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->enderecoCliente;
                            }?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cidadeCliente">CIDADE</label>
                                <input type="text" class="form-control" id="cidadeCliente" name="cidadeCliente" value="<?php
                            if (isset($cliente)){
                                echo $cliente[0]->cidadeCliente;
                            }?>">
                            </div>
                        </div>
                        <div class="line"></div>

                        <button type="submit" class="btn btn-primary">SALVAR</button>


                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>