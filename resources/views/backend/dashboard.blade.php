@extends('backend.layouts.main')
@section('content')

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Dashboard 4</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard 4</li>
            </ol>
          </div>
          <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
              <div class="d-flex me-3 ms-2">
                <div class="chart-text me-2">
                  <h6 class="mb-0"><small>THIS MONTH</small></h6>
                  <h4 class="mt-0 text-info">$58,356</h4>
                </div>
                <div class="spark-chart">
                  <div id="monthchart"></div>
                </div>
              </div>
              <div class="d-flex me-3 ms-2">
                <div class="chart-text me-2">
                  <h6 class="mb-0"><small>LAST MONTH</small></h6>
                  <h4 class="mt-0 text-primary">$48,356</h4>
                </div>
                <div class="spark-chart">
                  <div id="lastmonthchart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="card-group">
            <!-- Column -->
            <div class="card">
              <div class="card-body text-center">
                <h4 class="text-center">Unique Visit</h4>
                <div class="d-flex justify-content-center mt-3">
                  <div id="unique-visit" style="width: 120px"></div>
                </div>
              </div>
              <div class="p-2 rounded border-top text-center">
                <h4 class="font-medium mb-0">
                  <i class="ti-angle-up text-success"></i> 12456
                </h4>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
              <div class="card-body text-center">
                <h4 class="text-center">Total Visit</h4>
                <div class="d-flex justify-content-center mt-3">
                  <div id="total-visit" style="width: 120px"></div>
                </div>
              </div>
              <div class="p-2 rounded border-top text-center">
                <h4 class="font-medium mb-0">
                  <i class="ti-angle-down text-danger"></i> 456
                </h4>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
              <div class="card-body text-center">
                <h4 class="text-center">Bounce rate</h4>
                <div class="d-flex justify-content-center mt-3">
                  <div id="bounce-rate" style="width: 120px"></div>
                </div>
              </div>
              <div class="p-2 rounded border-top text-center">
                <h4 class="font-medium mb-0">
                  <i class="ti-angle-up text-success"></i> 12456
                </h4>
              </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
              <div class="card-body text-center">
                <h4 class="text-center">Page Views</h4>
                <div class="d-flex justify-content-center mt-3">
                  <div id="page-views" style="width: 120px"></div>
                </div>
              </div>
              <div class="p-2 rounded border-top text-center">
                <h4 class="font-medium mb-0">
                  <i class="ti-angle-down text-danger"></i> 456
                </h4>
              </div>
            </div>
            <!-- Column -->
          </div>
          <!-- Row -->
          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total Visits</h4>
                  <div
                    id="visitfromworld"
                    style="width: 100% !important; height: 400px"
                  ></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Browser Stats</h4>
                  <table class="table mt-3 table-borderless v-middle">
                    <tbody>
                      <tr>
                        <td class="ps-0" style="width: 40px">
                          <img
                            src="{{asset('backend/assets/images/browser/chrome-logo.png')}}"
                            alt="logo"
                          />
                        </td>
                        <td class="ps-0">Google Chrome</td>
                        <td class="ps-0 text-end">
                          <span
                            class="
                              badge
                              bg-light-info
                              text-info
                              font-weight-medium
                            "
                            >23%</span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img
                            src="{{asset('backend/assets/images/browser/firefox-logo.png')}}"
                            alt="logo"
                          />
                        </td>
                        <td class="ps-0">Mozila Firefox</td>
                        <td class="ps-0 text-end">
                          <span
                            class="
                              badge
                              bg-light-danger
                              text-danger
                              font-weight-medium
                            "
                            >15%</span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img
                            src="{{asset('backend/assets/images/browser/safari-logo.png')}}"
                            alt="logo"
                          />
                        </td>
                        <td class="ps-0">Apple Safari</td>
                        <td class="ps-0 text-end">
                          <span
                            class="
                              badge
                              bg-light-warning
                              text-warning
                              font-weight-medium
                            "
                            >07%</span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img
                            src="{{asset('backend/assets/images/browser/internet-logo.png')}}"
                            alt="logo"
                          />
                        </td>
                        <td class="ps-0">Internet Explorer</td>
                        <td class="ps-0 text-end">
                          <span
                            class="
                              badge
                              bg-light-success
                              text-success
                              font-weight-medium
                            "
                            >23%</span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img
                            src="{{asset('backend/assets/images/browser/opera-logo.png')}}"
                            alt="logo"
                          />
                        </td>
                        <td class="ps-0">Opera mini</td>
                        <td class="ps-0 text-end">
                          <span
                            class="
                              badge
                              bg-light-primary
                              text-primary
                              font-weight-medium
                            "
                            >23%</span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img
                            src="{{asset('backend/assets/images/browser/edge-logo.png')}}"
                            alt="logo"
                          />
                        </td>
                        <td class="ps-0">Microsoft edge</td>
                        <td class="ps-0 text-end">
                          <span
                            class="
                              badge
                              bg-light-info
                              text-info
                              font-weight-medium
                            "
                            >23%</span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td class="ps-0">
                          <img
                            src="{{asset('backend/assets/images/browser/netscape-logo.png')}}"
                            alt="logo"
                          />
                        </td>
                        <td class="ps-0" class="text-truncate">
                          Netscape Navigator
                        </td>
                        <td class="ps-0 text-end">
                          <span
                            class="
                              badge
                              bg-light-danger
                              text-danger
                              font-weight-medium
                            "
                            >44%</span
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Row -->
          <div class="row">
            <!-- Column -->
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex no-block align-items-center">
                    <h4 class="card-title">Total Revenue</h4>
                    <div class="ms-auto">
                      <ul class="list-inline">
                        <li class="list-inline-item px-2">
                          <h6 class="text-muted">
                            <i class="fa fa-circle me-1 text-danger"></i>2015
                          </h6>
                        </li>
                        <li class="list-inline-item px-2">
                          <h6 class="text-muted">
                            <i class="fa fa-circle me-1 text-success"></i>2016
                          </h6>
                        </li>
                        <li class="list-inline-item px-2">
                          <h6 class="text-muted">
                            <i class="fa fa-circle me-1 text-info"></i>2023
                          </h6>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="total-revenue"></div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-lg-4">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Sales Prediction</h4>
                      <div class="row mt-4">
                        <div class="col-7">
                          <span class="display-6 text-primary">$3528</span>
                          <h6 class="text-muted">10% Increased</h6>
                          <h5 class="text-nowrap">(150-165 Sales)</h5>
                        </div>
                        <div class="col-5">
                          <div class="float-end mt-n5">
                            <div id="sales-prediction"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Sales Difference</h4>
                      <div class="row mt-4">
                        <div class="col-7">
                          <span class="display-6 text-success">$4316</span>
                          <h6 class="text-muted">10% Increased</h6>
                          <h5 class="text-nowrap">(150-165 Sales)</h5>
                        </div>
                        <div class="col-5">
                          <div class="float-end">
                            <div id="sales-difference"></div>
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
          <!-- Row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div>
                    <div class="row gx-0">
                        <div class="col-lg-12">
                            <div class="p-4 calender-sidebar app-calendar">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <!-- BEGIN MODAL -->
              <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventModalLabel">
                                Add / Edit Event
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="">
                                        <label class="form-label">Event Title</label>
                                        <input id="event-title" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <div><label class="form-label">Event Color</label></div>
                                    <div class="d-flex">
                                        <div class="n-chk">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Danger" id="modalDanger" />
                                                <label class="form-check-label" for="modalDanger">Danger</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-warning form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Success" id="modalSuccess" />
                                                <label class="form-check-label" for="modalSuccess">Success</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-success form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Primary" id="modalPrimary" />
                                                <label class="form-check-label" for="modalPrimary">Primary</label>
                                            </div>
                                        </div>
                                        <div class="n-chk">
                                            <div class="form-check form-check-danger form-check-inline">
                                                <input class="form-check-input" type="radio" name="event-level" value="Warning" id="modalWarning" />
                                                <label class="form-check-label" for="modalWarning">Warning</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 d-none">
                                    <div class="">
                                        <label class="form-label">Enter Start Date</label>
                                        <input id="event-start-date" type="text" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-12 d-none">
                                    <div class="">
                                        <label class="form-label">Enter End Date</label>
                                        <input id="event-end-date" type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
                                Update changes
                            </button>
                            <button type="button" class="btn btn-primary btn-add-event">
                                Add Event
                            </button>
                        </div>
                    </div>
                </div>
              </div>
              <!-- END MODAL -->
            </div>
          </div>
          <!-- Row -->
          <!-- Row -->
          <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Recent Chats</h4>
                  <div class="chat-box scrollable" style="height: 370px">
                    <!--chat Row -->
                    <ul class="chat-list m-0 p-0">
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img
                            src="{{asset('backend/assets/images/users/1.jpg')}}"
                            alt="user"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3">James Anderson</h5>
                          <div
                            class="
                              message
                              font-weight-medium
                              bg-light-info
                              d-inline-block
                              mb-2
                              text-dark
                            "
                          >
                            Lorem Ipsum is simply dummy text of the printing &
                            type setting industry.
                          </div>
                        </div>
                        <div
                          class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          "
                        >
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img
                            src="{{asset('backend/assets/images/users/2.jpg')}}"
                            alt="user"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted">Bianca Doe</h5>
                          <div
                            class="
                              message
                              font-weight-medium
                              bg-light-success
                              d-inline-block
                              mb-2
                              text-dark
                            "
                          >
                            It’s Great opportunity to work.
                          </div>
                        </div>
                        <div
                          class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          "
                        >
                          10:57 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div
                            class="
                              message
                              font-weight-medium
                              bg-light-inverse
                              d-inline-block
                              mb-2
                              text-dark
                            "
                          >
                            I would love to join the team.
                          </div>
                          <br />
                        </div>
                        <div
                          class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          "
                        >
                          10:58 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div
                            class="
                              message
                              font-weight-medium
                              bg-light-inverse
                              d-inline-block
                              mb-2
                              text-dark
                            "
                          >
                            Whats budget of the new project.
                          </div>
                          <br />
                        </div>
                        <div
                          class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          "
                        >
                          10:59 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img
                            src="{{asset('backend/assets/images/users/3.jpg')}}"
                            alt="user"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3">Angelina Rhodes</h5>
                          <div
                            class="
                              message
                              font-weight-medium
                              bg-light-primary
                              d-inline-block
                              mb-2
                              text-dark
                            "
                          >
                            Well we have good budget for the project
                          </div>
                        </div>
                        <div
                          class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          "
                        >
                          11:00 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="mt-4">
                        <div class="chat-img d-inline-block align-top">
                          <img
                            src="{{asset('backend/assets/images/users/1.jpg')}}"
                            alt="user"
                            class="rounded-circle"
                          />
                        </div>
                        <div class="chat-content ps-3 d-inline-block">
                          <h5 class="text-muted fs-3">James Anderson</h5>
                          <div
                            class="
                              message
                              font-weight-medium
                              bg-light-info
                              d-inline-block
                              mb-2
                              text-dark
                            "
                          >
                            Lorem Ipsum is simply dummy text of the printing &
                            type setting industry.
                          </div>
                        </div>
                        <div
                          class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          "
                        >
                          10:56 am
                        </div>
                      </li>
                      <!--chat Row -->
                      <li class="odd mt-4">
                        <div class="chat-content ps-3 d-inline-block text-end">
                          <div
                            class="
                              message
                              font-weight-medium
                              bg-light-inverse
                              d-inline-block
                              mb-2
                              text-dark
                            "
                          >
                            Whats budget of the new project.
                          </div>
                          <br />
                        </div>
                        <div
                          class="
                            chat-time
                            d-inline-block
                            text-end
                            fs-2
                            font-weight-medium
                          "
                        >
                          10:59 am
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body border-top">
                  <div class="row">
                    <div class="col-8">
                      <textarea
                        placeholder="Type your message here"
                        class="form-control border-0"
                        style="resize: none"
                      ></textarea>
                    </div>
                    <div class="col-4 text-end">
                      <button
                        type="button"
                        class="btn btn-info btn-circle btn-lg"
                      >
                        <i data-feather="send" class="fill-white"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Recent Messages</h4>
                </div>
                <div class="message-box">
                  <div class="message-widget contact-widget position-relative">
                    <!-- contact -->
                    <a href="#" class="p-3 d-flex align-items-start rounded-3">
                      <div
                        class="user-img position-relative d-inline-block me-2"
                      >
                        <img
                          src="{{asset('backend/assets/images/users/1.jpg')}}"
                          alt="user"
                          class="rounded-circle w-100"
                        />
                        <span
                          class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "
                        ></span>
                      </div>
                      <div
                        class="ps-2 v-middle d-md-flex align-items-center w-100"
                      >
                        <div>
                          <h5 class="my-1 text-dark font-weight-medium">
                            James Smith
                          </h5>
                          <span class="text-muted fs-2"
                            >you were in video call</span
                          >
                          <span class="text-muted fs-2 d-block"
                            >45 mins ago</span
                          >
                        </div>
                        <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-danger text-danger"
                          >
                            <i data-feather="video" class="feather-sm"></i>
                          </button>
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-primary text-primary"
                          >
                            <i
                              data-feather="phone-incoming"
                              class="feather-sm"
                            ></i>
                          </button>
                        </div>
                      </div>
                    </a>
                    <!-- contact -->
                    <a href="#" class="p-3 d-flex align-items-start rounded-3">
                      <div
                        class="user-img position-relative d-inline-block me-2"
                      >
                        <img
                          src="{{asset('backend/assets/images/users/2.jpg')}}"
                          alt="user"
                          class="rounded-circle w-100"
                        />
                        <span
                          class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "
                        ></span>
                      </div>
                      <div
                        class="ps-2 v-middle d-md-flex align-items-center w-100"
                      >
                        <div>
                          <h5 class="my-1 text-dark font-weight-medium">
                            Joseph Garciar
                          </h5>
                          <span class="text-muted fs-2"
                            >you were in video call</span
                          >
                          <span class="text-muted fs-2 d-block"
                            >2 mins ago</span
                          >
                        </div>
                        <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-danger text-danger"
                          >
                            <i data-feather="video" class="feather-sm"></i>
                          </button>
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-success text-success"
                          >
                            <i
                              data-feather="phone-outgoing"
                              class="feather-sm"
                            ></i>
                          </button>
                        </div>
                      </div>
                    </a>
                    <!-- contact -->
                    <a href="#" class="p-3 d-flex align-items-start rounded-3">
                      <div
                        class="user-img position-relative d-inline-block me-2"
                      >
                        <img
                          src="{{asset('backend/assets/images/users/6.jpg')}}"
                          alt="user"
                          class="rounded-circle w-100"
                        />
                        <span
                          class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "
                        ></span>
                      </div>
                      <div
                        class="ps-2 v-middle d-md-flex align-items-center w-100"
                      >
                        <div>
                          <h5 class="my-1 text-dark font-weight-medium">
                            Maria Rodriguez
                          </h5>
                          <span class="text-muted fs-2"
                            >you missed john call</span
                          >
                          <span class="text-muted fs-2 d-block"
                            >1 hour ago</span
                          >
                        </div>
                        <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-danger text-danger"
                          >
                            <i data-feather="video" class="feather-sm"></i>
                          </button>
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-info text-info"
                          >
                            <i
                              data-feather="phone-missed"
                              class="feather-sm"
                            ></i>
                          </button>
                        </div>
                      </div>
                    </a>
                    <!-- contact -->
                    <a href="#" class="p-3 d-flex align-items-start rounded-3">
                      <div
                        class="user-img position-relative d-inline-block me-2"
                      >
                        <img
                          src="{{asset('backend/assets/images/users/4.jpg')}}"
                          alt="user"
                          class="rounded-circle w-100"
                        />
                        <span
                          class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "
                        ></span>
                      </div>
                      <div
                        class="ps-2 v-middle d-md-flex align-items-center w-100"
                      >
                        <div>
                          <h5 class="my-1 text-dark font-weight-medium">
                            Henry Hernandez
                          </h5>
                          <span class="text-muted fs-2"
                            >you were in phone call</span
                          >
                          <span class="text-muted fs-2 d-block"
                            >2 days ago</span
                          >
                        </div>
                        <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-danger text-danger"
                          >
                            <i data-feather="video" class="feather-sm"></i>
                          </button>
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-success text-success"
                          >
                            <i
                              data-feather="phone-outgoing"
                              class="feather-sm"
                            ></i>
                          </button>
                        </div>
                      </div>
                    </a>
                    <!-- contact -->
                    <a href="#" class="p-3 d-flex align-items-start rounded-3">
                      <div
                        class="user-img position-relative d-inline-block me-2"
                      >
                        <img
                          src="{{asset('backend/assets/images/users/5.jpg')}}"
                          alt="user"
                          class="rounded-circle w-100"
                        />
                        <span
                          class="
                            profile-status
                            pull-right
                            d-inline-block
                            position-absolute
                            bg-success
                            rounded-circle
                          "
                        ></span>
                      </div>
                      <div
                        class="ps-2 v-middle d-md-flex align-items-center w-100"
                      >
                        <div>
                          <h5 class="my-1 text-dark font-weight-medium">
                            James Johnson
                          </h5>
                          <span class="text-muted fs-2"
                            >you were call forwarded</span
                          >
                          <span class="text-muted fs-2 d-block"
                            >55 mins ago</span
                          >
                        </div>
                        <div class="ms-auto d-flex button-group mt-3 mt-md-0">
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-danger text-danger"
                          >
                            <i data-feather="video" class="feather-sm"></i>
                          </button>
                          <button
                            type="button"
                            href="#"
                            class="btn btn-sm btn-light-warning text-warning"
                          >
                            <i
                              data-feather="phone-forwarded"
                              class="feather-sm"
                            ></i>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Row -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
    
@endsection