<!-- Cria a parte de editar as informações que estão no banco de dados -->
<div class="container p-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 bg-dark text-white p-4" data-bs-theme="dark">
            <?= form_open("Obra/salvar", ["onsubmit" => "return validateForm()"]) ?>
                <input type="hidden" name="id" id="id" value="<?= $obra['id'] ?>">
                <div class="row p-2">
                    <div class="col-2">
                        <label for="isbn">ISBN</label>
                    </div>
                    <div class="col-10">
                        <input type="text" maxlength="17" placeholder="XXX-X-XX-XXXXXX-X" name="isbn" id="isbn" class="form-control" value="<?= $obra['isbn'] ?>">
                        <span id="isbn-error" class="error-message">Formato do ISBN incorreto</span>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="titulo">Título</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="titulo" id="titulo" class="form-control" value="<?= $obra['titulo'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="categoria">Categoria</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="categoria" id="categoria" class="form-control" value="<?= $obra['categoria'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="ano_publicacao">Ano</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="ano_publicacao" maxlength="4" placeholder="Ano" id="ano_publicacao" class="form-control" value="<?= $obra['ano_publicacao'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="editora">Editora</label>
                    </div>
                    <div class="col-10">
                        <input disabled type="text" name="editora" id="editora" class="form-control" value="<?= $obra['id_editora'] ?>">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-2">
                        <label for="autores">Autores</label>
                    </div>
                    <div class="col-10">
                        <?php 
                        $autores;
                        foreach($listaAutores as $autor):
                            $autores[$autor['id']] = $autor['nome'];
                        endforeach;
                        ?>
                        <?php foreach($listaAutoresObras as $lao) : ?>
                            <?php if($lao['id_obra'] == $obra['id']) :?>
                                <div>
                                    <?= $autores[$lao["id_autor"]] ?>
                                    <?= anchor("Obra/deletarAutorObra/".$obra['id']."/".$lao['id_autor'], "<i class='fas fa-trash-alt'></i>", ["class"=>"btn btn-outline-danger btn-sm"]) ?>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?> 
                        <!-- Button Adicionar Autor da Obra -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Form-add">Adicionar... <i class="fas fa-plus"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="btn-group w-100" role="group">
                            <?= anchor("Obra/index/", "Cancelar", ["class"=>"btn btn-outline-secondary"]) ?>
                            <button type="submit" class="btn btn-outline-success">Salvar</button>
                        </div>
                    </div>
                </div>           
            <?= form_close() ?> 
        </div>  
    </div>
</div>

<div class="modal fade" id="Form-add" tabindex="-1" aria-labelledby="Form-add" aria-hidden="true">
    <?= form_open("Obra/adicionarAutor") ?>
        <input value="<?= $obra['id'] ?>" type="hidden" name="id_obra" id="id_obra">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lista de Autores</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <select class="form-control" id="id_autor" name="id_autor">
                            <option selected hidden>Selecione um autor</option>
                            <?php foreach($listaAutores as $autor) : ?>
                                <option value="<?= $autor['id'] ?>"><?= $autor['nome'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <?= anchor("Obra/index/", "Cancelar", ["class"=>"btn btn-outline-secondary"]) ?>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
    <?= form_close() ?>
</div>

<style>
    .error-message {
        display: none;
        color: red;
        margin-top: 5px;
    }
</style>

<script>
    function formatISBN(isbn) {
        isbn = isbn.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
        isbn = isbn.replace(/(\d{3})(\d)/, "$1-$2"); // Coloca um hífen após os primeiros três dígitos
        isbn = isbn.replace(/(\d)(\d{2})/, "$1-$2"); // Coloca um hífen após o quarto dígito
        isbn = isbn.replace(/(\d{2})(\d{6})/, "$1-$2"); // Coloca um hífen após os seis dígitos subsequentes
        isbn = isbn.replace(/(\d{6})(\d)/, "$1-$2"); // Coloca um hífen após os seis dígitos subsequentes
        return isbn;
    }

    document.getElementById('isbn').addEventListener('input', function (e) {
        let value = e.target.value;
        value = formatISBN(value);
        e.target.value = value;

        const errorMessage = document.getElementById('isbn-error');
        if (value.length !== 17) {
            errorMessage.style.display = 'block';
        } else {
            errorMessage.style.display = 'none';
        }
    });

    function validateForm() {
        const isbn = document.getElementById('isbn').value;
        const errorMessage = document.getElementById('isbn-error');
        if (isbn.length !== 17) {
            errorMessage.style.display = 'block';
            return false; // Impede o envio do formulário
        } else {
            errorMessage.style.display = 'none';
            return true; // Permite o envio do formulário
        }
    }

    function formatAno(ano) {
        return ano.replace(/\D/g, ""); // Remove todos os caracteres não numéricos
    }

    document.getElementById('ano_publicacao').addEventListener('input', function (e) {
        e.target.value = formatAno(e.target.value);
    });
</script>
