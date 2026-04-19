<!-- Son todos los recursos JS que utilizamos  -->
<script src="public/jquery/jquery-3.6.0.min.js"></script>
<script src="public/bootstrap/popper.min.js"></script>
<script src="public/bootstrap/bootstrap.min.js"></script>
<script src="public/datatable/jquery.dataTables.min.js"></script>
<script src="public/datatable/dataTables.bootstrap4.min.js"></script>
<script src="public/datatable/dataTables.responsive.min.js"></script>
<script src="public/datatable/responsive.bootstrap4.min.js"></script>

<script src="public/datatable/dataTables.buttons.min.js"></script>
<script src="public/datatable/jszip.min.js"></script>
<script src="public/datatable/pdfmake.min.js"></script>
<script src="public/datatable/vfs_fonts.js"></script>
<script src="public/datatable/buttons.html5.min.js"></script>

<script>
        $(document).ready(function() {
            
            // Creamos una función en JS para que al momento de dar click en el botón de editar manda los datos que ya tenemos en el mismo input.
            $('.btnEditar').on('click', function() {
                var id = $(this).data('id');
                var nombre = $(this).data('nombre');
                var visitado = $(this).data('visitado');
                
                $('#idActualizar').val(id);
                $('#nombreActualizar').val(nombre);
                $('#visitadoActualizar').val(visitado);
            });

            // Es la forma de lograr que nuestra tabla sea responsiva
        $('#tablaPrincipal').DataTable({
            responsive: true,
            dom: 'Blfrtip', 
            buttons: [
                'copy', 'csv', 'excel', 'pdf' // Añadimos los botones
            ],

            // Hacemos la traducción a español
            language: {
                url: "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
            }
        });
        
    });
    
</script>
</body>
</html>