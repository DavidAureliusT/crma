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
        <h1>Add New Crew</h1>
        <form action="/crews" method="POST">
            @csrf
            <div class="row mt-3 mb-5">
                <div class="col-md-9">
                    <h3>Profile</h3>
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input name="fullname" class="form-control" type="text" placeholder="Type crew's fullname" value="Captain Jack Sparrow">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender-id" class="custom-select">
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input name="birthdate" type="date" class="form-control" id="birthdate" value="2000-03-07">
                    </div>
                    <div class="form-group">
                        <label for="birthplace">Birthplace</label>
                        <input name="birhtplace" class="form-control" type="text" placeholder="Ex: Denpasar, Bali" value="North Pacific Ocean">
                        <small id="birthplace" class="form-text text-muted">Base on Crew ID Card (KTP)</small>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input name="phone-number" class="form-control" type="text" placeholder="Ex: 081234567891" value="081288756632">
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-10 ">
                            <h3>Medical Records</h3>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline-primary btn-block" >+ Add</button>
                        </div>
                    </div>
                    <h5>MCU</h5>
                    <div class="form-group row">
                        <label for="MCUReleaseDate" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-mcuReleaseDate" type="date" class="form-control" id="MCUReleaseDate" value="2000-07-04">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="MCUExpirationDate" class="col-sm-3 col-form-label">Expiration Date.:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-mcuExpirationDate" type="date" class="form-control" id="MCUExpirationDate" value="2000-07-11">
                        </div>
                    </div>
                    <h5>PCR</h5>
                    <div class="form-group row">
                        <label for="PCRReleaseDate" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-pcrReleaseDate" type="date" class="form-control" id="PCRReleaseDate" value="2000-07-04">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="PCRExpirationDate" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-pcrExpirationDate" type="date" class="form-control" id="PCRExpirationDate" value="2000-07-11">
                        </div>
                    </div>
                    <h5>Covid Vaccine 1</h5>
                    <div class="form-group row">
                        <label for="CV1ReleaseDate" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-cv1ReleaseDate" type="date" class="form-control" id="CV1ReleaseDate" value="2000-07-04">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CV1ExpirationDate" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-cv1ExpirationDate" type="date" class="form-control" id="CV1ExpirationDate" value="2000-07-11">
                        </div>
                    </div>
                    <h5>Covid Vaccine 2</h5>
                    <div class="form-group row">
                        <label for="CV2ReleaseDate" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-cv2ReleaseDate" type="date" class="form-control" id="CV2ReleaseDate" value="2000-07-04">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CV2ExpirationDate" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-cv2ExpirationDate" type="date" class="form-control" id="CV2ExpirationDate" value="2000-07-11">
                        </div>
                    </div>
                    <h5>Covid Vaccine 3</h5>
                    <div class="form-group row">
                        <label for="CV3ReleaseDate" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-cv3ReleaseDate" type="date" class="form-control" id="CV3ReleaseDate" value="2000-07-04">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="CV3ExpirationDate" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medicalRecord-cv3ExpirationDate" type="date" class="form-control" id="CV3ExpirationDate" value="2000-07-11">
                        </div>
                    </div>
                    <h3 class="mt-3">Licences & Certificates</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Licence Name</th>
                                    <th scope="col">Release Date</th>
                                    <th scope="col">Expiration Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($licences as $licence)
                                <tr>
                                    <th scope="col">
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input name="crewLicence-{{ $licence->id }}isSelected" type="checkbox">
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="col">{{ $licence->name }}</th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <input name="crewLicence-{{ $licence->id }}ReleaseDate" class="form-control" type="date">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <input name="crewLicence-{{ $licence->id }}ExpirationDate" class="form-control" type="date">
                                        </div>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Certivicate Name</th>
                                    <th scope="col">Release Date</th>
                                    <th scope="col">Expiration Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificates as $certificate)
                                <tr>
                                    <th scope="col">
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <input name="crewCertificate-{{ $certificate->id }}isSelected" type="checkbox">
                                            </div>
                                        </div>
                                    </th>
                                    <th scope="col">{{ $certificate->name }}</th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <input name="crewCertificate-{{ $certificate->id }}ReleaseDate" class="form-control" type="date">
                                        </div>
                                    </th>
                                    <th scope="col">
                                        <div class="form-group">
                                            <input name="crewCertificate-{{ $certificate->id }}ExpirationDate" class="form-control" type="date">
                                        </div>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <h3 class="mt-3">Passport</h3>
                            <div class="form-group">
                                <label for="passportNumber">Passport Number</label>
                                <input name="crewPassport-number" class="form-control" type="text" placeholder="Ex: 1234567" value="1234567">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="passportReleaseDate">Release Date</label>
                                    <input name="crewPassport-release_at" class="form-control" type="date" name="passportReleaseDate" value="2000-07-04">
                                </div>
                                <div class="form-group col-md">
                                    <label for="passportExpirationDate">Expiration Date</label>
                                    <input name="crewPassport-expired_at" class="form-control" type="date" name="passportExpirationDate" value="2000-07-11">
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <h3 class="mt-3">Bank Account</h3>
                            <div class="form-group">
                                <label for="bank">Bank</label>
                                <select name="crewBankAccount-bank_id" name="bank" id="bank" class="form-control">
                                    @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="AccountNumber">Account Number</label>
                                <input name="crewBankAccount-account_number" class="form-control" type="text" value="0123456789">
                            </div>
                            <div class="form-group">
                                <label for="OwnerName">Owner Name</label>
                                <input name="crewBankAccount-owner_name" class="form-control" type="text" value="DAVID AURELIUS TANDJUNG">
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-3">Others</h3>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="province">Province</label>
                            <input name="province" class="form-control" type="text" type="text" value="Bali" id="province">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="regency">Regency</label>
                            <input name="regency" class="form-control" type="text" type="text" value="Badung" id="regency">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="district">District</label>
                            <input name="district" class="form-control" type="text" type="text" value="Kuta Selatan" id="district">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="village">Village</label>
                            <input name="village" class="form-control" type="text" type="text" value="Benoa" id="village">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="postalCode">Postal Code</label>
                            <input name="postal_code" class="form-control" type="text" placeholder="Ex: 12345" value="12345">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="homeAddress">Home Address</label>
                        <input name="home_address" class="form-control" type="text" placeholder="Ex: Denpasar, Bali" value="North Pacific Ocean">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputReligion">Religion</label>
                            <select name="religion_id" class="form-control">
                                @foreach ($religions as $religion)
                                <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputBloodType">Blood Type</label>
                            <select name="blood_type_id" id="bloodType" class="form-control">
                                @foreach ($bloodTypes as $bloodType)
                                <option value="{{ $bloodType->id }}">{{ $bloodType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="familyCardNumber">Family Card Number</label>
                        <input name="family_card_number" class="form-control" type="text" value="0123456789123456">
                    </div>
                    <div class="form-group">
                        <label for="NPWP">NPWP Number</label>
                        <input name="npwp_card_number" class="form-control" type="text" value="0123456789123456">
                    </div>
                    <div class="form-group">
                        <label for="BPJSTK">BPJS-TK Number</label>
                        <input name="bpjstk_number" class="form-control" type="text" value="012345678912">
                    </div>
                    <div class="form-group">
                        <label for="BPJSKES">BPJS-Kes Number</label>
                        <input name="bpjskes_number" class="form-control" type="text" value="0123456789123">
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-10 ">
                            <h3>Family</h3>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-outline-primary btn-block" >+ Add</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Role</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">PhoneNumber</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 3; $i++)
                                <tr>
                                    <th scope="col">
                                        <select name="crewFamily{{ $i }}-role" id="familyRole" class="form-control">
                                            <option value="">-</option>
                                            <option value="Wife">Wife</option>
                                            <option value="Husband">Husband</option>
                                            <option value="Son">Son</option>
                                            <option value="Daughter">Daughter</option>
                                        </select>
                                    </th>
                                    <th scope="col">
                                        <input name="crewFamily{{ $i }}-name" class="form-control" type="text" placeholder="family member's fullname">
                                    </th>
                                    <th scope="col">
                                        <input name="crewFamily{{ $i }}-phone_number" class="form-control" type="text" placeholder="family member's phone number">
                                    </th>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Save Crew Record</button>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <img src="{{ asset('images/crew_default_image.jpeg') }}" class="rounded" alt="photo_profile">
                        <input type="file" class="form-control-file mt-3" id="photoProfile">
                      </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>