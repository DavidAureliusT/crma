<!DOCTYPE html>
<html lang="en">
<head>
    @livewireStyles()
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
                        <label for="id_card_number">ID Card Number</label>
                        <input name="id_card_number" id="id_card_number" class="form-control" type="text" placeholder="Ex: 3333444466667777" value="3333444466667777" required>
                    </div>
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input name="fullname" id="fullname" class="form-control" type="text" placeholder="Type crew's fullname" value="Captain Jack Sparrow" required>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender_id" id="gender" class="custom-select" required>
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <input name="birthdate" id="birthdate" type="date" class="form-control" value="2000-03-07" required>
                    </div>
                    <div class="form-group">
                        <label for="birthplace">Birthplace</label>
                        <input name="birhtplace" id="birthplace" class="form-control" type="text" placeholder="Ex: Denpasar, Bali" value="North Pacific Ocean" required>
                        <small class="form-text text-muted">*Base on Crew ID Card (KTP)</small>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input name="phone_number" id="phone_number" class="form-control" type="text" placeholder="Ex: 081234567891" value="081288756632" required>
                    </div>
                    <h3>Medical Records</h3>
                    <h5>MCU</h5>
                    <div class="form-group row">
                        <label for="medical_records_mcu_release_at" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[mcu][release_at]" id="medical_records_mcu_release_at" type="date" class="form-control" value="2000-07-04">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="medical_records_mcu_expired_at" class="col-sm-3 col-form-label">Expiration Date.:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[mcu][expired_at]" id="medical_records_mcu_expired_at" type="date" class="form-control" value="2000-07-11">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <h5>PCR</h5>
                    <div class="form-group row">
                        <label for="medical_records_pcr_release_at" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[pcr][release_at]" id="medical_records_pcr_release_at" type="date" class="form-control" value="2000-07-04">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="medical_records_pcr_expired_at" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[pcr][expired_at]" id="medical_records_pcr_expired_at" type="date" class="form-control" value="2000-07-11">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <h5>Covid Vaccine 1</h5>
                    <div class="form-group row">
                        <label for="medical_records_cv1_release_at" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[cv1][release_at]" id="medical_records_cv1_release_at" type="date" class="form-control" value="2000-07-04">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="medical_records_cv1_expired_at" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[cv1][expired_at]" id="medical_records_cv1_expired_at" type="date" class="form-control" value="2000-07-11">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <h5>Covid Vaccine 2</h5>
                    <div class="form-group row">
                        <label for="medical_records_cv2_release_at" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[cv2][release_at]" id="medical_records_cv2_release_at" type="date" class="form-control" value="2000-07-04">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="medical_records_cv2_expired_at" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[cv2][expired_at]" id="medical_records_cv2_expired_at" type="date" class="form-control" value="2000-07-11">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <h5>Covid Vaccine 3</h5>
                    <div class="form-group row">
                        <label for="medical_records_cv3_release_at" class="col-sm-3 col-form-label">Release Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[cv3][release_at]" id="medical_records_cv3_release_at" type="date" class="form-control" value="2000-07-04">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="medical_records_cv3_expired_at" class="col-sm-3 col-form-label">Expiration Date:</label>
                        <div class="col-sm-9">
                            <input name="medical_records[cv3][expired_at]" id="medical_records_cv3_expired_at" type="date" class="form-control" value="2000-07-11">
                            <small class="form-text text-muted">*Optional</small>
                        </div>
                    </div>
                    <livewire:licence-table-form />
                    <livewire:certificate-table-form />
                    <div class="row">
                        <div class="col-md">
                            <h3 class="mt-3">Passport</h3>
                            <div class="form-group">
                                <label for="passport_number">Passport Number</label>
                                <input name="passport[number]" id="passport_number" class="form-control" type="text" placeholder="Ex: 1234567" value="1234567">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md">
                                    <label for="passport_release_at">Release Date</label>
                                    <input name="passport[release_at]" id="passport_release_at" class="form-control" type="date" name="passportReleaseDate" value="2000-07-04">
                                </div>
                                <div class="form-group col-md">
                                    <label for="passport_expired_at">Expiration Date</label>
                                    <input name="passport[expired_at]" id="passport_expired_at" class="form-control" type="date" name="passportExpirationDate" value="2000-07-11">
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <h3 class="mt-3">Bank Account</h3>
                            <div class="form-group">
                                <label for="bank_bank_code">Bank</label>
                                <select name="bank[bank_code]" id="bank_bank_code" class="form-control">
                                    @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="bank_account_number">Account Number</label>
                                <input name="bank[account_number]" id="bank_account_number" class="form-control" type="text" value="0123456789">
                            </div>
                            <div class="form-group">
                                <label for="bank_owner_name">Owner Name</label>
                                <input name="bank[owner_name]" id="bank_owner_name" class="form-control" type="text" value="DAVID AURELIUS TANDJUNG">
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-3">Others</h3>
                    <livewire:address-form />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="religion">Religion</label>
                            <select name="religion_id" id="religion" class="form-control">
                                @foreach ($religions as $religion)
                                <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="blood_type">Blood Type</label>
                            <select name="blood_type_id" id="blood_type" class="form-control">
                                @foreach ($bloodTypes as $bloodType)
                                <option value="{{ $bloodType->id }}">{{ $bloodType->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="family_card_number">Family Card Number</label>
                        <input name="family_card_number" id="family_card_number" class="form-control" type="text" value="0123456789123456">
                    </div>
                    <div class="form-group">
                        <label for="npwp_card_number">NPWP Number</label>
                        <input name="npwp_card_number" id="npwp_card_number" class="form-control" type="text" value="0123456789123456">
                    </div>
                    <div class="form-group">
                        <label for="bpjstk_number">BPJS-TK Number</label>
                        <input name="bpjstk_number" id="bpjstk_number" class="form-control" type="text" value="012345678912">
                    </div>
                    <div class="form-group">
                        <label for="bpjskes_number">BPJS-Kes Number</label>
                        <input name="bpjskes_number" id="bpjskes_number" class="form-control" type="text" value="0123456789123">
                    </div>
                    <livewire:family-form /> 
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
    @livewireScripts()
</body>
</html>