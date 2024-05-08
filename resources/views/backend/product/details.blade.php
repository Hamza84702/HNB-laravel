@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">@if($pdetails->name !=null){{$pdetails->name}}
                    @else
                    ''
                  @endif</h3>
                  <h6 class="card-subtitle">@if($pdetails->title !=null){{$pdetails->title}} @endif</h6>
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                      <div class="white-box text-center">
                        <img
                          src="{{url('uploads/products/'.$pdetails->image1)}}"
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-6">
                      <h4 class="box-title mt-5">Product description</h4>
                      <p>
                      @if($pdetails->description !=null){{$pdetails->description}} @endif
                      </p>
                      <h2 class="mt-5">
                      $
                      @if($pdetails->price !=null){{$pdetails->price}} @endif
                         <small class="text-success"> ({{$pdetails->discount}}% off)</small>
                      </h2>
                      <!-- <button
                        class="btn btn-dark btn-rounded me-1"
                        data-bs-toggle="tooltip"
                        title=""
                        data-original-title="Add to cart"
                      >
                        <i
                          data-feather="shopping-cart"
                          class="fill-white feather-sm"
                        ></i>
                      </button>
                      <button class="btn btn-primary btn-rounded">
                        Buy Now
                      </button> -->
                      <!-- <h3 class="box-title mt-5">Key Highlights</h3>
                      <ul class="list-group list-group-flush ps-0">
                        <li
                          class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                            text-muted
                          "
                        >
                          <i
                            data-feather="check-circle"
                            class="text-primary feather-sm me-2"
                          ></i>
                          Lorem Ipsum available, but the majority have suffered
                          alteration in some form
                        </li>
                        <li
                          class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                            text-muted
                          "
                        >
                          <i
                            data-feather="check-circle"
                            class="text-primary feather-sm me-2"
                          ></i>
                          Lorem Ipsum available, but the majority have suffered
                          alteration in some form
                        </li>
                        <li
                          class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                            text-muted
                          "
                        >
                          <i
                            data-feather="check-circle"
                            class="text-primary feather-sm me-2"
                          ></i>
                          Lorem Ipsum available, but the majority have suffered
                          alteration in some form
                        </li>
                        <li
                          class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                            text-muted
                          "
                        >
                          <i
                            data-feather="check-circle"
                            class="text-primary feather-sm me-2"
                          ></i>
                          Lorem Ipsum available, but the majority have suffered
                          alteration in some form
                        </li>
                        <li
                          class="
                            list-group-item
                            border-bottom-0
                            py-1
                            px-0
                            text-muted
                          "
                        >
                          <i
                            data-feather="check-circle"
                            class="text-primary feather-sm me-2"
                          ></i>
                          Lorem Ipsum available, but the majority have suffered
                          alteration in some form
                        </li>
                      </ul> -->
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <h3 class="box-title mt-5">General Info</h3>
                      <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td width="390">Other images</td>
                              <td>
                              <div class="row">
                                    <div style="width: 225px; height: 225px;">
                                        <img src="{{url('uploads/products/'.$pdetails->image2)}}" alt="{{$pdetails->image2}}" style="width: 100%; height: 100%;">
                                    </div>
                                    <div style="width: 225px; height: 225px;">
                                        <img src="{{url('uploads/products/'.$pdetails->image3)}}" alt="{{$pdetails->image3}}" style="width: 100%; height: 100%;">
                                    </div>
                                </div>
                              

                            </td>
                            </tr>
                            <tr>
                              <td><b>Quantity</b></td>
                              <td>{{$pdetails->qty !=null ? $pdetails->qty: '' }} units</td>
                            </tr>
                            <tr>
                              <td>Category</td>
                              <td>{{$pdetails->category_id !=null ? $pdetails->category->name: '' }}</td>
                            </tr>
                            <tr>
                              <td>Main category</td>
                              <td>{{$pdetails->category->parentcat->name}}</td>
                            </tr>
                            <!-- <tr>
                              <td>Wheels Included</td>
                              <td>Yes</td>
                            </tr>
                            <tr>
                              <td>Upholstery Included</td>
                              <td>Yes</td>
                            </tr> -->
                          </tbody>
                        </table>
                        <div class="row mt-4">
                            <div class="md-col-4">
                        <a href="{{route('product.edit',$pdetails->id)}}" class="btn btn-info">Edit</a>

                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>

@endsection