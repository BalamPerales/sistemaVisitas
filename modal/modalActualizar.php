<!-- Modal de actualizar -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar Datos de Visita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form action="crud/update.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" id="idActualizar" name="id_visitas">
                    
                    <div class="form-group">
                        <label>Nombre de quien visita</label>
                        <input type="text" class="form-control" id="nombreActualizar" name="nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Persona o lugar a visitar</label>
                        <input type="text" class="form-control" id="visitadoActualizar" name="personaVisitada" required>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>