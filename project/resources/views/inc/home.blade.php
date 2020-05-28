@include('inc.header')
    <div class="container">
        <div class="row">
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
                </tr>
                </thead>
                @if(count($users) > 0)
                    @foreach($users->all() as $user)
                        <tbody>
                        <tr class="table-active">
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->email_verified_at}}</td>
                            <td>{{ $user->password}}</td>
                            <td>{{ $user->remember_token}}</td>
                            <td>{{ $user->created_at}}</td>
                            <td>{{ $user->updated_at}}</td>
                            <td>
                                <a href="" class="label">Read</a> |
                                <a href="" class="label">Update </a>|
                                <a href="" class="label">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@include('inc.footer')
