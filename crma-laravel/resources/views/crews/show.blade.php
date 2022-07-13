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
                    <label for="id_card_number">ID Card Number</label>
                    <input name="id_card_number" id="id_card_number" class="form-control" type="text" value="{{ $crew->id_card_number }}" readonly>
                </div>
                <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input name="fullname" id="fullname" class="form-control" type="text" value="{{ $crew->fullname }}" readonly>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input name="gender" id="gender" class="form-control" type="text" value="{{ $crew->gender_id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input name="birthdate" id="birthdate" type="date" class="form-control" value="{{ $crew->birthdate }}" readonly>
                </div>
                <div class="form-group">
                    <label for="birthplace">Birthplace</label>
                    <input name="birhtplace" id="birthplace" class="form-control" type="text" value="{{ $crew->birthplace }}" readonly>
                    <small class="form-text text-muted">*Base on Crew ID Card (KTP)</small>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input name="phone_number" id="phone_number" class="form-control" type="text" value="{{ $crew->phone_number }}" readonly>
                </div>
                <h3 class="mt-3">Medical Records</h3>
                <div class="row">
                    @foreach ($crew->medical_records as $medical_record)
                    <div class="col">
                        <h5>{{ $medical_record->type }}</h5>
                        <p>Create:{{ $medical_record->created_at }}</p>
                        <p>Expr.:{{ $medical_record->expired_at }}</p>
                    </div>
                    @endforeach
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
                            @foreach ($crew->licences as $licence)
                            <tr>
                                <th scope="col">{{ $licence->licence_id }}</th>
                                <th scope="col">{{ $licence->licence_id }}</th>
                                <th scope="col">{{ $licence->created_at }}</th>
                                <th scope="col">{{ $licence->expired_at }}</th>
                            </tr>
                            @endforeach
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
                            @foreach ($crew->certificates as $certificate)
                            <tr>
                                <th scope="col">{{ $certificate->certificate_id }}</th>
                                <th scope="col">{{ $certificate->certificate_id }}</th>
                                <th scope="col">{{ $certificate->created_at }}</th>
                                <th scope="col">{{ $certificate->expired_at }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3 class="mt-3">Passport</h3>
                        <div class="form-group">
                            <label for="passport_number">Passport Number</label>
                            <input name="passport[number]" id="passport_number" class="form-control" type="text" value="{{ $crew->passport->number }}" readonly>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="passport_release_at">Release Date</label>
                                <input name="passport[release_at]" id="passport_release_at" class="form-control" type="date" name="passportReleaseDate" value="{{ $crew->passport->release_at }}" readonly>
                            </div>
                            <div class="form-group col-md">
                                <label for="passport_expired_at">Expiration Date</label>
                                <input name="passport[expired_at]" id="passport_expired_at" class="form-control" type="date" name="passportExpirationDate" value="{{ $crew->passport->expired_at }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <h3 class="mt-3">Bank Account</h3>
                        <div class="form-group">
                            <label for="bank_bank_code">Bank</label>
                            <input name="bank[bank_code]" id="bank_bank_code" class="form-control" type="text" value="{{ $crew->bank_account->bank_code }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bank_account_number">Account Number</label>
                            <input name="bank[account_number]" id="bank_account_number" class="form-control" type="text" value="{{ $crew->bank_account->account_number }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="bank_owner_name">Owner Name</label>
                            <input name="bank[owner_name]" id="bank_owner_name" class="form-control" type="text" value="{{ $crew->bank_account->owner_name }}" readonly>
                        </div>
                    </div>
                </div>
                <h3 class="mt-3">Others</h3>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="province">Province</label>
                        <input type="text" name="province" id="province" class="form-control" value="{{ $crew->province_id }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="regency">Regency</label>
                        <input type="text" name="regency" id="regency" class="form-control" value="{{ $crew->regency_id }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="district">District</label>
                        <input type="text" name="district" id="district" class="form-control" value="{{ $crew->district_id }}" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="village">Village</label>
                        <input type="text" name="village" id="village" class="form-control" value="{{ $crew->village_id }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" name="postal_code" id="postal_code" class="form-control" value="{{ $crew->postal_code }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="home_address">Home Address</label>
                    <input type="text" name="home_address" id="home_address" class="form-control" value="{{ $crew->home_address }}" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="religion">Religion</label>
                        <input type="text" name="religion" id="religion" class="form-control" value="{{ $crew->religion_id }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="blood_type">Blood Type</label>
                        <input type="text" name="blood_type" id="blood_type" class="form-control" value="{{ $crew->blood_type->name }}" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="family_card_number">Family Card Number</label>
                    <input type="text" name="family_card_number" id="family_card_number" class="form-control" value="{{ $crew->family_card_number }}" readonly>
                </div>
                <div class="form-group">
                    <label for="npwp_card_number">NPWP Card Number</label>
                    <input type="text" name="npwp_card_number" id="npwp_card_number" class="form-control" value="{{ $crew->npwp_card_number }}" readonly>
                </div>
                <div class="form-group">
                    <label for="bpjstk_number">BPJS-TK Number</label>
                    <input type="text" name="bpjstk_number" id="bpjstk_number" class="form-control" value="{{ $crew->bpjstk_number }}" readonly>
                </div>
                <div class="form-group">
                    <label for="bpjskes_number">BPJS-Kes Number</label>
                    <input type="text" name="bpjskes_number" id="bpjskes_number" class="form-control" value="{{ $crew->bpjskes_number }}" readonly>
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
                            @foreach ($crew->family_members as $family_member)
                            <tr>
                                <th scope="col">{{ $family_member->role }}</th>
                                <th scope="col">{{ $family_member->name }}</th>
                                <th scope="col">{{ $family_member->phone_number }}</th>
                                <th scope="col"></th>
                            </tr>
                            @endforeach
                            @for ($i = 0; $i < 3; $i++)
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