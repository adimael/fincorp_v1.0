<footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="javascript:void(0);">Fincorp</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
  
  <!-- modal Cadastrar novo cliente-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Novo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="" class="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-cliente" class="">Nome do cliente</label>
            <input name="txtnome" id="nome-cliente" placeholder="Nome completo do cliente" type="text" autocomplete="off" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="cpf_cliente" class="">CPF</label>
            <input name="txtcpf" id="cpf-cliente" placeholder="Digite o CPF do cliente..." type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="telefone_cliente" class="">Telefone</label>
            <input name="txttelefone" id="telefone-cliente" placeholder="Número para contato" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="email_cliente" class="">Email</label>
            <input name="txtemail" id="email-cliente" placeholder="E-mail do cliente" type="email" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="exampleAddress" class="">Endereço</label>
    <input name="txtendereco" id="exampleAddress" placeholder="Rua Bairro Nº" type="text" class="form-control" required>
</div>
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="exampleCity" class="">Cidade</label>
            <input name="txtcidade" id="exampleCity" placeholder="Cidade" type="text" class="form-control" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="position-relative form-group">
            <label for="exampleState" class="">Estado</label>
            <input name="txtestado" id="exampleState" type="text" placeholder="Estado" class="form-control" required>
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="exampleZip" class="">CEP</label>
            <input name="txtcep" id="cep-cliente" placeholder="CEP" type="text" class="form-control" required>
        </div>
    </div>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="cadastrar-cliente">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- modal Cadastrar novo Produto -->
  <div class="modal bd-example-modal-lg-produto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
  aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cadastrar novo produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="" class="">
<div class="form-row">
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-produto" class="">Nome/Marca do produto</label>
            <input name="txtproduto" autocomplete="off" id="nome-produto" placeholder="Nome do produto" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="codigo-produto" class="">Código</label>
            <input name="txtcodigo_barra" id="codigo-produto" placeholder="Código de barra" type="text" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
                  <label for="nome-cliente" class="">Categoria</label>
                  <select name="txtcategoria" class="form-control select2" style="width: 100%;">
                    <option selected="selected" disabled>Selecione a categoria do produto...</option>
                  </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="position-relative form-group">
            <label for="nome-produto" class="">Quantidade</label>
            <input name="txtquantidade" autocomplete="off" id="nome-produto" placeholder="Quantidade do produto..." type="number" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="desproduto" class="">Descrição</label>
    <textarea name="txtdesproduto" id="desproduto" placeholder="Descrição do produto" type="text" class="form-control"></textarea>
</div>
<div class="form-row">
    <div class="col-md-5">
        <div class="position-relative form-group">
                  <label for="nome-cliente" class="">Fornecedor</label>
                  <select name="txtfornecedor" class="form-control select2" style="width: 100%;">
                    <option selected="selected" disabled>Selecione o fornecedor do produto...</option>
                  </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="position-relative form-group">
            <label for="valor" class="">Valor</label>
            <input name="txtvalor" id="valor" placeholder="R$" type="text" class="form-control">
        </div>
    </div>
</div>
<div class="position-relative form-group">
    <label for="fotoperfil" class="">Foto do produto:</label>
    <input name="img" id="fotoperfil" type="file" class="form-control" required>
</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="cadastrar-produto">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
</div>