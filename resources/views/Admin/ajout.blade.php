
	<div class="modal fade" id="ajoutModal" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true" style="font-size : 20px;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                	<h3>NOUVEAU PUCE</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                                <form action="{{ route('flotte.user.store') }}" method="POST" class="form-material m-t-40 row">
                                    @csrf
                                    <div class="form-group col-md-6 m-t-20">
                                        <label for="name">NOM</label>
                                        <input name="name" type="text" class="form-control form-control-line"> </div>

                                        <div class="form-group col-md-6 m-t-20"></div>

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control form-control-line"> </div>

                                        <div class="form-group col-md-6 m-t-20">
                                            <label class="form-group" for="role">ROLE</label>
                                        @foreach($roles as $role)
                                        <input type="checkbox" class="form-check-input" name="roles[]" id="{{$role->id}}" >
                                            <label for="{{$role->id}}" class="form-check-label">{{$role->role}}</label>
                                            @endforeach
                                        </div>   

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="prenom">Password</label>
                                        <input name="prenom" type="prenom" class="form-control form-control-line"> </div>

                                        <div class="form-group col-md-6 m-t-20">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input name="password_confirmation" id="password-confirm" type="password" class="form-control form-control-line"> </div>

                                           

                                    </DIV>

                                
               
                <div class="modal-footer">
                	<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="font-size : 20px;"><i class="mdi mdi-close"> </i> Annuler</button>
                	<button type="submit" class="btn btn-primary waves-effect" style="font-size : 20px;"><i class="mdi mdi-floppy"> </i> Enreistrer</button>
                </div>
                </form>    
            </div>
        </div>
 </div>


