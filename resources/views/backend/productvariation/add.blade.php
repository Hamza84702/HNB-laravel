@extends('backend.layouts.main')
@section('content')
<div class="container-fluid">
<div class="row">
            <!-- Column -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                
                  <form action="{{route('variation.store')}}"  id="uploadForm" enctype="multipart/form-data"method="POST">
                    @csrf
                    <div class="form-body">
                      <h5 class="card-title">Add Variation</h5>
                      <hr />
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                          <label class="control-label">Variation Name</label>
                            <select
                              class="form-select"
                              data-placeholder="Choose a Category"
                              tabindex="1"
                              name="product_id"
                            >
                             <option value=""disabled selected>Select...</option>

                              @foreach($products as $product)
                              <option value="{{$product->id}}">{{$product->name}}</option>
                              @endforeach
                            </select>  
                            @error('productid')
                            <div class="text-danger">
                            {{'Product name field must be selected'}}
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
                            <label class="control-label">Variation Type</label>
                            <select
                              class="form-select"
                              data-placeholder="Choose a Category"
                              tabindex="1"
                              name="type_id"
                              id="variationType"
                            >
                            <option value=""disabled selected>Select...</option>
                                
                              @foreach($variationtypes as $variationtype)
                              <option value="{{$variationtype->id}}">{{$variationtype->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
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
                                value="0"
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
                        
                    </div>
                    <div class="row" id="modelField" style="display:none;">
                            <!-- Model Name Field -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="modelNameField" />
                                </div>
                            </div>
                        </div>

                        <div class="row" id="colorField" style="display:none;">
                            <!-- Color Code Field -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="control-label">Color Codes</label>
                                    <input type="text" class="form-control" name="color_code" id="colorCodesField" />
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <!--  -->
                        <!--/span-->
                      
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
                                id="price"
                                type="number"
                                class="form-control"
                                placeholder="price"
                                aria-label="price"
                                aria-describedby="basic-addon1"
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
                                id="discount"
                                type="number"
                                class="form-control"
                                placeholder="Discount"
                                aria-label="Discount"
                                aria-describedby="basic-addon2"
                              />
                              @error('discount')
                            <div class="text-danger">
                            {{'discount field is empty'}}
                            </div>
                             @enderror
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
                                placeholder="After Discount"
                                aria-label="price"
                                aria-describedby="basic-addon3"
                                value=""
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
                        <div class="col-md-2">
                          <div class="mb-3">
                            <label class="control-label">Quantity</label>
                            <input
                              type="number"
                              id="lastName"
                              class="form-control"
                              placeholder="0"
                              name="qty"
                            />
                            @error('qty')
                            <div class="text-danger">
                            {{'quantity field is empty'}}
                            </div>
                             @enderror
                          </div>
                        </div>
                        </div>
                        
                        <!--/span-->
                      </div>
                      <h5 class="card-title mt-5">Product Description</h5>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="mb-3">
                            <textarea class="form-control" rows="4" name="pdescription">
Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea
                            >
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
                              <div class="el-card-avatar el-overlay-1">
                                <!-- <img
                                  src="../../assets/images/gallery/chair3.jpg"
                                  alt="user"
                                /> -->
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item">
                                      <!-- <a
                                        class="
                                          btn
                                          default
                                          btn-outline
                                          image-popup-vertical-fit
                                          el-link
                                        "
                                        href="../../assets/images/gallery/chair3.jpg"
                                        ><i class="icon-magnifier"></i
                                      ></a> -->
                                    </li>
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
                                <!-- <img
                                  src="../../assets/images/gallery/chair3.jpg"
                                  alt="user"
                                /> -->
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item">
                                      <!-- <a
                                        class="
                                          btn
                                          default
                                          btn-outline
                                          image-popup-vertical-fit
                                          el-link
                                        "
                                        href="../../assets/images/gallery/chair3.jpg"
                                        ><i class="icon-magnifier"></i
                                      ></a> -->
                                    </li>
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
                                <!-- <img
                                  src="../../assets/images/gallery/chair3.jpg"
                                  alt="user"
                                /> -->
                                <div class="el-overlay">
                                  <ul class="list-style-none el-info">
                                    <li class="el-item">
                                      <!-- <a
                                        class="
                                          btn
                                          default
                                          btn-outline
                                          image-popup-vertical-fit
                                          el-link
                                        "
                                        href="../../assets/images/gallery/chair3.jpg"
                                        ><i class="icon-magnifier"></i
                                      ></a> -->
                                    </li>
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
                        Save
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
<!-- 

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#uploadForm').submit(function (e) {
            var maxFiles = 3; // Maximum number of files allowed
            var selectedFiles = $('.upload')[0].files;

            if (selectedFiles.length > maxFiles) {
                e.preventDefault(); // Prevent form submission
                alert('You can upload a maximum of 3 images.');
            }
        });
    });
</script> -->

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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // ... (existing code)

        // Additional fields for Model and Color
        var modelField = document.getElementById('modelField');
        var colorField = document.getElementById('colorField');
        var modelNameField = document.getElementById('modelNameField');
        var colorCodesField = document.getElementById('colorCodesField');

        // Function to show/hide additional fields based on selected variation type
        function updateAdditionalFields() {
            var variationTypeSelect = document.getElementById('variationType');
            var selectedType = variationTypeSelect.options[variationTypeSelect.selectedIndex].text;

            // Hide both fields by default
            modelField.style.display = 'none';
            colorField.style.display = 'none';

            // Show the corresponding field based on the selected variation type
            if (selectedType === 'Model') {
                modelField.style.display = 'block';
                modelNameField.required = true;
                colorCodesField.required = false;
            } else if (selectedType === 'Color') {
                colorField.style.display = 'block';
                colorCodesField.required = true;
                modelNameField.required = false;
            } else {
                modelNameField.required = false;
                colorCodesField.required = false;
            }
        }

        // Add event listener to the variation type dropdown
        var variationTypeSelect = document.getElementById('variationType');
        variationTypeSelect.addEventListener('change', updateAdditionalFields);

        // Initial update on page load
        updateAdditionalFields();
    });
</script>






@endsection