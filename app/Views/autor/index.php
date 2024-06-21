<div class="container">
    <h2>Autor</h2>
<<<<<<< HEAD
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Form">Novo <i class="fas fa"></i></button>
=======
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Form">Novo <i class="fas fa-plus"></i></button>
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
    <table class="table">
    <thead>
       <tr>
        <td>ID</td>
        <td>NOME</td>
    </thead>
    <tbody>
        <?php foreach($listaAutores as $a) : ?>
            <tr>
                <td><?=$a['id']?></td>
                <td><?=$a['nome']?></td>
                <td>
<<<<<<< HEAD
                    <?=anchor("Autor/editar/".$a['id'], " ", ["class"=>"fas fa-edit btn btn-dark"])?>
                    <?=anchor("Autor/excluir/".$a['id'], " ", ["class"=>"fas fa-trash-alt btn btn-dark delete-button", "data-id"=>$a['id']])?>
=======
                    <?=anchor("Autor/editar/".$a['id'], " ", ["class"=>"fas fa-edit btn btn-primary"])?>
                    <?=anchor("Autor/excluir/".$a['id'], " ", ["class"=>"fas fa-trash-alt btn btn-outline-danger delete-button", "data-nome"=>$a['nome']])?>
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
               </td>
            </tr>
        <?php endforeach ?>
    </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="Form" tabindex="-1" aria-labelledby="Form" aria-hidden="true">
    <?=form_open("Autor/cadastrar")?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Autor</h1>
<<<<<<< HEAD
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
=======
           
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input id="nome" name="nome" type="text" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <?=anchor("Autor/index/", "Cancelar", ["class"=>"btn btn-outline-secondary"])?>
<<<<<<< HEAD
                <button type="submit" class="btn btn-dark">Cadastrar</button>
=======
                <button type="submit" class="btn btn-primary">Cadastrar</button>
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
            </div>
        </div>
    </div>
    <?=form_close()?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.querySelectorAll('.delete-button');
    
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
<<<<<<< HEAD
            var id = this.getAttribute('data-id');
            var confirmDelete = confirm("Você tem certeza que deseja deletar o autor com ID " + id + "?");
=======
            var nome = this.getAttribute('data-nome');
            var confirmDelete = confirm("Você tem certeza que deseja deletar o autor " + nome + "?");
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
            
            if (confirmDelete) {
                window.location.href = this.getAttribute('href');
            }
        });
    });
});
</script>
