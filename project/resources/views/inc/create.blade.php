@include('inc.header')

<form method="post" action="/insert">
    <fieldset>
        <legend>New User</legend>
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="Name" class="form-control" id="exampleInputPassword1" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="Name" class="form-control" id="exampleInputPassword1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Remeber Token</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Remeber Token">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="nav-link" href="/crud">cancel</a>
    </fieldset>
</form>
</form>

@include('inc.footer')
