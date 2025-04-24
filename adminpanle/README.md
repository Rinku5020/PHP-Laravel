<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h4 class="card-title mb-0">Progress Nav Steps</h4>
                                    <a href="{{route('table.show')}}" class="btn btn-primary">Show User</a>
                                </div>
                                <!-- end card header -->
                                <div class="card-body form-steps">

                                    <form action="{{ route('form.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="text-center pt-3 pb-4 mb-1">
                                            <h5>Add User Account</h5>
                                        </div>
                                        <div id="custom-progress-bar" class="progress-nav mb-4">
                                            <div class="progress" style="height: 1px;">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill active"
                                                        data-progressbar="custom-progress-bar" id="pills-gen-info-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-gen-info"
                                                        type="button" role="tab" aria-controls="pills-gen-info"
                                                        aria-selected="true">1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill"
                                                        data-progressbar="custom-progress-bar"
                                                        id="pills-info-desc-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-info-desc" type="button"
                                                        role="tab" aria-controls="pills-info-desc"
                                                        aria-selected="false">2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill"
                                                        data-progressbar="custom-progress-bar" id="pills-success-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-success"
                                                        type="button" role="tab" aria-controls="pills-success"
                                                        aria-selected="false">3</button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-content">


                                            {{-- step 1 --}}
                                            <div class="tab-pane fade show active" id="pills-gen-info"
                                                role="tabpanel" aria-labelledby="pills-gen-info-tab">
                                                <div>
                                                    <div class="mb-4">
                                                        <div>
                                                            <h5 class="mb-1">General Information</h5>
                                                            <p class="text-muted">Fill all Information as below</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="first-name-input">First
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="firstName" value="{{ old('firstName') }}"
                                                                    id="first-name-input"
                                                                    placeholder="Enter First Name">

                                                                @error('firstName')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="last-name-input">Last
                                                                    Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="lastName" value="{{ old('lastName') }}"
                                                                    id="last-name-input"
                                                                    placeholder="Enter Last Name">

                                                                @error('lastName')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="email-input">Email</label>
                                                                <input type="email" class="form-control"
                                                                    name="email" value="{{ old('email') }}"
                                                                    id="email-input" placeholder="Enter Email">
                                                            </div>

                                                            @error('email')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="phone-input">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    id="phone-input" name="phone"
                                                                    value="{{ old('phone') }}"
                                                                    placeholder="Enter Phone Number">
                                                                @error('phone')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button"
                                                        class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                        data-nexttab="pills-info-desc-tab"><i
                                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Next</button>
                                                </div>
                                            </div>


                                            {{-- step 2 --}}

                                            <div class="tab-pane fade" id="pills-info-desc" role="tabpanel"
                                                aria-labelledby="pills-info-desc-tab">
                                                <div>
                                                    <div class="mb-4">
                                                        <div>
                                                            <h5 class="mb-1">Additional Information</h5>
                                                            <p class="text-muted">Provide more details about the user
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-3 ">
                                                        {{-- gender --}}
                                                        <div class="col-lg-6">
                                                            <label class="form-label">Gender</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="male-radio" value="male"
                                                                    {{ old('gender') == 'male' ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="male-radio">Male</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="gender" id="female-radio" value="female"
                                                                    {{ old('gender') == 'female' ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="female-radio">Female</label>
                                                            </div>

                                                            @error('gender')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror

                                                        </div>
                                                        {{-- hobbies --}}
                                                        <div class="col-lg-6">
                                                            <label class="form-label">Hobbies</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="playing-check" value="playing"
                                                                    name="hobbies[]"
                                                                    {{ is_array(old('hobbies')) == 'playing' ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="playing-check">Playing</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="traveling-check" value="traveling"
                                                                    name="hobbies[]"
                                                                    {{ is_array(old('hobbies')) == 'traveling' ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="traveling-check">Traveling</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    id="reading-check" value="reading"
                                                                    name="hobbies[]"
                                                                    {{ is_array(old('hobbies')) == 'reading' ? 'checked' : '' }}>
                                                                <label class="form-check-label"
                                                                    for="reading-check">Reading</label>
                                                            </div>
                                                            @error('hobbies')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-6">
                                                            <label class="form-label"
                                                                for="address-input">Address</label>
                                                            <textarea class="form-control" id="address-input" placeholder="Enter Address" rows="2" name="address">{{ old('address') }}</textarea>
                                                            @error('address')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="dob-input">Date of
                                                                Birth</label>
                                                            <input type="date" class="form-control" name="dob"
                                                                value="{{ old('dob') }}" id="dob-input">
                                                            @error('dob')
                                                                <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                    <button type="button"
                                                        class="btn btn-link text-decoration-none btn-label previestab"
                                                        data-previous="pills-gen-info-tab"><i
                                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                                        Back</button>
                                                    <button type="button"
                                                        class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                        data-nexttab="pills-success-tab"><i
                                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                                </div>
                                            </div>



                                            {{-- step 3 --}}

                                            <div class="tab-pane fade" id="pills-success" role=""
                                                aria-labelledby="pills-success-tab">

                                                <div class="mb-4">
                                                    <div>
                                                        <h5 class="mb-1">Additional Information</h5>
                                                        <p class="text-muted">Upload your profile picture</p>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div>

                                                    <div class="col-6">
                                                        <label>Upload Picture</label>
                                                        <input type="file" class="form-control"
                                                            id="profile-pic-input" name="image" accept="image/*">
                                                        <img src="" alt="" class="img-fluid mt-4"
                                                            id="preview-pic"
                                                            style="display:none; width: 100px; height: 100px; object-fit: cover;">
                                                        @error('image')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div class="mt-5 text-end">
                                                    <div class="mt-4 gap-3">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>


                                                <!-- end tab pane -->
                                            </div>
                                            <!-- end tab content -->
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
