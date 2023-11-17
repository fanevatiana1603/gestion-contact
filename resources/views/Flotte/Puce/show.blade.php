<div class="modal fade" id="showModal{{$puce->id}}" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>A propos</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                                        <form class="form-material m-t-40 row text-center">
                                            <div class="form-group col-md-6 m-t-20">
                                                <label >NUMERO</label>
                                                    <input type="text" class="form-control form-control-line text-center" placeholder="{{$puce->numero}}">
                                                
                                            </div>

                                            <div class="form-group col-md-6 m-t-20">
                                                <label >PUK</label>
                                                    <input type="text" class="form-control form-control-line text-center"  id="example-email" placeholder="{{$puce->numpuk}}">
                                            </div>

                                            <div class="form-group col-md-6 m-t-20">
                                                <label >SERIAL</label>
                                                    <input type="text" class="form-control form-control-line text-center"  id="example-email" placeholder="{{$puce->numserial}}">
                                            </div>

                                            <div class="form-group col-md-6 m-t-20">
                                                <label >OPERATEUR</label>
                                                    <input type="text" class="form-control form-control-line text-center"  id="example-email" placeholder="{{$puce->operateur}}">
                                            </div>


                                        </form>    
                                            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
