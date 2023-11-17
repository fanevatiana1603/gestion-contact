
    <div class="modal fade" id="editModal{{$usager->id}}" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true" style="font-size : 20px;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h3>NOUVEAU PUCE</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                                <form action="{{route('flotte.usager.update',$usager->id)}}" method="POST" class="form-material m-t-40 row">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="nom">NOM</label>
                                        <input name="nom" type="text" class="form-control form-control-line" value="{{$usager->nom}}"> </div>

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="prenom">PRENOM</label>
                                        <input name="prenom" type="text" class="form-control form-control-line" value="{{$usager->prenom}}"> </div>

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="direction">DIRECTION</label>
                                        <input name="direction" type="text" class="form-control form-control-line" value="{{$usager->direction}}"> </div>

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="service">SERVICE</label>
                                        <input name="service" type="text" class="form-control form-control-line" value="{{$usager->service}}"> </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="offre">OFFRE</label>
                                        <select name="id_offre" class="form-control form-control-line text-center" >
                                            @foreach($offre as $offre)
                                            <option value="{{$offre->id}}" {{$usager->id_offre == $offre->id ? 'selected' : ''}}>{{$offre->offre}}</option>
                                            @endforeach
                                        </select> </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="id_puce">CARTE SIM</label>
                                        <select name="id_puce" class="form-control form-control-line text-center" >
                                            @foreach($puce as $puce)
                                            <option value="{{$puce->id}}" {{$usager->id_puce == $puce->id ? 'selected' : ''}}>{{$puce->numero}}</option>
                                            @endforeach
                                        </select> </div>

                                        
                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="ligne">LIGNE</label>
                                        <select name="ligne" type="text" class="form-control form-control-line text-center" > 
                                            <option>{{$usager->ligne}}</option>
                                        </select> </div>

                                    


                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="forfait_id">FORFAIT TARIF 12 MOIS</label>
                                        <select name="forfait_id" class="form-control form-control-line text-center" >
                                            @foreach($forfait as $forfaits)
                                            <option value="{{$forfaits->id}}" {{$usager->forfait_id == $forfaits->id ? 'selected' : ''}}>{{$forfaits->nomforfait}}-- {{$forfaits->volume}} -- {{$forfaits->prix}}Ar</option>
                                            @endforeach
                                        </select> </div>

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="consommation">CONSOMMATION</label>
                                        <input name="consommation" type="text" class="form-control form-control-line" value="{{$usager->consommation}}"> </div> 

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="localite">LOCALITE</label>
                                        <input name="localite" type="text" class="form-control form-control-line" value="{{$usager->localite}}"> </div>         

                                    </DIV>

                                
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="font-size : 20px;"><i class="mdi mdi-close"> </i> Annuler</button>
                    <button type="submit" class="btn btn-primary waves-effect" style="font-size : 20px;"><i class="mdi mdi-floppy"> </i> Enreistrer</button>
                </div>
                </form>    
            </div>
        </div>
 </div>


