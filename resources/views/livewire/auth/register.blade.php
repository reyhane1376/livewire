<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3>Register Page</h3>
                <form wire:submit.prevent="register">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label mb-3">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3"
                                wire:change="changeValue($event.target.value)" value="{{ $name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label mb-3">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" value="{{ $email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label mb-3">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" value="{{ $password }}">
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