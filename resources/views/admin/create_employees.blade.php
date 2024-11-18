@extends('base')

@section('content')

    <x-header />
    <x-aside />

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Create Employees</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Employees</li>
                    <li class="breadcrumb-item active">Create Employees</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section employees">
            <div class="card p-3">
                <div class="p-5 d-flex justify-content-start">
                    <form class="row g-3" style="max-width: 75%; width: 100%;">
                        <div class="col-lg-6">
                            <label for="first_name" class="form-label required">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name">
                        </div>
                        <div class="col-lg-6">
                            <label for="last_name" class="form-label required">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name">
                        </div>
                        <div class="col-lg-6">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" name="middle_name" class="form-control" id="middle_name">
                        </div>
                        <div class="col-lg-6">
                            <label for="inputState" class="form-label required">Gender</label>
                            <select id="inputState" class="form-select">
                                <option selected>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <label for="birthday" class="form-label required">Birth Date</label>
                            <input type="date" name="birthday" class="form-control" id="birthday">
                        </div>

                        <div class="col-lg-6">
                            <label for="inputState" class="form-label required">Marital Status</label>
                            <select id="inputState" class="form-select">
                                <option selected>Select Marital Status</option>
                                <option>Single</option>
                                <option>Micro Cheater</option>
                                <option>Kabet</option>
                                <option>Widowed</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <label for="designation" class="form-label required">Designation</label>
                            <input type="text" name="designation" class="form-control" id="designation">
                        </div>

                        <div class="col-lg-6">
                            <label for="inputState" class="form-label required">Payroll Position</label>
                            <select id="inputState" class="form-select">
                                <option selected>Select Posistion</option>
                                <option>Null</option>
                                <option>Null</option>
                                <option>Null</option>
                                <option>Null</option>
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <label for="inputState" class="form-label required">Department</label>
                            <select id="inputState" class="form-select">
                                <option selected>Select Department</option>
                                <option>Admin Department</option>
                                <option>Technical Department</option>
                            </select>
                        </div>


                        <div class="col-lg-6">
                            <label for="inputState" class="form-label required">Place of assignment</label>
                            <select id="inputState" class="form-select">
                                <option selected>Select Posistion</option>
                                <option>Null</option>
                                <option>Null</option>
                                <option>Null</option>
                                <option>Null</option>
                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label for="address" class="form-label required">Address</label>
                            <input type="text" name="addressv" class="form-control" id="address">
                        </div>

                        <div class="col-lg-6">
                            <label for="office_mail" class="form-label required">Office Mail</label>
                            <input type="email" name="office_mail" class="form-control" id="office_mail">
                        </div>

                        <div class="col-lg-6">
                            <label for="personal_mail" class="form-label required">Personal Mail</label>
                            <input type="email" name="personal_mail" class="form-control" id="personal_mail">
                        </div>

                        <div class="col-lg-4">
                            <label for="mobile_number" class="form-label required">Mobile Number</label>
                            <input type="text" name="mobile_number" class="form-control" id="mobile_number">
                        </div>

                        <div class="col-lg-4">
                            <label for="tin" class="form-label required">TIN</label>
                            <input type="text" name="tin" class="form-control" id="tin">
                        </div>


                        <div class="col-lg-4">
                            <label for="gsis" class="form-label required">GSIS</label>
                            <input type="text" name="gsis" class="form-control" id="gsis">
                        </div>

                        <div class="col-lg-4">
                            <label for="mobile_number" class="form-label required">CRN</label>
                            <input type="text" name="mobile_number" class="form-control" id="mobile_number">
                        </div>

                        <div class="col-lg-4">
                            <label for="tin" class="form-label required">SSS</label>
                            <input type="text" name="tin" class="form-control" id="tin">
                        </div>

                        <div class="col-lg-4">
                            <label for="gsis" class="form-label required">PhilHealth</label>
                            <input type="text" name="gsis" class="form-control" id="gsis">
                        </div>

                        <div class="col-lg-6">
                            <label for="date_employed" class="form-label required">Date Employed</label>
                            <input type="date" name="date_employed" class="form-control" id="date_employed">
                        </div>

                        <div class="col-lg-6">
                            <label for="inputState" class="form-label required">Employment Status</label>
                            <select id="inputState" class="form-select">
                                <option selected>Select Employment Status</option>
                                <option>Regular</option>
                                <option>JO</option>
                                <option>ENDO</option>
                                <option>PTS</option>
                            </select>
                        </div>

                        <div class="lg-3">
                            <label for="formFile" class="form-label required">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>


                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <x-footer />

@endsection
