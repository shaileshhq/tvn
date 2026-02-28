<div>
    @section('title', config('app.name') . ' | '.$page_title)
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                <span class="input-group-text input-group-addon bg-transparent border-danger" data-toggle>
                    <i class="bi bi-calendar text-danger"></i>
                </span>
                <input type="text" class="form-control bg-transparent border-danger" placeholder="Select date" data-input>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-box1">
                <div class="card-body">
                  <div class="row">
                    <div class="col-8">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$academic_year_count}}</h3>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item icon-1">
                            <i class="bi bi-folder-fill"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal"><a href="{{route('admin.academic-year.index')}}" >Academic Year</a></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-box2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-8">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">1</h3>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="icon icon-box-success">
                        <span class="mdi mdi-arrow-top-right icon-item icon-2">
                            <i class="bi bi-person-fill"></i></span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal"><a href="{{route('admin.academic-year.index')}}" >User</a></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-box3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-8">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$class_list}}</h3>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="icon icon-box-danger">
                        <span class="mdi mdi-arrow-bottom-left icon-item icon-3">
                            <i class="bi bi-house-door-fill"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal"><a href="{{route('admin.class.index')}}" >Class</a></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-box4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-8">
                      <div class="d-flex align-items-center align-self-start">
                        <h3 class="mb-0">{{$student_list}}
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="icon icon-box-success ">
                        <span class="mdi mdi-arrow-top-right icon-item icon-4">
                            <i class="bi bi-person-fill"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <h6 class="text-muted font-weight-normal"><a href="{{route('admin.student-register.index')}}" >Registration</a></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box1">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$slider_data}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item icon-1">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.slider.index')}}">Slider</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$committee_data}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item icon-2">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.committee.index')}}">Managing Committee</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$merit_list}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item icon-3">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.merit-list.index')}}" >Merit List</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box4">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$teacher_data}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item icon-4">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.teacher.index')}}">Teachers</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box1">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$tc_form}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item icon-1">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.tc-form.index')}}" >TC Form</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box2">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$news_list}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item icon-2">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.news.index')}}">News</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$event_list}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item icon-3">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.events.index')}}">Events</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card card-box4">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">{{$equiry_data}}
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item icon-4">
                              <i class="bi bi-person-fill"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"><a href="{{route('admin.enquiry.index')}}">Enquiry</a></h6>
                  </div>
                </div>
              </div>
          </div>

</div>
