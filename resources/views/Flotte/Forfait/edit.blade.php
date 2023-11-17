
	<div class="modal fade" id="warningModal{{$forfait->id}}" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                	<h3>NOUVEAU FORFAIT</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                                <form action="{{route('flotte.forfait.update',$forfait->id)}}" method="POST" class="form-material m-t-40 row">
                                    @csrf
                                    @method('PATCH')
                                    <div  class="form-group col-md-6 m-t-20">
                                        <label for="id_tarif" class="form-group">TARIF</label>
                                        @foreach($tarif as $tarif)
                                            <div class="form-check-inline">
                                                <input type="radio" name="id_tarif" class="form-check-input" value="{{ $tarif->id }}" {{$forfait->id_tarif == $tarif->id ? 'checked' : ''}}>
                                                <label class="form-check-label" for="id_tarif">
                                                    {{ $tarif->tarif }} mois
                                                </label>
                                            </div>
                                        @endforeach


                                    </div>
                                    
                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="id_forfait" >FORFAIT</label>
                                        <select name="id_forfait" class="form-control">
                                        @foreach($forf as $forf)    
                                            <option value="{{$forf->id}}" {{$forfait->id_forfait == $forf->id ? 'selected' : ''}} >{{$forf->nomforfait}}</option>
                                        @endforeach    
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="prix">PRIX</label>
                                        <input name="prix" type="text" class="form-control form-control-line" value="{{$forfait->prix}}"> </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="validite">VALIDITE</label>
                                        <input name="validite" type="text" class="form-control form-control-line" value="{{$forfait->validite}}"> </div>
                                    </div>
                                
               
                <div class="modal-footer">
                	<button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Annuler</button>
                	<button type="submit" class="btn btn-success">Enreistrer</button>
                </div>
                </form>    
            </div>
        </div>
 </div>


