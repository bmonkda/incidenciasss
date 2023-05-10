<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                <div class="add-contact-box">
                    <div class="add-contact-content">
                        <form id="addContactModalTitle">
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" id="title" class="form-control" placeholder="Título">
                                <span class="validation-text"></span>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" id="slug" class="form-control" placeholder="Slug">
                                <span class="validation-text"></span>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea id="description" class="form-control" placeholder="Descripción"></textarea>
                                <span class="validation-text"></span>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <select id="categoria" class="form-control">
                                    {{-- @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach --}}
                                    <option value="">Pending</option>
                                    <option value="1">Task 1</option>
                                    <option value="2">Task 2</option>
                                    <option value="3">Task 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subcategoria">Subcategoría</label>
                                <select id="subcategoria" class="form-control" disabled>
                                    <option value="">Selecciona una categoría primero</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="emergencia">Emergencia</label>
                                <select id="emergencia" class="form-control">
                                    @foreach($emergencias as $emergencia)
                                        <option value="{{ $emergencia->id }}">{{ $emergencia->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn-edit" class="float-left btn">Guardar</button>

                <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Descartar</button>

                <button id="btn-add" class="btn">Agregar</button>
            </div>
        </div>
    </div>
</div>
