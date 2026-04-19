<!-- Modal para agregar, sólo requerimos nombre de quién visita, a quién y ya -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Nueva Visita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="crud/create.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre de quien visita</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="personaVisitada">Persona a quien visita</label>
                        <input type="text" class="form-control" id="personaVisitada" name="personaVisitada" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Visita</button>
                </div>
            </form>

        </div>
    </div>
</div>