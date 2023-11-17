<div class="modal fade text-center" id="deleteModal{{$usager->id}}" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Voulez-vous supprimer?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Annuler</button>
                 <form action="{{route('flotte.usager.destroy',$usager->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"> </i> Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>


   <script>
    $(document).ready(function() {
        $("#afficherFormulaire").click(function() {
            $("#monFormulaire").toggle(); // Affiche ou cache le formulaire
        });
    });
</script>