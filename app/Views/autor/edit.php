<div class="container p-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 bg-dark text-white p-4" data-bs-theme="dark">
             <?=form_open("Autor/salvar")?>
                <input type="hidden" name="id" id="id" value='<?=$autor['id']?>'>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="nome" id="nome" class="form_control" value='<?=$autor['nome']?>'>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="btn-group w-100" role="group">
                                <?=anchor("Autor/index/","Cancelar", ["class"=>"btn btn-outline-secondary"])?>
                                <button type="submit" class="btn btn-outline-success">Salvar</button>
                        </div>
                    </div>
                </div>                  
            <?=form_close()?> 
        </div>  
    </div>
</div>