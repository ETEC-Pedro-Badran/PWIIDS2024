

<div class="container">
  <form method='post' action="/produto/salvar" enctype="multipart/form-data">  
    <input type="hidden" name="id" value="<?=$id?>">
    <figure class="figure w-30 h-30">
    <img src="./img/semimagem.png" class="rounded mx-auto d-block" alt=""
      style="width:200px;height:200px">
    </figure>
    <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="nome" class="form-control" id="nome" name="nome" placeholder="Nome do Produto"
    value="<?=$produto->getNome()?>">
    </div>
    <div class="mb-3">
    <label for="preco" class="form-label">Preço</label>
    <input type="currency"  class="form-control" id="preco" name="preco"
     placeholder="Preço de venda do Produto"
    value="<?=$produto->getPreco()?>"
    >
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <input type="submit" value="salvar" class="btn btn-outline-primary">
    </div>
</form>
</div>