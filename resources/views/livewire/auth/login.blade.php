<div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <form wire:submit.privent='loginUser'>
                        <div class="mb-3">
                          <label for="email" class="form-label">email</label>
                          <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="" aria-describedby="helpId" wire:model.difer='email'>
                          @error('email')
                          <div class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="" aria-describedby="helpId" wire:model.difer='password'>
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="remember" >
                              <label class="form-check-label" for="remember">
                                Remember me
                              </label>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
