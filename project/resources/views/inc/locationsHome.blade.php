@include('inc.header')
<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Municipality</th>

            </tr>
            </thead>
            @if(count($locations) > 0)
            @foreach($locations->all() as $location)
            <tbody>
            <tr class="table-active">
                <th scope="row">{{ $location->id }}</th>
                <td>{{ $location->Municipality }}</td>

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
