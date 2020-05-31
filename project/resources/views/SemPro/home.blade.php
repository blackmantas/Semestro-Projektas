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
    <label>
        <input name="Room_count" class="form-control mr-sm-2" type="number" placeholder="Room number">
    </label>
    <div class="form-group">
        <label for="exampleSelect1">Instaliacija</label>
        <select name="Installation" class="form-control" id="exampleSelect1">
            <option></option>
            <option>Unfinished building</option>
            <option>Foundation</option>
            <option>Installed</option>
            <option>Not Installed</option>
            <option>Partially decorated</option>
        </select>
    </div><div class="form-group">
        <label for="exampleSelect1">Skelbimo Tipas</label>
        <select name="Object_Type" class="form-control" id="exampleSelect1">
            <option></option>
            <option>House for sale</option>
            <option>House for rent</option>
            <option>Apartment for sale</option>
            <option>Apartment for rent</option>
            <option>Room for rent</option>
        </select>
    </div><div class="form-group">
        <label for="exampleSelect1">Šildymas</label>
        <select name="Heating" class="form-control" id="exampleSelect1">
            <option></option>
            <option>Central</option>
            <option>Central collector</option>
            <option>Electricity</option>
            <option>Gas</option>
            <option>Aerothermal</option>
            <option>Solid fuel</option>
            <option>Liquid fuel</option>
            <option>Geothermal</option>
            <option>Other</option>
        </select>
    </div>

    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rasti  Būstą</button>
</form>

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
    @if(count($all) > 0)
    @foreach($all->all() as $one)
    <tbody>
    <tr class="table-active">
        <th >{{ $one->id }}</th>
        <td>{{ $one->Room_count }}</td>
        <td>{{ $one->Price }}</td>
        <td>{{ $one->Size }}</td>
        <td>{{ $one->Year_Built }}</td>
        <td>{{ $one->Building_Number }}</td>
        <td>{{ $one->Building_Storeys }}</td>
        <td>{{ $one->Description }}</td>
        <td>{{ $one->Ad_upload_date }}</td>
        <td>{{ $one->Ad_end_date }}</td>
        <td>{{ $one->fk_Userid_User }}</td>
        <td>{{ $one->Installation }}</td>
        <td>{{ $one->Object_Type }}</td>
        <td>{{ $one->Heating }}</td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>

@include('SemPro.footer')
