
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-outline-primary outlined-button" type="button">Novo</button>
    </div>
    
    <table class="table table-striped border mt-2">
      <thead>  
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
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
            </tr>   
       <?php
         }
       ?>     
      </tbody>  
    </table>
