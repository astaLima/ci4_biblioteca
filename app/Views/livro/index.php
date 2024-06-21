<!-- indica o inicio do index, "o corpo do site " -->

    <div class="container">
        <h2>Livro</h2>

        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Form"> Novo <i class="fas fa"></i></button>
    <table class="table">
    </div>
    <thead>
       <tr>
        <td>ID</td>
        <td>Quantidades Disponivel</td>
        <td>Status</td>
        <td>Obra</td>

    </thead>
    <TBody>
        <?php foreach($listaLivros as $l) :?>
            
            <tr>
                <td>
                    <?=$l['id']?>
                </td>
                <td>
                    <?=$l['disponivel']?>
                </td>
                <td>
                    <?=$l['status']?>
                </td>
                <td>
                <?php foreach($listaObras as $obra) : ?>
                    <?php if($obra['id'] == $l['id_obra']) : ?>
                        <?=$obra['titulo']?> 
                    <?php endif; ?>
                <?php endforeach; ?>
                </td>
                    <td>
                    <?=anchor("Livro/editar/".$l['id']," ",["class"=>"fas fa-edit btn btn-dark"])?>
                    <?=anchor("Livro/excluir/".$l["id"]," ",["class"=>"fas fa-trash-alt btn btn-dark"])?>
               </td>
            </tr>
        <?php endforeach?>
    </TBody>
</table>

<!-- Modal -->
<div class="modal fade" id="Form" tabindex="-1" aria-labelledby="Form" aria-hidden="true">
        <?=form_open("Livro/cadastrar")?>
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Livro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                   <div class="form-group">
                        <label for="disponivel">Disponivel</label>
                        <input id="disponivel" name="disponivel" type="number" class="form-control" min="0" required>
                   </div>
                   <div class="form-group">
                        <label for="status">status</label>
                        <input id="status" name="status" type="text" class="form-control" required>
                   </div>
                   <div class="form-group" >
                      <label for="obra">obra</label>
                      <select class="form-control" id="id_obra" name="id_obra">
                        <option selected hidden>Selecione uma obra</option>
                        <?php foreach($listaObras as $obra) : ?>
                            <option value="<?=$obra['id']?>"><?=$obra['titulo']?></option>
                            <?php endforeach ?>
                      </select>
                    </div>

                </div>
                        <div class="modal-footer">
                        <?=anchor("Livro/index/","Cancelar", ["class"=>"btn btn-outline-secondary"])?>
                            <button type="submit" class="btn btn-dark">Cadastrar</button>
                        </div>
        </div>
    </div>
    <?=form_close()?>
</div>

