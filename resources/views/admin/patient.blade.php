@extends('admin.layout.default')

@section('title', 'Patient')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets\css\Patient.css') }}">
@endsection

@section('patient-content')

<p class="h3 m-2">List of Patient</p>

<div class="toolbar">
    <label style="display: none;">
        <input type="checkbox" id="sortStable" checked /> sortStable
    </label>
    <div class="" id="buttonAdd"> <button class="btn text-light" type="button"
            data-bs-toggle="modal" data-bs-target="#OpenAddpatient"> <i
                class="bi bi-person-plus"> </i>
            Add new patient </button>
    </div>
</div>

<div class="table-responsive container-fluid">

    <table id="PatientRecordTable" data-height="370" data-toggle="table" data-search="true"
        data-show-columns="true" data-pagination="true" data-toolbar=".toolbar"
        data-toolbar-align="right">

        <!-- <div id="totalpatients" class="p-2 flex-grow-1 mt-2">
                                    <p class="h5">3</p>
                                </div> -->

        <thead>
            <tr>
                <th data-sortable="true" data-field="full_name">Name</th>
                <th data-sortable="true" data-field="birthday">Birthday</th>
                <th data-sortable="true" data-field="age">Age</th>
                <th data-sortable="true" data-field="full_address">Address</th>
                <th data-sortable="true" data-field="contact_number">Contact Number</th>
                <th data-sortable="true" data-field="pwd_senior_control_number">Senior/PWD
                    Control No </th>
            </tr>
        </thead>
    </table>
</div>

<!-- Dental Transaction Records -->
<div id="DentalTransactionRecords" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Transaction Records</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="table" data-toggle="table" data-height="345"
                    data-url="json/data1.json">
                    <thead>
                        <tr>
                            <th data-field="DentalRecordsDate">Date</th>
                            <th data-field="DentalRecordsToothNumber">Tooth Number</th>
                            <th data-field="DentalRecordsTreatment">Treatment</th>
                            <th data-field="DentalRecordsTotal">Total</th>
                            <th data-field="DentalRecordsPaid">Paid</th>
                            <th data-field="DentalRecordsBalance">Balance</th>
                            <th data-field="DentalRecordsNotes">Notes</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Context menu Patient records -->
<ul id="context-menu-PatientRecords" class="dropdown-menu p-2">
    <li class="">
        <a class="dropdown-item d-flex align-items-center" data-item="editPatientRecords"
            href="#">
            <i class="bi bi-pencil-square"></i>
            <span class="mx-auto">Edit</span>
        </a>
    </li>
    <li>
        <a class="dropdown-item d-flex align-items-center" data-item="addPatientDentalRecords"
            data-bs-toggle="modal" data-bs-target="#DentalTransactionRecords" href="#">
            <i class="bi bi-file-medical"></i>
            <span class="mx-auto ms-3">View Dental Records </span>
        </a>
    </li>
</ul>

<!-- Update patient Modal -->
<div class="modal modal-centered modal-xl fade" id="UpdatePatientPersonalRecords" tabindex="-1"
    aria-labelledby="UpdatePatientPersonalRecordsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="UpdatePatientPersonalRecordsModalLabel">Edit
                    Patient Information
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body container-fluid">
                <div class="container">
                    <form id="editFormPatientInformation">
                        <div class="row">
                            <p class="h4">Full Name</p>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalfirstName"
                                    class="form-label">First
                                    Name</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalfirstName" required>
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalmiddleName"
                                    class="form-label">Middle
                                    Name</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalmiddleName">
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonallastName"
                                    class="form-label">Last Name</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonallastName" required>
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalsuffix"
                                    class="form-label">Suffix</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalsuffix" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 mb-2">
                                <label for="UpdatePatientPersonalbirthday"
                                    class="form-label">Birthday</label>
                                <input type="date" class="form-control"
                                    id="UpdatePatientPersonalbirthday" required>
                            </div>
                            <div class="col-xl-3 mb-2">
                                <label for="UpdatePatientPersonalage"
                                    class="form-label">Age</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalage" readonly>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <p class="h4">Complete Address</p>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalregion"
                                    class="form-label">Region</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalregion" required>
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalprovince"
                                    class="form-label">Province</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalprovince" required>
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalmunicipality"
                                    class="form-label">Municipality</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalmunicipality" required>
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalbarangay"
                                    class="form-label">Barangay</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalbarangay" required>
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalstreetName"
                                    class="form-label">Street
                                    Name</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalstreetName" required>
                            </div>
                            <div class="col-xl-3">
                                <label for="UpdatePatientPersonalhouseNumber"
                                    class="form-label">House
                                    Number</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalhouseNumber" required>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <p class="h4">Contact & Discount Information </p>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalcontactNumber"
                                    class="form-label">Contact
                                    Number</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonalcontactNumber" required>
                            </div>
                            <div class="col-xl-3 mb-3">
                                <label for="UpdatePatientPersonalEmail"
                                    class="form-label">Email</label>
                                <input type="email" class="form-control"
                                    id="UpdatePatientPersonalEmail" required>
                            </div>
                            <div class="col-xl-3">
                                <label for="UpdatePatientPersonaldiscountId"
                                    class="form-label">Discount
                                    Number</label>
                                <input type="text" class="form-control"
                                    id="UpdatePatientPersonaldiscountId" required>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"
                    id="saveChangesPatientInformation">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Add patient Modal-->
<div class="modal modal-xl fade modal-dialog-scrollable-centered" id="OpenAddpatient"
    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">New patient
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container d-flex">

                    <!-- NEW form -->
                    <div class="container">
                        <form id="AddPatientForm" action="#" method="" class="needs-validation"
                            onsubmit="event.preventDefault();" novalidate>

                            <p class="h4">Full Name</p>
                            <div class="row">

                                <div class="col-xl-3 mb-2 has-validation">
                                    <label for="patientfirstname" class="form-label">First
                                        Name *</label>
                                    <input type="text" class="form-control"
                                        id="patientfirstname" placeholder="Enter firstname"
                                        name="patientfirstname" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback ">
                                        Please enter your name.
                                    </div>

                                </div>

                                <div class="col-xl-3 mb-2">
                                    <label for="patientmiddlename" class="form-label">Middle
                                        Name *</label>
                                    <input type="text" class="form-control"
                                        id="patientmiddlename" placeholder="Enter middlename"
                                        name="patientmiddlename">

                                </div>

                                <div class="col-xl-3 mb-2 ">
                                    <label for="patientlastname" class="form-label">Last
                                        Name
                                        *</label>
                                    <input type="text" class="form-control" id="patientlastname"
                                        placeholder="Enter lastname" name="patientlastname"
                                        required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback ">
                                        Please enter your last name.
                                    </div>
                                </div>

                                <div class="col-xl-3 mb-2">
                                    <label for="patientsuffix" class="form-label">Suffix
                                        (Optional)</label>
                                    <input type="text" class="form-control" id="patientsuffix"
                                        placeholder="Enter Suffix" name="patientsuffix">
                                </div>

                            </div>

                            <div class="row mb-2">

                                <div class="col-xl-3">
                                    <label for="patientbirtday" class="form-label">Birthday
                                        *</label>
                                    <input type="date" class="form-control"
                                        id="patientbirthday">
                                </div>

                            </div>

                            <hr>

                            <div class="row mb-2">

                                <p class="h4">Complete Address</p>

                                <!-- <div class="col-xl-3 mb-2">
                                    <label class="form-label mb-2" for="region">Region *
                                    </label>
                                    <select class="form-select dropdown-toggle"
                                        aria-label="Default select example" name="region"
                                        id="region" required>
                                    </select>
                                    <input type="hidden" class="form-control form-control-md "
                                        name="region_text" id="region-text" required>
                                    <div class="invalid-feedback">
                                        Please choose your region.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div> -->

                                <div class="col-xl-3 mb-2">
                                    <label for="province" class="form-label">Provinces *
                                    </label>
                                    <select class="form-select dropdown-toggle"
                                        aria-label="Default select example" name="province"
                                        id="province">
                                    </select>
                                    <input type="hidden" class="form-control form-control-md"
                                        name="province_text" id="province-text" required>
                                </div>

                                <div class="col-xl-3 mb-2">
                                    <label class="form-label mb-2" for="city">Municipality/City
                                        *</label>
                                    <select class="form-select dropdown-toggle"
                                        aria-label="Default select example" name="city"
                                        id="city">
                                    </select>
                                    <input type="hidden" class="form-control form-control-md"
                                        name="city_text" id="city-text" required>
                                </div>

                                <div class="col-xl-3">
                                    <label class="form-label mb-2" for="barangay">Barangay *
                                    </label>
                                    <select class="form-select dropdown-toggle"
                                        aria-label="Default select example" name="barangay"
                                        id="barangay">
                                    </select>
                                    <input type="hidden" class="form-control form-control-md"
                                        name="barangay_text" id="barangay-text" required>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-xl-3">
                                    <label for="streetname" class="form-label">Street Name
                                        *</label>
                                    <input type="text" class="form-control" id="streetname"
                                        placeholder="Enter street name" name="streetname">
                                </div>

                                <div class="col-xl-3">
                                    <label for="housenumber" class="form-label">House Number
                                        *</label>
                                    <input type="text" class="form-control" id="housenumber"
                                        placeholder="Enter street name" name="housenumber">
                                </div>


                            </div>

                            <hr>

                            <div class="row">
                                <p class="h4 flex-column">Contact & Discount
                                    information </p>
                                <div class="col-xl-3">
                                    <label for="contactnumber" class="form-label">Contact
                                        Number *</label>
                                    <input type="tel" class="form-control" id="contactnumber"
                                        placeholder="Enter contact number" name="contactnumber">
                                </div>
                                <div class="col-xl-3">
                                    <label for="email" class="form-label">Email
                                        (Optional)</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter email" name="email">
                                </div>
                                <div class="col-xl-4">
                                    <label for="discountid" class="form-label ">Senior/PWD
                                        Control No. (Optional)</label>
                                    <input type="tel" class="form-control" id="discountid"
                                        placeholder="Enter discount number" name="discountid">
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <p class="h4 flex-column">For Minors Only (Optional)</p>
                                <p class="h5 mt-1 flex-column">Guardian Name</p>
                                <div class="col-xl-3 mb-2">
                                    <label for="guardianfirstname" class="form-label">First
                                        Name </label>
                                    <input type="text" class="form-control"
                                        id="guardianfirstname" placeholder="Enter firstname"
                                        name="guardianfirstname">
                                </div>
                                <div class="col-xl-3 mb-2">
                                    <label for="guardianmiddlename" class="form-label">Middle
                                        Name </label>
                                    <input type="text" class="form-control"
                                        id="guardianmiddlename" placeholder="Enter middlename"
                                        name="guardianmiddlename">
                                </div>
                                <div class="col-xl-3 mb-2 ">
                                    <label for="guardianlastname" class="form-label">Last
                                        Name</label>
                                    <input type="text" class="form-control"
                                        id="guardianlastname" placeholder="Enter lastname"
                                        name="guardianlastname">
                                </div>
                                <div class="col-xl-3 mb-2">
                                    <label for="guardiansuffix" class="form-label">Suffix
                                        (Optional)</label>
                                    <input type="text" class="form-control" id="guardiansuffix"
                                        placeholder="Enter Suffix" name="guardianmiddlename">
                                </div>
                            </div>

                            <hr>

                            <div class="row mb-2">

                                <p class="h4 flex-column">Medical History</p>

                                <div class="col-xxl-5">
                                    <label for="sakitsapuso" class="form-label">Sakit sa puso
                                        (Heart Disease)</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="sakitsapuso" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="sakitsapuso">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>

                                <div class="col-xxl-5">
                                    <label for="highblood" class="form-label">High Blood</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="highblood" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="highblood">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>

                                <div class="col-xxl-5">
                                    <label for="lowblood" class="form-label">Low Blood</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="lowblood" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="lowblood">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>

                                <div class="col-xxl-5">
                                    <label for="stroke" class="form-label">Stoke (Past 6
                                        months)</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="stroke" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="stroke">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="diabetic" class="form-label">Diabetic</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="diabetic" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="diabetic">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="asthma" class="form-label">Asthma</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="asthma" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="asthma">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="stdhivaids"
                                        class="form-label">STD/HIV/AIDS/COVID 19</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="stdhivaids" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="stdhivaids">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="lungdisease" class="form-label">Lung Disease
                                        (Sakit sa baga)</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="lungdisease" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="lungdisease">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="liverdisease" class="form-label">Liver Disease
                                        (Sakit sa atay)</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="liverdisease" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="liverdisease">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="stomachulcer" class="form-label">Stomach
                                        Ulcer/Gerd</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="stomachulcer" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="stomachulcer">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="pregnant"
                                        class="form-label">Pregnant/Kasalukuyang may
                                        regla</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="pregnant" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="pregnant">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="contraceptives" class="form-label">On
                                        Contraceptives</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="contraceptives" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="contraceptives">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="allergies" class="form-label">Allergies
                                        (Gamot/Pagkain)</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="allergies" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="allergies">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5">
                                    <label for="otherdisease" class="form-label">Other
                                        Disease/Incedent might be needed for us to be
                                        informed</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input mt-0 is-valid"
                                                id="otherdisease" type="checkbox" value=""
                                                aria-label="Checkbox for following text input"
                                                name="otherdisease">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with checkbox">
                                    </div>
                                </div>
                                <div class="col-xxl-5 mb-2">
                                    <label for="dentalreason" class="form-label">Dahilan ng
                                        pagdental</label>
                                    <input type="text" class="form-control" id="dentalreason"
                                        placeholder="Enter the reason" name="dentalreason">
                                </div>
                                <div class="col-xxl-5 mb-2">
                                    <label for="takenmedicine" class="form-label">Mga gamot ng
                                        nainom patungkol sa sakit ng ipin</label>
                                    <input type="text" class="form-control" id="takenmedicine"
                                        placeholder="Enter the reason" name="takenmedicine">
                                </div>
                                <div class="col-xxl-5 mb-2">
                                    <label for="kailannagsimula" class="form-label">Kailan pa
                                        nagsimula ang sira/Sakit at tuwing kailan
                                        nararamdaman</label>
                                    <input type="text" class="form-control" id="kailannagsimula"
                                        placeholder="Enter the reason" name="kailannagsimula">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-sm-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="sumasakit">
                                    <label class="form-check-label" for="sumasakit">
                                        Sumasakit
                                    </label>
                                </div>

                                <div class="col-sm-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="nangingilo">
                                    <label class="form-check-label" for="nangingilo">
                                        Nangingilo
                                    </label>
                                </div>
                                <div class="col-sm-3 mb-2">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="smoker">
                                    <label class="form-check-label" for="smoker">
                                        Smoker
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="pagdurugogilagid">
                                    <label class="form-check-label" for="pagdurugogilagid">
                                        Pagdurugo ng gilagid
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-xxl-5 ">
                                    <input class="form-check-input " type="checkbox" value=""
                                        id="labisnapagdurugo">
                                    <label class="form-check-label p-0" for="labisnapagdurugo">
                                        Labis na pagdurugo ng nakaraang bunot o naging operasyon
                                    </label>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="AddedPatientSubmit" class="btn btn-primary"
                        form="AddPatientForm">Add</button>
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Include patient-specific JavaScript -->
    <script src="{{asset('lib\address.js')}}"></script>
@endsection