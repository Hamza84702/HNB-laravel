@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
            <div class="col-12">
              <!-- ----------------------------------------- -->
              <!-- 1. Basic Form -->
              <!-- ----------------------------------------- -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3 pb-3 border-bottom">Edit</h4>
                  <form action="{{route('category.update',$catdata->id)}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input
                            type="text"
                            class="form-control"
                            id="tb-fname"
                            placeholder="Enter Name here" name="name" value="{{$catdata->name}}"
                          />
                          <label for="tb-fname">Category Name</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                      </div>
                      <div class="col-md-6">
                      <div class="form-floating mb-3">
                        
                        <label for="Select"></label>
                        <select id="Select" class="form-control" name="category_id">
                        <option value="" @if($catdata->category_id==null) Selected @endif>Choose</option>
                            @foreach($parentcat as $parent)
                          <option value="{{$parent->id}}" @if($catdata->category_id !=null && $parent->id == $catdata->category_id)
                            selected
                            
                            @endif>
                            {{$parent->name}}
                            
                        </option>
                            @endforeach
                        </select>
                      
                          <!-- <label for="tb-email">Email address</label> -->
                        </div>
                      </div>
                      <!-- <div class="col-md-6">
                        <div class="form-floating">
                          <input
                            type="password"
                            class="form-control"
                            id="tb-cpwd"
                            placeholder="Password"
                          />
                          <label for="tb-cpwd">Confirm Password</label>
                        </div>
                    </div> -->
                    <div class="col-12 mb-6">
                        <div class="d-md-flex align-items-center mt-3">
                          <!-- <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckDefault"
                            >
                              Remember me
                            </label>
                          </div> -->
                          <div class="ms-auto mt-3 mt-md-0">
                            <button
                              type="submit"
                              class="
                                btn btn-info
                                font-weight-medium
                                rounded-pill
                                px-4
                              "
                            >
                              <div class="d-flex align-items-center">
                                <i
                                  data-feather="send"
                                  class="feather-sm fill-white me-2"
                                ></i>
                                Update
                              </div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
</form>
    </div>
</div>
@endsection