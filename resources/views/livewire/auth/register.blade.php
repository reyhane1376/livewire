<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3>Register Page</h3>
                <form wire:submit.prevent="register">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label mb-3">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" wire:model="user.name">
                            @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>

                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label mb-3">Email</label>
                        <div class="col-sm-10">
                            <input type="user.email" class="form-control" id="inputEmail3" wire:model="user.email">
                            @error('email')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label mb-3">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" wire:model="user.password">
                            @error('password')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>