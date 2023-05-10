@extends('layouts.base')

@section('title', 'LISTA')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/apps/contacts.css') }}" rel="stylesheet" type="text/css" />
    
@endsection

@section('content')
    <div class="searchable-items list">
        <div class="items items-header-section">
            <div class="item-content">
                <div class="">
                    <div class="n-chk align-self-center text-center">
                        <label class="new-control new-checkbox checkbox-primary">
                        <input type="checkbox" class="new-control-input" id="contact-check-all">
                        <span class="new-control-indicator"></span>
                        </label>
                    </div>
                    
                    <h4>Título</h4>
                </div>
                <div class="user-email">
                    <h4>Categoría</h4>
                </div>
                <div class="user-location">
                    <h4 style="margin-left: 0;">Prioridad</h4>
                </div>
                <div class="user-phone">
                    <h4 style="margin-left: 3px;">Status</h4>
                </div>
                <div class="action-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                </div>
            </div>
        </div>
        @foreach ($incidencias as $incidencia)
            <div class="items">
                <div class="item-content">
                    <div class="user-profile">
                        <div class="n-chk align-self-center text-center">
                            <label class="new-control new-checkbox checkbox-primary">
                            <input type="checkbox" class="new-control-input contact-chkbox">
                            <span class="new-control-indicator"></span>
                            </label>
                        </div>
                        <img src="assets/img/90x90.jpg" alt="avatar">
                        <div class="user-meta-info">
                            <p class="user-name" data-name="{{$incidencia->titulo}}">{{$incidencia->titulo}}</p>
                            {{-- <p class="user-work" data-occupation="Web Developer">Web Developer</p> --}}
                        </div>
                    </div>

                    <div class="user-meta-info">
                        <p class="user-name" data-categoria="{{$incidencia->categoria->nombre}}">{{$incidencia->categoria->nombre}}</p>
                        {{-- <p class="user-work" data-occupation="Web Developer">Web Developer</p> --}}
                    </div>

                    <div class="user-meta-info">
                        <p class="user-name" data-name="{{$incidencia->emergencia->nombre}}">{{$incidencia->emergencia->nombre}}</p>
                        {{-- <p class="user-work" data-occupation="Web Developer">Web Developer</p> --}}
                    </div>

                    <div class="user-meta-info">
                        <p class="user-name" data-name="{{$incidencia->statu->nombre}}">{{$incidencia->statu->nombre}}</p>
                        {{-- <p class="user-work" data-occupation="Web Developer">Web Developer</p> --}}
                    </div>

                    {{-- <div class="user-email">
                        <p class="info-title">Email: </p>
                        <p class="usr-email-addr" data-email="alan@mail.com">alan@mail.com</p>
                    </div>
                    <div class="user-location">
                        <p class="info-title">Location: </p>
                        <p class="usr-location" data-location="Boston, USA">Boston, USA</p>
                    </div>
                    <div class="user-phone">
                        <p class="info-title">Phone: </p>
                        <p class="usr-ph-no" data-phone="+1 (070) 123-4567">+1 (070) 123-4567</p>
                    </div> --}}
                    <div class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-minus delete"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                        
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@section('scripts')
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/apps/contact.js"></script>

    {{-- <script>
        $(document).ready(function() {
            // Función para cargar las subcategorías según la categoría seleccionada
            $('#category_id').on('change', function() {
                var category_id = $(this).val();
                if(category_id) {
                    $.ajax({
                        url: "{{ route('subcategories.get-by-category') }}",
                        type:"GET",
                        data: {category_id: category_id},
                        dataType:"json",
                        success:function(data) {
                            $('#subcategory_id').empty();
                            $('#subcategory_id').append('<option value="">Seleccionar Subcategoría</option>');
                            $.each(data,function(key,value){
                                $('#subcategory_id').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                } else {
                    $('#subcategory_id').empty();
                    $('#subcategory_id').append('<option value="">Seleccionar Subcategoría</option>');
                }
            });

            // Función para cargar los estados según la emergencia seleccionada
            $('#emergency_id').on('change', function() {
                var emergency_id = $(this).val();
                if(emergency_id) {
                    $.ajax({
                        url: "{{ route('statuses.get-by-emergency') }}",
                        type:"GET",
                        data: {emergency_id: emergency_id},
                        dataType:"json",
                        success:function(data) {
                            $('#status_id').empty();
                            $('#status_id').append('<option value="">Seleccionar Estado</option>');
                            $.each(data,function(key,value){
                                $('#status_id').append('<option value="'+key+'">'+value+'</option>');
                            });
                        }
                    });
                } else {
                    $('#status_id').empty();
                    $('#status_id').append('<option value="">Seleccionar Estado</option>');
                }
            });

            // Función para abrir el modal de edición
            $(document).on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                var title = $(this).data('title');
                var slug = $(this).data('slug');
                var description = $(this).data('description');
                var category_id = $(this).data('category-id');
                var subcategory_id = $(this).data('subcategory-id');
                var emergency_id = $(this).data('emergency-id');
                var status_id = $(this).data('status-id');

                $('#editModal').modal('show');
                $('#edit_id').val(id);
                $('#edit_title').val(title);
                $('#edit_slug').val(slug);
                $('#edit_description').val(description);
                $('#edit_category_id').val(category_id);
                $('#edit_category_id').trigger('change'); // Cargar subcategorías
                $('#edit_subcategory_id').val(subcategory_id);
                $('#edit_emergency_id').val(emergency_id);
                $('#edit_emergency_id').trigger('change'); // Cargar estados
                $('#edit_status_id').val(status_id);
            });

            // Función para actualizar el registro
            $('#update-form').submit(function(e) {
                e.preventDefault();
                var id = $('#edit_id').val();
                var url = "{{ route('incidents.update', ':id') }}".replace(':id', id);

                $.ajax({
                    url: url,
                    method: 'PUT',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#editModal').modal('hide');
                        location.reload();
                    }
                });
            });
        });
    </script> --}}

@endsection