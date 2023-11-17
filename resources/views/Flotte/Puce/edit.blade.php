
	<div class="modal fade" id="editModal{{$puce->id}}" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true" style="font-size : 20px;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                	<h3>NOUVEAU PUCE</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                                <form action="{{route('flotte.puce.update',$puce->id)}}" method="POST" class="form-material m-t-40 row">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="numero">NUMERO</label>
                                        <input name="numero" type="text" class="form-control form-control-line" value="{{$puce->numero}}"> </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="operateur">OPERATEUR</label>
                                        <select name="operateur" type="text" class="form-control form-control-line" >
                                            <option >{{$puce->operateur}}</option>
                                        </select> </div>   

                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="numpuk">PUK</label>
                                        <input name="numpuk" type="text" class="form-control form-control-line" value="{{$puce->numpuk}}"> </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="numserial">SERIAL</label>
                                        <input name="numserial" type="text" class="form-control form-control-line" value="{{$puce->numserial}}"> </div>   

                                    </DIV>

                                
               
                <div class="modal-footer">
                	<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="font-size : 20px;"><i class="mdi mdi-close"> </i> Annuler</button>
                    <button type="submit" class="btn btn-primary waves-effect" style="font-size : 20px;"><i class="mdi mdi-floppy"> </i> Enreistrer</button>
                </div>
                </form>    
            </div>
        </div>
 </div>


