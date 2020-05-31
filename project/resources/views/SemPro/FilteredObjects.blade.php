@include('SemPro.header')

<div class="container">
    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Room Count</th>
                <th scope="col">Price</th>
                <th scope="col">Size</th>
                <th scope="col">Year built</th>
                <th scope="col">Building number</th>
                <th scope="col">Building storeys</th>
                <th scope="col">Description</th>
                <th scope="col">Ad upload date</th>
                <th scope="col">ad end date</th>
                <th scope="col">fk of user</th>
                <th scope="col">Installation</th>
                <th scope="col">Object Type</th>
                <th scope="col">Heating</th>
            </tr>
            </thead>
            @if(count($filtered) > 0)
            @foreach($filtered->all() as $object)
            <tbody>
            <tr class="table-active">
                <th >{{ $object->id }}</th>
                <td>{{ $object->Room_count }}</td>
                <td>{{ $object->Price }}</td>
                <td>{{ $object->Size }}</td>
                <td>{{ $object->Year_Built }}</td>
                <td>{{ $object->Building_Number }}</td>
                <td>{{ $object->Building_Storeys }}</td>
                <td>{{ $object->Description }}</td>
                <td>{{ $object->Ad_upload_date }}</td>
                <td>{{ $object->Ad_end_date }}</td>
                <td>{{ $object->fk_Userid_User }}</td>
                <td>{{ $object->Installation }}</td>
                <td>{{ $object->Object_Type }}</td>
                <td>{{ $object->Heating }}</td>
            </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>
<div>
    <a class="nav-link" href="/SemPro">back</a>
</div>

@include('SemPro.footer')
