@extends('backend.layouts.main')
@section('content')

<!-- DataTable -->
<div class="container-fluid">
    <div class="row">
            <div class="col-12">
<table id="yourDataTable" class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Parent Category</th>
            <th>Created Date</th>
            <th>Action</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{$item->parentcat->name ?? ''}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="{{route('category.edit',$item->id)}}"><i class="fas fa-edit "></i></a> 
                <a href="{{route('category.delete',$item->id)}}"><i class="fas fa-trash-alt" style="color:red"></i></a>
            </td>
                <!-- Add more columns as needed -->
            </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>

@endsection
