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
            <h1 class="h3 display">Cadastro Cliente</h1>
        </header>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Preencha os dados corretamente</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="<?php echo base_url('welcome/cadastrarCliente');?>">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="form-group-material">
                                        <input id="nomeCliente" type="text" name="nomeCliente" required class="input-material">
                                        <label for="nomeCliente" class="label-material">Nome</label>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="cpfCliente" type="text" name="cpfCliente" required class="input-material">
                                        <label for="cpfCliente" class="label-material">CPF</label>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="rgCliente" type="text" name="rgCliente" required class="input-material">
                                        <label for="rgCliente" class="label-material">RG                                                      </label>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="telCliente" type="text" name="telCliente" required class="input-material">
                                        <label for="telCliente" class="label-material">Telefone</label>
                                    </div>
                                    <div class="form-group-material">
                                        
                                        <input id="dataNascCliente" type="date" name="dataNascCliente" required class="input-material">
                                        <span class="text-small text-gray help-block-none">Data de Nascimento</span>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="enderecoCliente" type="text" name="enderecoCliente" required class="input-material">
                                        <label for="enderecoCliente" class="label-material">Endereço</label>
                                    </div>
                                    <div class="form-group-material">
                                        <input id="cidadeCliente" type="text" name="cidadeCliente" required class="input-material">
                                        <label for="cidadeCliente" class="label-material">Cidade</label>
                                    </div>
                                </div>
                            </div>
                    <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-2">
                                    <button type="submit" class="btn btn-secondary">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>