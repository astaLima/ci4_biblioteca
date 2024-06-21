<div class="container">
    <h2>Editora</h2>
<<<<<<< HEAD
    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Form"> Novo(a) <i class="fas fa"></i></button>
=======
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Form"> Novo(a) <i class="fas fa-plus"></i></button>
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>NOME</td>
                <td>EMAIL</td>
                <td>TELEFONE</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaEditora as $a) : ?>
            <tr>
                <td><?=$a['id']?></td>
                <td><?=$a['nome']?></td>
                <td><?=$a['email']?></td>
                <td><?=$a['telefone']?></td>
                <td>
<<<<<<< HEAD
                    <?=anchor("Editora/editar/".$a['id'], " ", ["class"=>"fas fa-edit btn btn-dark"])?>
                    <?=anchor("Editora/excluir/".$a['id'], " ", ["class"=>"fas fa-trash-alt btn btn-dark delete-button", "data-id"=>$a['id']])?>
=======
                    <?=anchor("Editora/editar/".$a['id'], " ", ["class"=>"fas fa-edit btn btn-primary"])?>
                    <?=anchor("Editora/excluir/".$a['id'], " ", ["class"=>"fas fa-trash-alt btn btn-outline-danger delete-button", "data-nome"=>$a['nome']])?>
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="Form" tabindex="-1" aria-labelledby="Form" aria-hidden="true">
    <?=form_open("Editora/cadastrar")?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Editora</h1>
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
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
<<<<<<< HEAD
                    <input id="telefone" name="telefone" type="tel" class="form-control" required>
=======
                    <input id="telefone" name="telefone"  maxlength="15" placeholder="(00) 00000-0000" type="tel" class="form-control" required>
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
                </div>
            </div>
            <div class="modal-footer">
                <?=anchor("Editora/index/", "Cancelar", ["class"=>"btn btn-outline-secondary"])?>
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
            var confirmDelete = confirm("Você tem certeza que deseja deletar a editora com ID " + id + "?");
=======
            var nome = this.getAttribute('data-nome');
            var confirmDelete = confirm("Você tem certeza que deseja deletar a editora " + nome + "?");
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
            
            if (confirmDelete) {
                window.location.href = this.getAttribute('href');
            }
        });
    });
});
<<<<<<< HEAD
=======


function formatTelefone(telefone) {
    telefone = telefone.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    telefone = telefone.replace(/(\d{2})(\d)/, "($1) $2"); // Coloca parênteses ao redor dos dois primeiros dígitos e espaço depois
    telefone = telefone.replace(/(\d{5})(\d)/, "$1-$2"); // Coloca um hífen entre o quinto e o sexto dígitos
    return telefone;
}

document.getElementById('telefone').addEventListener('input', function (e) {
    e.target.value = formatTelefone(e.target.value);
});
>>>>>>> 07b3c0adcb2e8e50dead5f833809957bf8ab7796
</script>
