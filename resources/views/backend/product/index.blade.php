<style>
        /* Add your table styles here */

        /* Image container style */
        .image-container {
            position: relative;
            max-width: 100px;
            max-height: 100px;
            overflow: hidden;
        }

        /* Magnifier icon style */
        .magnifier-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: #fff;
            opacity: 0;
            cursor: pointer;
        }

        /* Magnified image overlay style */
        .magnified-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        /* Magnified image style */
        .magnified-image {
            max-width: 90%;
            max-height: 90%;
        }
    </style>
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
            <th>Price</th>
            <th>Status</th>
            <th>Discount</th>
            <th>Quantity</th>
            <th>Category</th>
            <th>Image</th>
            <th>Action</th>
            

            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach($products as $key=>$product)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                @if($product->status == '1')
                <td class="" style="color:green;">Active</td>
                @else
                <td class="text-danger">Inactive</td>
                @endif
                <td>{{($product->discount) !=null ? $product->discount :'0'}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->category->name}}</td>
                <td>
                <div style="max-width: 100px; max-height: 100px; overflow: hidden;">
                    <img src="{{ url('uploads/products/' . $product->image1) }}" alt="" style="width: 100%; height: auto;">
                </div>
            </td>

                <td>
                    <a href="{{route('product.edit',$product->id)}}"><i class="fas fa-edit "></i></a> 
                    <a href="{{route('product.delete',$product->id)}}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                    <a href="{{route('product.details',$product->id)}}"><i class="fa-solid fa-eye" style="color:#103cbffa"></i></a>
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
