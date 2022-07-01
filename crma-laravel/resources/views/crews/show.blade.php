<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENL CrMA - Crew</title>
</head>
<body>
    <div class="container">
        <h1>Crew's Detail</h1>
        <div class="row mb-3">
            <div class="col-md-9">
                <h3 class="mt-3">Profile</h3>
                <div class="form-group">
                    <label for="staticName">Fullname</label>
                    <input class="form-control" type="text" value="David Aurelius">
                </div>
                <div class="form-group">
                    <label for="staticGender">Gender</label>
                    <select class="custom-select">
                        <option selected value="1">Man</option>
                        <option value="2">Women</option>
                    </select>
                </div>
                <label for="inputBirthday"><b>Date of Birth</b></label>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputDay">Day</label>
                        <select id="inputDay" class="form-control">
                            @for ($i = 1; $i<=31; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputMonth">Month</label>
                        <select id="inputMonth" class="form-control">
                            @for ($i = 1; $i<=12; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputMonth">Year</label>
                        <select id="inputMonth" class="form-control">
                            @for ($i = 17; $i<=58; $i++)
                                <option>{{ date("Y") - $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="staticBirthplace">Birthplace</label>
                    <input class="form-control" type="text" value="Denpasar, Bali">
                    <small id="staticBirthplace" class="form-text text-muted">Base on Crew ID Card (KTP)</small>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input class="form-control" type="text" value="081234567891">
                </div>
                <h3 class="mt-3">Medical Records</h3>
                <div class="row">
                    @for ($i = 0; $i<=5; $i++)
                    <div class="col">
                        <h5>MCU</h5>
                        <p>Create:</p>
                        <p>Expr.:</p>
                    </div>
                    @endfor
                </div>
                <h3 class="mt-3">Licences & Certificates</h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Licence Code</th>
                                <th scope="col">Licence Name</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Expiration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <th scope="col">ANT-1</th>
                                <th scope="col">ANT I Operasional</th>
                                <th scope="col">1/1/2022</th>
                                <th scope="col">1/1/2024</th>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Certivicate Code</th>
                                <th scope="col">Certivicate Name</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Expiration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <th scope="col">17-CCMHB</th>
                                <th scope="col">Crowd Crisis Management &Human Behaviour</th>
                                <th scope="col">1/1/2022</th>
                                <th scope="col">1/1/2024</th>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3 class="mt-3">Passport</h3>
                        {{--  --}}
                        <div class="form-group">
                            <label for="passportNumber">Passport Number</label>
                            <input class="form-control" type="text" value="1234567">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="passportReleaseDate">Release Date</label>
                                <input type="date" name="passportReleaseDate">
                            </div>
                            <div class="form-group col-md">
                                <label for="passportExpirationDate">Expiration Date</label>
                                <input type="date" name="passportExpirationDate">
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <h3 class="mt-3">Bank Account</h3>
                        {{--  --}}
                        <div class="form-group">
                            <label for="Bank">Bank</label>
                            <input class="form-control" type="text" value="BCA">
                        </div>
                        <div class="form-group">
                            <label for="AccountNumber">Account Number</label>
                            <input class="form-control" type="text" value="0123456789">
                        </div>
                        <div class="form-group">
                            <label for="OwnerName">Owner Name</label>
                            <input class="form-control" type="text" value="DAVID AURELIUS TANDJUNG">
                        </div>
                    </div>
                </div>
                <h3 class="mt-3">Others</h3>
                {{--  --}}
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputProvince">Province</label>
                        <select name="province" id="province" class="form-control">
                            @for ($i = 1; $i<=5; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputRegency">Regency</label>
                        <select name="regency" id="regency" class="form-control">
                            @for ($i = 1; $i<=5; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputDistrict">District</label>
                        <select name="district" id="district" class="form-control">
                            @for ($i = 1; $i<=5; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputVillage">Village</label>
                        <select name="village" id="village" class="form-control">
                            @for ($i = 1; $i<=5; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPostalCode">Postal Code</label>
                        <select name="postalCode" id="postalCode" class="form-control">
                            @for ($i = 1; $i<=5; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="homeAddress">Home Address</label>
                    <input class="form-control" type="text" placeholder="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputReligion">Religion</label>
                        <select name="religion" id="religion" class="form-control">
                            @for ($i = 1; $i<=5; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputBloodType">Blood Type</label>
                        <select name="bloodType" id="bloodType" class="form-control">
                            @for ($i = 1; $i<=5; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="familyCardNumber">Family Card Number</label>
                    <input class="form-control" type="text" value="0123456789123456">
                </div>
                <div class="form-group">
                    <label for="NPWP">NPWP Number</label>
                    <input class="form-control" type="text" value="0123456789123456">
                </div>
                <div class="form-group">
                    <label for="BPJSTK">BPJS-TK Number</label>
                    <input class="form-control" type="text" value="012345678912">
                </div>
                <div class="form-group">
                    <label for="BPJSKES">BPJS-Kes Number</label>
                    <input class="form-control" type="text" value="0123456789123">
                </div>
                <h3 class="mt-3">Family</h3>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Role</th>
                                <th scope="col">Name</th>
                                <th scope="col">PhoneNumber</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <th scope="col">member</th>
                                <th scope="col">random name</th>
                                <th scope="col">081234567891</th>
                                <th scope="col">actions</th>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/crew_default_image.jpeg') }}" class="rounded" alt="photo_profile">
            </div>
        </div>
    </div>
</body>
</html>