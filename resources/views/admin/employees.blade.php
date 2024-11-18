@extends('base')

@section('content')

    <x-header />
    <x-aside />

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Employees</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Employees</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <!-- Button trigger modal -->





        <section class="section employees">
            <div class="card p-3">


                <!-- Button Row -->
                <div class="d-flex justify-content-end mt-3 mb-2">
                    <!-- Modal Trigger Button -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployeeModal">
                        Add New Employee
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="addEmployeeModalLabel">Add New Employee</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form class="row g-3 p-4">

                                    {{-- 1st row --}}
                                    <div class="col-lg-4">
                                        <label for="first_name" class="form-label required">First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="last_name" class="form-label required">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="middle_name" class="form-label">Middle Name</label>
                                        <input type="text" name="middle_name" class="form-control" id="middle_name">
                                    </div>

                                    {{-- 2nd row --}}
                                    <div class="col-lg-4">
                                        <label for="inputState" class="form-label required">Gender</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>---</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="birthday" class="form-label required">Birth Date</label>
                                        <input type="date" name="birthday" class="form-control" id="birthday">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="inputState" class="form-label required">Marital Status</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>---</option>
                                            <option>Single</option>
                                            <option>Micro Cheater</option>
                                            <option>Kabet</option>
                                            <option>Widowed</option>
                                        </select>
                                    </div>


                                    {{-- 3rd Row --}}
                                    <div class="col-lg-12">
                                        <label for="address" class="form-label required">Address</label>
                                        <input type="text" name="addressv" class="form-control" id="address">
                                    </div>

                                    {{-- <hr class="my-5"> --}}

                                    {{-- 4th Row --}}
                                    <div class="col-lg-6">
                                        <label for="designation" class="form-label required">Designation</label>
                                        <input type="text" name="designation" class="form-control" id="designation">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="inputState" class="form-label required">Payroll Position</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>---</option>
                                            <option>Null</option>
                                            <option>Null</option>
                                            <option>Null</option>
                                            <option>Null</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="inputState" class="form-label required">Department</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>---</option>
                                            <option>Admin Department</option>
                                            <option>Technical Department</option>
                                        </select>
                                    </div>


                                    <div class="col-lg-6">
                                        <label for="inputState" class="form-label required">Place of assignment</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>---</option>
                                            <option>Null</option>
                                            <option>Null</option>
                                            <option>Null</option>
                                            <option>Null</option>
                                        </select>
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
                                        <label for="tin" class="form-label ">TIN</label>
                                        <input type="text" name="tin" class="form-control" id="tin">
                                    </div>


                                    <div class="col-lg-4">
                                        <label for="gsis" class="form-label ">GSIS</label>
                                        <input type="text" name="gsis" class="form-control" id="gsis">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="mobile_number" class="form-label ">CRN</label>
                                        <input type="text" name="mobile_number" class="form-control" id="mobile_number">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="tin" class="form-label ">SSS</label>
                                        <input type="text" name="tin" class="form-control" id="tin">
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="gsis" class="form-label ">PhilHealth</label>
                                        <input type="text" name="gsis" class="form-control" id="gsis">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="date_employed" class="form-label required">Date Employed</label>
                                        <input type="date" name="date_employed" class="form-control" id="date_employed">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="inputState" class="form-label required">Employment Status</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>---</option>
                                            <option>Regular</option>
                                            <option>JO</option>
                                            <option>ENDO</option>
                                            <option>PTS</option>
                                        </select>
                                    </div>

                                    <div class="lg-3 mt-4">
                                        <label for="formFile" class="form-label">Choose File for your Profile Picture</label>
                                        <!-- Avatar Section -->
                                        <div class="d-flex align-items-center justify-content-start mb-4 position-relative">
                                            <!-- Clickable Image -->
                                            <label for="customFile2" class="cursor-pointer position-relative">
                                                <img id="selectedAvatar"
                                                    src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                                                    class="rounded-circle"
                                                    style="width: 200px; height: 200px; object-fit: cover; cursor: pointer;"
                                                    alt="Default avatar" />
                                                <!-- Plus Icon Overlay -->
                                                <div class="position-absolute bottom-0 end-0 translate-middle bg-primary rounded-circle"
                                                    style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border: 2px solid white;">
                                                    <i class="bi bi-plus text-white" style="font-size: 20px;"></i>
                                                </div>
                                            </label>

                                            <!-- Hidden File Input -->
                                            <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                                        </div>
                                    </div>

                                </form>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Employee</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- DataTable -->
                <div class="table-wrapper">
                    <table id="example" class="table table-striped table-hover nowrap mt-3" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th class="p-3">ID</th>
                                <th class="p-3">ACTION</th>
                                <th class="p-3">PROFILE PICTURE</th>
                                <th class="p-3">NAME</th>
                                <th class="p-3">GENDER</th>
                                <th class="p-3">BIRTH DATE</th>
                                <th class="p-3">MARITAL STATUS</th>
                                <th class="p-3">DESIGNATION</th>
                                <th class="p-3">PAYROLL POSITION</th>
                                <th class="p-3">DEPARTMENT</th>
                                <th class="p-3">PLACE OF ASSIGNMENT</th>
                                <th class="p-3">ADDRESS</th>
                                <th class="p-3">OFFICE MAIL</th>
                                <th class="p-3">PERSONAL MAIL</th>
                                <th class="p-3">MOBILE NUMBER</th>
                                <th class="p-3">DATE EMPLOYED</th>
                                <th class="p-3">EMPLOYMENT STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- Vertically and horizontally center text -->
                                <td class="align-middle text-center">1</td>
                                <td class="align-middle text-center">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="action-list"><a class="dropdown-item d-flex align-items-center justify-content-start" href="#"><i class="bi bi-eye me-2"></i> View</a></li>
                                            <li class="action-list"><a class="dropdown-item d-flex align-items-center justify-content-start" href="#"><i class="bi bi-pencil-square me-2"></i> Edit</a></li>
                                            <hr style="width: 80%; margin: 0 auto; border: 1px solid #000000;">
                                            <li class="action-list"><a class="dropdown-item text-danger d-flex align-items-center justify-content-start" href="#"><i class="bi bi-trash me-2"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <!-- Center profile picture -->
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; border-radius: 50%; overflow: hidden; background-color: #f0f0f0; margin: auto;">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="Profile Picture" class="img-fluid" style="max-height: 100%; max-width: 100%; display: block;">
                                    </div>
                                </td>
                                <td class="align-middle text-center">Monkey Delos Reyes Luffy</td>
                                <td class="align-middle text-center">Not Identified</td>
                                <td class="align-middle text-center">June 09, 1972</td>
                                <td class="align-middle text-center">Divorced</td>
                                <td class="align-middle text-center">Job Order</td>
                                <td class="align-middle text-center">None</td>
                                <td class="align-middle text-center">Admin Department</td>
                                <td class="align-middle text-center">Cashier</td>
                                <td class="align-middle text-center">Muruk, Luyan, Quezon City</td>
                                <td class="align-middle text-center">ched@gov.ph</td>
                                <td class="align-middle text-center">Judeskie@gmail.com</td>
                                <td class="align-middle text-center">63+89326431543</td>
                                <td class="align-middle text-center">September 1, 2024</td>
                                <td class="align-middle text-center">Ongoing</td>
                            </tr>



                            <tr>
                                <!-- Add align-middle to vertically center the text -->
                                <td class="align-middle text-center">2</td>
                                <td class="align-middle text-center">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="action-list"><a class="dropdown-item d-flex align-items-center justify-content-start" href="#"><i class="bi bi-eye me-2"></i> View</a></li>
                                            <li class="action-list"><a class="dropdown-item d-flex align-items-center justify-content-start" href="#"><i class="bi bi-pencil-square me-2"></i> Edit</a></li>
                                            <hr style="width: 80%; margin: 0 auto; border: 1px solid #000000;">
                                            <li class="action-list"><a class="dropdown-item text-danger d-flex align-items-center justify-content-start" href="#"><i class="bi bi-trash me-2"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-flex align-items-center justify-content-center" style="width: 60px; height: 60px; overflow: hidden; border-radius: 50%; background-color: #f0f0f0; margin: auto;">
                                        <img src={{ asset('assets/img/product-2.jpg') }} alt="Profile Picture" class="img-fluid" >
                                    </div>
                                </td>
                                <td class="align-middle text-center">Monkey Delos Reyes Luffy</td>
                                <td class="align-middle text-center">Not Identified</td>
                                <td class="align-middle text-center">June 09, 1972</td>
                                <td class="align-middle text-center">Divorced</td>
                                <td class="align-middle text-center">Job Order</td>
                                <td class="align-middle text-center">None</td>
                                <td class="align-middle text-center">Admin Department</td>
                                <td class="align-middle text-center">Cashier</td>
                                <td class="align-middle text-center">Muruk, Luyan, Quezon City</td>
                                <td class="align-middle text-center">ched@gov.ph</td>
                                <td class="align-middle text-center">Judeskie@gmail.com</td>
                                <td class="align-middle text-center">63+89326431543</td>
                                <td class="align-middle text-center">September 1, 2024</td>
                                <td class="align-middle text-center">Ongoing</td>
                            </tr>




                        </tbody>
                    </table>
                </div>

            </div>
        </section>




    </main><!-- End #main -->

    <script>
        function displaySelectedImage(event, imgId) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById(imgId).src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

    <x-footer />

@endsection
