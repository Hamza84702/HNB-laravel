<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- User profile -->
          <div
            class="user-profile position-relative"
            style="
              background: url(backend/assets/images/background/user-info.jpg)
                no-repeat;
            "
          >
            <!-- User profile image -->
            <div class="profile-img">
              <img
                src="{{asset('backend/assets/images/users/profile.png')}}"
                alt="user"
                class="w-100"
              />
            </div>
            <!-- User profile text-->
            <div class="profile-text pt-1 dropdown">
              <a
                href="#"
                class="
                  dropdown-toggle
                  u-dropdown
                  w-100
                  text-white
                  d-block
                  position-relative
                "
                id="dropdownMenuLink"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >Markarn Doe</a
              >
              <div
                class="dropdown-menu animated flipInY"
                aria-labelledby="dropdownMenuLink"
              >
                <a class="dropdown-item" href="#"
                  ><i
                    data-feather="user"
                    class="feather-sm text-info me-1 ms-1"
                  ></i>
                  My Profile</a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    data-feather="credit-card"
                    class="feather-sm text-info me-1 ms-1"
                  ></i>
                  My Balance</a
                >
                <a class="dropdown-item" href="#"
                  ><i
                    data-feather="mail"
                    class="feather-sm text-success me-1 ms-1"
                  ></i>
                  Inbox</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"
                  ><i
                    data-feather="settings"
                    class="feather-sm text-warning me-1 ms-1"
                  ></i>
                  Account Setting</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="authentication-login3.html"
                  ><i
                    data-feather="log-out"
                    class="feather-sm text-danger me-1 ms-1"
                  ></i>
                  Logout</a
                >
                <div class="dropdown-divider"></div>
                <div class="ps-4 p-2">
                  <a href="#" class="btn d-block w-100 btn-info rounded-pill"
                    >View Profile</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End User profile text-->
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Personal</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark"
                  href="{{route('redirect')}}"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-gauge"></i>
                  <span class="hide-menu">Dashboard </span>
                </a>
                
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="fa-solid fa-layer-group"></i><span class="hide-menu">Category Manager</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      href="{{route('addform')}}"
                      class="sidebar-link"
                      ><i class="fa-solid fa-circle-plus" style="color:blue;"></i><span class="hide-menu">
                        Add
                      </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="{{route('category.list')}}"
                      class="sidebar-link"
                      ><i class="mdi mdi-format-align-right"></i
                      ><span class="hide-menu">
                        List
                      </span></a
                    >
                  </li>
         
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-widgets"></i
                  ><span class="hide-menu">Product Manager</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="{{route('productform')}}" class="sidebar-link"
                      ><i class="mdi mdi-box-shadow"></i
                      ><span class="hide-menu"> Add</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('product.list')}}" class="sidebar-link"
                      ><i class="mdi mdi-application"></i
                      ><span class="hide-menu"> List</span></a
                    >
                  </li>
                 
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-credit-card-multiple"></i
                  ><span class="hide-menu">Variation Manager</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="{{route('type.add')}}" class="sidebar-link"
                      ><i class="mdi mdi-layers"></i
                      ><span class="hide-menu">Types</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="{{route('variation.add')}}" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-scan"></i
                      ><span class="hide-menu">Variations</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-calendar.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-calendar"></i
                  ><span class="hide-menu">Calendar</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-chats.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-comment-processing-outline"></i
                  ><span class="hide-menu">Chat Apps</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-contacts.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-box"></i
                  ><span class="hide-menu">Contact</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-invoice.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-book"></i
                  ><span class="hide-menu">Invoice</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-notes.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-arrange-bring-forward"></i
                  ><span class="hide-menu">Notes</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-todo.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-clipboard-text"></i
                  ><span class="hide-menu">Todo</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="app-taskboard.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-bulletin-board"></i
                  ><span class="hide-menu">Taskboard</span></a
                >
              </li>

              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-inbox-arrow-down"></i
                  ><span class="hide-menu">Inbox </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="inbox-email.html" class="sidebar-link"
                      ><i class="mdi mdi-email"></i
                      ><span class="hide-menu"> Email </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-email-alert"></i
                      ><span class="hide-menu"> Email Detail </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="inbox-email-compose.html" class="sidebar-link"
                      ><i class="mdi mdi-email-secure"></i
                      ><span class="hide-menu"> Email Compose </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-bookmark-plus-outline"></i
                  ><span class="hide-menu">Ticket </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ticket-list.html" class="sidebar-link"
                      ><i class="mdi mdi-book-multiple"></i
                      ><span class="hide-menu"> Ticket List </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ticket-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-book-plus"></i
                      ><span class="hide-menu"> Ticket Detail </span></a
                    >
                  </li>
                </ul>
              </li>
            
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-credit-card-multiple"></i
                  ><span class="hide-menu">Components</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="component-sweetalert.html" class="sidebar-link"
                      ><i class="mdi mdi-layers"></i
                      ><span class="hide-menu"> Sweet Alert</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-nestable.html" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-scan"></i
                      ><span class="hide-menu">Nestable</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-noui-slider.html" class="sidebar-link"
                      ><i class="mdi mdi-weather-fog"></i
                      ><span class="hide-menu">Noui slider</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-rating.html" class="sidebar-link"
                      ><i class="mdi mdi-bandcamp"></i
                      ><span class="hide-menu">Rating</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="component-toastr.html" class="sidebar-link"
                      ><i class="mdi mdi-poll"></i
                      ><span class="hide-menu">Toastr</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-gradient"></i
                  ><span class="hide-menu">Widgets </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="widgets-feeds.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i
                      ><span class="hide-menu"> Feed Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-apps.html" class="sidebar-link"
                      ><i class="mdi mdi-comment-processing-outline"></i
                      ><span class="hide-menu"> Apps Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-data.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar"></i
                      ><span class="hide-menu"> Data Widgets </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="widgets-charts.html" class="sidebar-link"
                      ><i class="mdi mdi-bulletin-board"></i
                      ><span class="hide-menu"> Charts Widgets</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-collage"></i
                  ><span class="hide-menu">Form Elements</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-inputs.html" class="sidebar-link"
                      ><i class="mdi mdi-priority-low"></i
                      ><span class="hide-menu"> Forms Input</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-groups.html" class="sidebar-link"
                      ><i class="mdi mdi-rounded-corner"></i
                      ><span class="hide-menu"> Input Groups</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-input-grid.html" class="sidebar-link"
                      ><i class="mdi mdi-select-all"></i
                      ><span class="hide-menu"> Input Grid</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-custom-checkbox-radio.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-shape-plus"></i
                      ><span class="hide-menu">
                        Custom Checkboxes &amp; Radios</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-checkbox-radio.html" class="sidebar-link"
                      ><i class="mdi mdi-shape-plus"></i
                      ><span class="hide-menu">
                        Checkboxes &amp; Radios</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-touchspin.html" class="sidebar-link"
                      ><i class="mdi mdi-switch"></i
                      ><span class="hide-menu"> Bootstrap Touchspin</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bootstrap-switch.html" class="sidebar-link"
                      ><i class="mdi mdi-toggle-switch-off"></i
                      ><span class="hide-menu"> Bootstrap Switch</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-select2.html" class="sidebar-link"
                      ><i class="mdi mdi-relative-scale"></i
                      ><span class="hide-menu"> Select2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dual-listbox.html" class="sidebar-link"
                      ><i class="mdi mdi-tab-unselected"></i
                      ><span class="hide-menu"> Dual Listbox</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Form Layouts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-difference-ba"></i
                      ><span class="hide-menu"> Basic Forms</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-horizontal.html" class="sidebar-link"
                      ><i class="mdi mdi-file-document-box"></i
                      ><span class="hide-menu"> Form Horizontal</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-actions.html" class="sidebar-link"
                      ><i class="mdi mdi-code-greater-than"></i
                      ><span class="hide-menu"> Form Actions</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-row-separator.html" class="sidebar-link"
                      ><i class="mdi mdi-code-equal"></i
                      ><span class="hide-menu"> Row Separator</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-bordered.html" class="sidebar-link"
                      ><i class="mdi mdi-flip-to-front"></i
                      ><span class="hide-menu"> Form Bordered</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-striped-row.html" class="sidebar-link"
                      ><i class="mdi mdi-content-duplicate"></i
                      ><span class="hide-menu"> Striped Rows</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-outline"></i
                      ><span class="hide-menu"> Form Detail</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-material.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-outline"></i
                      ><span class="hide-menu"> Form Material</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-floating-input.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-outline"></i
                      ><span class="hide-menu"> Form Floating Input</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-code-equal"></i
                  ><span class="hide-menu">Form Addons</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-paginator.html" class="sidebar-link"
                      ><i class="mdi mdi-export"></i
                      ><span class="hide-menu"> Paginator</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-img-cropper.html" class="sidebar-link"
                      ><i class="mdi mdi-crop"></i
                      ><span class="hide-menu"> Image Cropper</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-dropzone.html" class="sidebar-link"
                      ><i class="mdi mdi-crosshairs-gps"></i
                      ><span class="hide-menu"> Dropzone</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-mask.html" class="sidebar-link"
                      ><i class="mdi mdi-box-shadow"></i
                      ><span class="hide-menu"> Form Mask</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-typeahead.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-variant"></i
                      ><span class="hide-menu"> Form Typehead</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-custom-switch.html" class="sidebar-link"
                      ><i class="mdi mdi-toggle-switch-off"></i
                      ><span class="hide-menu"> Custom Switch</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-alert-box"></i
                  ><span class="hide-menu">Form Validation</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a
                      href="form-bootstrap-validation.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-credit-card-scan"></i
                      ><span class="hide-menu"> Bootstrap Validation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-custom-validation.html" class="sidebar-link"
                      ><i class="mdi mdi-credit-card-plus"></i
                      ><span class="hide-menu"> Custom Validation</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-pencil-box-outline"></i
                  ><span class="hide-menu">Form Pickers</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-picker-colorpicker.html" class="sidebar-link"
                      ><i class="mdi mdi-calendar-plus"></i
                      ><span class="hide-menu"> Form Colorpicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-datetimepicker.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-calendar-clock"></i
                      ><span class="hide-menu"> Form Datetimepicker</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-bootstrap-rangepicker.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-calendar-range"></i
                      ><span class="hide-menu">
                        Form Bootstrap Rangepicker</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-bootstrap-datepicker.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-calendar-check"></i
                      ><span class="hide-menu">
                        Form Bootstrap Datepicker</span
                      ></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="form-picker-material-datepicker.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-calendar-text"></i
                      ><span class="hide-menu">
                        Form Material Datepicker</span
                      ></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-dns"></i
                  ><span class="hide-menu">Form Editor</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-editor-ckeditor.html" class="sidebar-link"
                      ><i class="mdi mdi-drawing"></i
                      ><span class="hide-menu">Ck Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-quill.html" class="sidebar-link"
                      ><i class="mdi mdi-drupal"></i
                      ><span class="hide-menu">Quill Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-summernote.html" class="sidebar-link"
                      ><i class="mdi mdi-brightness-6"></i
                      ><span class="hide-menu">Summernote Editor</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-editor-tinymce.html" class="sidebar-link"
                      ><i class="mdi mdi-bowling"></i
                      ><span class="hide-menu">Tinymce Edtor</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-wizard.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-cube-send"></i
                  ><span class="hide-menu">Form Wizard</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="form-repeater.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-creation"></i
                  ><span class="hide-menu">Form Repeater</span></a
                >
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-none"></i
                  ><span class="hide-menu">Bootstrap Tables</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-border-all"></i
                      ><span class="hide-menu">Basic Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-dark-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-border-left"></i
                      ><span class="hide-menu">Dark Basic Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-sizing.html" class="sidebar-link"
                      ><i class="mdi mdi-border-outside"></i
                      ><span class="hide-menu">Sizing Table </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-layout-coloured.html" class="sidebar-link"
                      ><i class="mdi mdi-border-bottom"></i
                      ><span class="hide-menu">Coloured Table Layout</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-inside"></i
                  ><span class="hide-menu">Datatables</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="table-datatable-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-border-vertical"></i
                      ><span class="hide-menu"> Basic Initialisation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-api.html" class="sidebar-link"
                      ><i class="mdi mdi-blur-linear"></i
                      ><span class="hide-menu"> API</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="table-datatable-advanced.html" class="sidebar-link"
                      ><i class="mdi mdi-border-style"></i
                      ><span class="hide-menu">
                        Advanced Initialisation</span
                      ></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-jsgrid.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-top"></i
                  ><span class="hide-menu">Table Jsgrid</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-responsive.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-style"></i
                  ><span class="hide-menu">Table Responsive</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-footable.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-tab-unselected"></i
                  ><span class="hide-menu">Table Footable</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-editable.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-table-edit"></i
                  ><span class="hide-menu">Table Editable</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="table-bootstrap.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-outside"></i
                  ><span class="hide-menu">Table Bootstrap</span></a
                >
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-morris.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-image-filter-tilt-shift"></i
                  ><span class="hide-menu"> Morris Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-flot.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-line"></i
                  ><span class="hide-menu"> Flot Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chart-js.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-svg"></i
                  ><span class="hide-menu">Chartjs</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-sparkline.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-histogram"></i
                  ><span class="hide-menu">Sparkline Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chart-chartist.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-blur"></i
                  ><span class="hide-menu">Chartis Chart</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-blur-radial"></i
                  ><span class="hide-menu">Apex Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-apex-line.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-line"></i>
                      <span class="hide-menu">Line Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-area.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-areaspline"></i>
                      <span class="hide-menu">Area Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-bar.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-gantt"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-pie.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Pie Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radial.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-arc"></i>
                      <span class="hide-menu">Radial Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-apex-radar.html" class="sidebar-link"
                      ><i class="mdi mdi-hexagon-outline"></i>
                      <span class="hide-menu">Radar Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-chemical-weapon"></i
                  ><span class="hide-menu">C3 Charts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-c3-axis.html" class="sidebar-link"
                      ><i class="mdi mdi-arrange-bring-to-front"></i>
                      <span class="hide-menu">Axis Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-bar.html" class="sidebar-link"
                      ><i class="mdi mdi-arrange-send-to-back"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-data.html" class="sidebar-link"
                      ><i class="mdi mdi-backup-restore"></i>
                      <span class="hide-menu">Data Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-c3-line.html" class="sidebar-link"
                      ><i class="mdi mdi-backburger"></i>
                      <span class="hide-menu">Line Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-areaspline"></i
                  ><span class="hide-menu">Echarts</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="chart-echart-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-line"></i>
                      <span class="hide-menu">Basic Charts</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="chart-echart-bar.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-scatterplot-hexbin"></i>
                      <span class="hide-menu">Bar Chart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="chart-echart-pie-doughnut.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Pie &amp; Doughnut Chart</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Sample Pages</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-cart-outline"></i
                  ><span class="hide-menu">Ecommerce Pages</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="eco-products.html" class="sidebar-link"
                      ><i class="mdi mdi-cards-variant"></i>
                      <span class="hide-menu">Products</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-cart.html" class="sidebar-link"
                      ><i class="mdi mdi-cart"></i>
                      <span class="hide-menu">Products Cart</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-edit.html" class="sidebar-link"
                      ><i class="mdi mdi-cart-plus"></i>
                      <span class="hide-menu">Products Edit</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-detail.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-burst"></i>
                      <span class="hide-menu">Product Details</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-orders.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-pie"></i>
                      <span class="hide-menu">Product Orders</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="eco-products-checkout.html" class="sidebar-link"
                      ><i class="mdi mdi-clipboard-check"></i>
                      <span class="hide-menu">Products Checkout</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-file"></i
                  ><span class="hide-menu">Sample Pages </span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="starter-kit.html" class="sidebar-link"
                      ><i class="mdi mdi-crop-free"></i>
                      <span class="hide-menu">Starter Kit</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-animation.html" class="sidebar-link"
                      ><i class="mdi mdi-debug-step-over"></i>
                      <span class="hide-menu">Animation</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-search-result.html" class="sidebar-link"
                      ><i class="mdi mdi-search-web"></i>
                      <span class="hide-menu">Search Result</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-gallery.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-iris"></i>
                      <span class="hide-menu">Gallery</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-treeview.html" class="sidebar-link"
                      ><i class="mdi mdi-file-tree"></i>
                      <span class="hide-menu">Treeview</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-block-ui.html" class="sidebar-link"
                      ><i class="mdi mdi-codepen"></i>
                      <span class="hide-menu">Block UI</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-session-timeout.html" class="sidebar-link"
                      ><i class="mdi mdi-timer-off"></i>
                      <span class="hide-menu">Session Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="pages-session-idle-timeout.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-timer-sand-empty"></i>
                      <span class="hide-menu">Session Idle Timeout</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-utility-classes.html" class="sidebar-link"
                      ><i class="mdi mdi-tune"></i>
                      <span class="hide-menu">Helper Classes</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-maintenance.html" class="sidebar-link"
                      ><i class="mdi mdi-camera-iris"></i>
                      <span class="hide-menu">Maintenance Page</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-circle"></i
                  ><span class="hide-menu">Authentication</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="authentication-login1.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login2.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login 2 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-login3.html" class="sidebar-link"
                      ><i class="mdi mdi-account-key"></i
                      ><span class="hide-menu"> Login 3 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register1.html" class="sidebar-link"
                      ><i class="mdi mdi-account-plus"></i
                      ><span class="hide-menu"> Register</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="authentication-register2.html" class="sidebar-link"
                      ><i class="mdi mdi-account-plus"></i
                      ><span class="hide-menu"> Register 2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-lockscreen.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-account-off"></i
                      ><span class="hide-menu"> Lockscreen</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="authentication-recover-password.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-account-convert"></i
                      ><span class="hide-menu"> Recover password</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-multiple"></i
                  ><span class="hide-menu">Users</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="ui-user-card.html" class="sidebar-link"
                      ><i class="mdi mdi-account-box"></i>
                      <span class="hide-menu"> User Card </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-profile.html" class="sidebar-link"
                      ><i class="mdi mdi-account-network"></i
                      ><span class="hide-menu"> User Profile</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="ui-user-contacts.html" class="sidebar-link"
                      ><i class="mdi mdi-account-star-variant"></i
                      ><span class="hide-menu"> User Contact</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-ungroup"></i
                  ><span class="hide-menu">Invoice</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="pages-invoice.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-triangle"></i
                      ><span class="hide-menu"> Invoice Layout </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="pages-invoice-list.html" class="sidebar-link"
                      ><i class="mdi mdi-vector-rectangle"></i
                      ><span class="hide-menu"> Invoice List</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-map"></i
                  ><span class="hide-menu">Maps</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="map-google.html" class="sidebar-link"
                      ><i class="mdi mdi-google-maps"></i
                      ><span class="hide-menu"> Google Map </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="map-vector.html" class="sidebar-link"
                      ><i class="mdi mdi-map-marker-radius"></i
                      ><span class="hide-menu"> Vector Map</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-face"></i
                  ><span class="hide-menu">Icons</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="icon-feather.html" class="sidebar-link"
                      ><i class="mdi mdi-feather"></i>
                      <span class="hide-menu"> Feather Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-material.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon"></i>
                      <span class="hide-menu"> Material Icons </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-fontawesome.html" class="sidebar-link"
                      ><i class="mdi mdi-emoticon-cool"></i
                      ><span class="hide-menu"> Fontawesome Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-themify.html" class="sidebar-link"
                      ><i class="mdi mdi-chart-bubble"></i
                      ><span class="hide-menu"> Themify Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-weather.html" class="sidebar-link"
                      ><i class="mdi mdi-weather-cloudy"></i
                      ><span class="hide-menu"> Weather Icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-simple-lineicon.html" class="sidebar-link"
                      ><i class="mdi mdi mdi-image-broken-variant"></i>
                      <span class="hide-menu"> Simple Line icons</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="icon-flag.html" class="sidebar-link"
                      ><i class="mdi mdi-flag-triangle"></i
                      ><span class="hide-menu"> Flag Icons</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-apple-safari"></i
                  ><span class="hide-menu">Timeline</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="timeline-center.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-fast"></i>
                      <span class="hide-menu"> Center Timeline </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-horizontal.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-end"></i
                      ><span class="hide-menu"> Horizontal Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-left.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-in"></i
                      ><span class="hide-menu"> Left Timeline</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="timeline-right.html" class="sidebar-link"
                      ><i class="mdi mdi-clock-start"></i
                      ><span class="hide-menu"> Right Timeline</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-email-open-outline"></i
                  ><span class="hide-menu">Email Template</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="email-templete-alert.html" class="sidebar-link"
                      ><i class="mdi mdi-message-alert"></i>
                      <span class="hide-menu"> Alert </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-basic.html" class="sidebar-link"
                      ><i class="mdi mdi-message-bulleted"></i
                      ><span class="hide-menu"> Basic</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="email-templete-billing.html" class="sidebar-link"
                      ><i class="mdi mdi-message-draw"></i
                      ><span class="hide-menu"> Billing</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      href="email-templete-password-reset.html"
                      class="sidebar-link"
                      ><i class="mdi mdi-message-bulleted-off"></i
                      ><span class="hide-menu"> Password-Reset</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-alert-box"></i
                  ><span class="hide-menu">Error Pages</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="error-400.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i>
                      <span class="hide-menu"> Error 400 </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-403.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 403</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-404.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 404</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-500.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 500</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="error-503.html" class="sidebar-link"
                      ><i class="mdi mdi-alert-outline"></i
                      ><span class="hide-menu"> Error 503</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-notification-clear-all"></i
                  ><span class="hide-menu">Multi level dd</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"
                      ><i class="mdi mdi-octagram"></i
                      ><span class="hide-menu"> item 1.1</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"
                      ><i class="mdi mdi-octagram"></i
                      ><span class="hide-menu"> item 1.2</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a
                      class="has-arrow sidebar-link"
                      href="javascript:void(0)"
                      aria-expanded="false"
                      ><i class="mdi mdi-playlist-plus"></i>
                      <span class="hide-menu">Menu 1.3</span></a
                    >
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.1</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.2</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.3</span></a
                        >
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link"
                          ><i class="mdi mdi-octagram"></i
                          ><span class="hide-menu"> item 1.3.4</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link"
                      ><i class="mdi mdi-playlist-check"></i
                      ><span class="hide-menu"> item 1.4</span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Extra</span>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="Documentation/document.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-content-paste"></i
                  ><span class="hide-menu">Documentation</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="authentication-login1.html"
                  aria-expanded="false"
                  ><i class="mdi mdi-directions"></i
                  ><span class="hide-menu">Log Out</span></a
                >
              </li>/
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
          <!-- item-->
          <a
            href=""
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Settings"
            ><i class="ti-settings"></i
          ></a>
          <!-- item-->
          <a
            href=""
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Email"
            ><i class="mdi mdi-gmail"></i
          ></a>
          <!-- item-->
          <a
            href=""
            class="link"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Logout"
            ><i class="mdi mdi-power"></i
          ></a>
        </div>
        <!-- End Bottom points-->
      </aside>