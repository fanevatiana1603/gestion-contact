
	<div class="modal fade" id="editModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="warningModalLabel" aria-hidden="true" style="font-size : 20px;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                	<h3>MODIFICATION</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                                <form action="{{route('flotte.user.update',$value->id)}}" method="POST" class="form-material m-t-40 row">
                                    @csrf
                                    @method('PATCH')

                        <div class="form-group col-md-6 m-t-20">
                            <label for="name">NOM</label>
                            <input name="name" type="text" class="form-control form-control-line" value="{{ old('name')?? $value->name}}"> 
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group col-md-6 m-t-20">
                            <label for="email">EMAIL</label>
                            <input name="email" type="email" class="form-control form-control-line @error('email') is-invalid @enderror" value="{{ old('email') ?? $value->email }}" required autocomplete="email"> 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        

                        <div class="form-group col-md-6 m-t-20">
                            <label class="form-group" for="role">ROLE</label>
                            @foreach($roles as $role)
                            <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="{{$role->id}}" @if ($value->roles->pluck('id')->contains ($role->id)) checked @endif >
                                <label for="{{$role->id}}" class="form-check-label">{{$role->role}}</label>
                                @endforeach
                        </div>

                    
                        <div class="form-group col-md-6 m-t-20">
                            <label class="form-group" for="image">IMAGE</label>
                                      <label for="image" class="btn btn-primary">
                                          <i class="mdi mdi-camera"></i> Sélectionner un fichier
                                      </label>
                                      <input type="file" class="form-control" id="image" name="image" value="{{old('image') ?? $value->image}}" style="display: none;">
                        </div>

                                    <hr class="sidebar-divider my-0">
                        
                </div>
                <div class="modal-footer">
                	<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal" style="font-size : 20px;"><i class="mdi mdi-close"> </i> Annuler</button>
                    <button type="submit" class="btn btn-primary waves-effect" style="font-size : 20px;"><i class="mdi mdi-floppy"> </i> Enreistrer</button>
                </div>
                </form>    
            </div>
        </div>
 </div>


