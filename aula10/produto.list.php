
<script >
    function excluir(id, nome) {
      var ok = confirm("Deseja mesmo excluir "+nome+"?");
      if (ok==true) {
         window.location.href = "/produto?operacao=excluir&id="+id; 
      } 

    }
</script>  

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a class="btn btn-outline-primary outlined-button" 
         type="button" href="?operacao=incluir">Novo</a>
    </div>
    
    <table class="table table-striped border mt-2 ">
      <thead>  
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th></th>
        </tr>
      </thead>  
             
      <tbody>
      <?php
         $produtos = $dao->listar();
         foreach($produtos as $pro) {
       ?>
            <tr>
              <td><?=$pro->getId()?></td>      
              <td><?=$pro->getNome()?></td>
              <td>R$ <?=$pro->getPreco()?></td>
              <td style="text-align: end;">
                <div class="btn-group " role="group">
                  <a href="/produto?operacao=alterar&id=<?=$pro->getId()?>" 
                         class="btn btn-outline-warning">Alterar</a>
                  <a href="#!" onclick="excluir(<?=$pro->getId()?>,'<?=$pro->getNome()?>')" class="btn btn-outline-danger">Excluir</a>
                  
                </div>
              </td>
            </tr>   
       <?php
         }
       ?>     
      </tbody>  
    </table>
