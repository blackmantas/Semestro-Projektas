@include('SemPro.header')

<form class="form-inline my-2 my-lg-0" method="post" action="{{ route('filtered.search') }}">
    @csrf
    <label title="minPrice">
        <input name="minPrice" class="form-control mr-sm-2" type="number" placeholder="minimum Price">
    </label>
    <label>
        <input name="maxPrice" class="form-control mr-sm-2" type="number" placeholder="maximum Price">
    </label>
    <label>
        <input name="minSize" class="form-control mr-sm-2" type="number" placeholder="minimum Size">
    </label>
    <label>
        <input name="maxSize" class="form-control mr-sm-2" type="number" placeholder="maximum Size">
    </label>
    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
</form>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Email verified at</th>
        <th scope="col">Password</th>
        <th scope="col">Remember_token</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Actions</th>
        <th scope="col">Actions</th>
        <th scope="col">Actions</th>
        <th scope="col">Actions</th>
        <th scope="col">Actions</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>


    <tbody>

    
    </tbody>
</table>

@include('SemPro.footer')
