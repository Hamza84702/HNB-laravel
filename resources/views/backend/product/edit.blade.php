@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">
<div class="row">
            <!-- Column -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                
                  <form action="{{route('product.update',$product->id)}}"  id="uploadForm" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-body">
                      <h5 class="card-title">Edit Product</h5>
                      <hr />
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="control-label">Product Name</label>
                            <input
                              type="text"
                              id="firstName"
                              class="form-control"
                              placeholder="Rounded Chair"
                              name="pname"
                              value="{{$product->name}}"
                            />
                            @error('pname')
                            <div class="text-danger">
                            {{'name field is empty'}}
                            </div>
                             @enderror
                          </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="control-label">Title</label>
                            <input
                              type="text"
                              id="lastName"
                              class="form-control"
                              placeholder="globe type chair for rest"
                              name="title"
                              value="{{$product->title}}"
                            />
                            @error('title')
                            <div class="text-danger">
                            {{'title field is empty'}}
                            </div>
                             @enderror
                          </div>
                        </div>
                        <!--/span-->
                      </div>
                      <!--/row-->
                      <!--/row-->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="control-label">Category</label>
                            <select
                              class="form-select"
                              data-placeholder="Choose a Category"
                              tabindex="1"
                              name="category_id"
                            >
                            <!-- <option value=""disabled>Choose category</option> -->

                              @foreach($categories as $category)
                              <option value="{{$category->id}}" {{$category->category_id == $product->category_id ?selected : ''}}>{{$category->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label>Status</label>
                            <br />
                            <div class="form-check">
                              <input
                                type="radio"
                                id="customRadioInline1"
                                name="status"
                                class="form-check-input"
                                value="1"
                                {{ $product->status == 1 ? 'checked' : '' }}
                              />
                              <label
                                class="form-check-label"
                                for="customRadioInline1"
                                >Active</label
                              >
                            </div>
                            <div class="form-check">
                              <input
                                type="radio"
                                id="customRadioInline2"
                                name="status"
                                class="form-check-input"
                                value="1"
                                {{ $product->status == 0 ? 'checked' : '' }}
                              />
                              <label
                                class="form-check-label"
                                for="customRadioInline2"
                                >Inactive</label
                              >
                              @error('status')
                            <div class="text-danger">
                            {{'please select status'}}
                            </div>
                             @enderror
                            </div>
                          </div>
                        </div>
                        <!--/span-->
                      </div>
                      <!--/row-->
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label>Price</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="ti-money"></i
                              ></span>
                              <input
                              name="price"
                                type="text"
                                id="price"
                                class="form-control"
                                placeholder="price"
                                aria-label="price"
                                aria-describedby="basic-addon1"
                                value="{{ $product->price !=null ? $product->price : '' }}"
                              />
                           
                            </div>
                            @error('price')
                            <div class="text-danger">
                            {{'price field is empty'}}
                            </div>
                             @enderror
                          </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label>Discount (%)</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon2"
                                ><i class="ti-cut"></i
                              ></span>

                              <input
                              name="discount"
                                type="text"
                                class="form-control"
                                placeholder="Discount"
                                aria-label="Discount"
                                id="discount"
                                aria-describedby="basic-addon2"
                                value="{{ $product->discount !=null ? $product->discount : 0 }}"
                              />
                              @error('discount')
                            <div class="text-danger">
                            {{'discount field is empty'}}
                            </div>
                             @enderror
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label>Discounted Price</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon3"
                                ><i class="ti-money"></i
                              ></span>
                              <input
                              name="discounted_price"
                                type="text"
                                id="discount_price"
                                class="form-control"
                                placeholder="price"
                                aria-label="price"
                                aria-describedby="basic-addon3"
                                value="{{ $product->discounted_price !=null ? $product->discounted_price : 0 }}"
                                disabled
                              />
                           
                            </div>
                            @error('discounted_price')
                            <div class="text-danger">
                            {{'price field is empty'}}
                            </div>
                             @enderror
                          </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-2">
                          <div class="mb-3">
                            <label class="control-label">Quantity</label>
                            <input
                              type="number"
                              id="lastName"
                              class="form-control"
                              placeholder="0"
                              name="qty"
                              value="{{ $product->qty !=null ? $product->qty : '' }}"
                            />
                            @error('qty')
                            <div class="text-danger">
                            {{'quantity field is empty'}}
                            </div>
                             @enderror
                          </div>
                        </div>
                        <!--/span-->
                      </div>
                      <h5 class="card-title mt-5">Product Description</h5>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="mb-3">
                            <textarea class="form-control" rows="4" name="pdescription">
                                {{ $product->description !=null ? $product->description : '' }}
                            </textarea>
                            @error('pdescription')
                            <div class="text-danger">
                            {{'description field is empty'}}
                            </div>
                             @enderror
                          </div>
                        </div>
                      </div>
                      <!--/row-->
                      <div class="row">
                      
                        <!--/span-->
                        <div class="col-md-3">
                          <h5 class="card-title mt-3">Upload Image</h5>
                          <div class="el-element-overlay">
                            <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1" >
                                 <img
                                  src="{{url('uploads/products/'.$product->image1)}}"
                                  alt="user"
                                  style="width: 225px; height: 225px;"
                                /> 
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item">
                                      <a
                                        class="btn default btn-outline el-link"
                                        href="javascript:void(0);"
                                        ><i class="icon-link"></i
                                      ></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="btn btn-info waves-effect waves-light">
                            <span>Upload Images</span>
                            <input type="file" class="upload" name="image1" multiple />
                        </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                          <h5 class="card-title mt-3">Upload Image (optional)</h5>
                          <div class="el-element-overlay">
                            <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1">
                                 <img
                                  src="{{url('uploads/products/'.$product->image2)}}"
                                  alt="user"
                                  style="width: 225px; height: 225px;"
                                /> 
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item">
                                      <a
                                        class="btn default btn-outline el-link"
                                        href="javascript:void(0);"
                                        ><i class="icon-link"></i
                                      ></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="btn btn-info waves-effect waves-light">
                            <span>Upload Images</span>
                            <input type="file" class="upload" name="image2" multiple />
                        </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                          <h5 class="card-title mt-3">Upload Image (optional)</h5>
                          <div class="el-element-overlay">
                            <div class="el-card-item">
                              <div class="el-card-avatar el-overlay-1">
                                <img
                                  src="{{url('uploads/products/'.$product->image3)}}"
                                  alt="user"
                                  style="width: 225px; height: 225px;"
                                />
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item">
                                      <a
                                        class="btn default btn-outline el-link"
                                        href="javascript:void(0);"
                                        ><i class="icon-link"></i
                                      ></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="btn btn-info waves-effect waves-light">
                            <span>Upload Images</span>
                            <input type="file" class="upload" name="image3" multiple />
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-actions mt-4">
                      <button
                        type="submit"
                        class="btn btn-success rounded-pill px-4"
                      >
                        Update
                      </button>
                      <button
                        type="button"
                        class="btn btn-dark rounded-pill px-4"
                      >
                        Cancel
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
        </div>
<!-- Add these scripts at the end of your HTML body or within a script tag in the head -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to update discounted price
        function updateDiscountedPrice() {
            var priceInput = document.getElementById('price');
            var discountInput = document.getElementById('discount');
            var discountedPriceInput = document.getElementById('discount_price');

            var price = parseFloat(priceInput.value) || 0;
            var discount = parseFloat(discountInput.value) || 0;

            // Validate discount (ensure it's not greater than 100%)
            if (discount < 0 || discount > 100) {
                // Display an error message or handle it appropriately
                discountInput.setCustomValidity('Discount must be between 0% and 100%');
                discountedPriceInput.value = ''; // Clear the discounted price field
            } else {
                discountInput.setCustomValidity('');
                var discountedPrice = discount > 0 ? price - (price * (discount / 100)).toFixed(2) : '';
                discountedPriceInput.value = discountedPrice;
            }
        }

        // Add event listeners to price and discount fields
        var priceInput = document.getElementById('price');
        var discountInput = document.getElementById('discount');

        priceInput.addEventListener('input', updateDiscountedPrice);
        discountInput.addEventListener('input', updateDiscountedPrice);

        // Initial calculation on page load
        updateDiscountedPrice();
    });
</script>



@endsection