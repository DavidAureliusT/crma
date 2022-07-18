@extends("layouts.main")

@section("Content")
<div class="container">
    <h1>Edit Detail Crew</h1>
    <form action="/crews/{{ $crew->id_card_number }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="row mt-3 mb-5">
            <div class="col-md-9">
                <h3>Profile</h3>
                <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input name="fullname" id="fullname" class="form-control" type="text" placeholder="Type crew's fullname" value="{{ $crew->fullname }}" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender_id" id="gender" class="custom-select" required>
                        @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}" @if($gender->id == $crew->gender_id) selected @endif>{{ $gender->gender }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birthdate</label>
                    <input name="birthdate" id="birthdate" type="date" class="form-control" value="{{ $crew->birthdate }}" required>
                </div>
                <div class="form-group">
                    <label for="birthplace">Birthplace</label>
                    <input name="birthplace" id="birthplace" class="form-control" type="text" placeholder="Ex: Denpasar, Bali" value="{{ $crew->birthplace }}" required>
                    <small class="form-text text-muted">*Base on Crew ID Card (KTP)</small>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input name="phone_number" id="phone_number" class="form-control" type="text" placeholder="Ex: 081234567891" value="{{ $crew->phone_number }}" required>
                </div>
                <h3>Medical Records</h3>
                @foreach ($crew->medical_records as $medical_record)
                <h5>{{ $medical_record->type }}</h5>
                <div class="form-group row">
                    <label for="medical_records_{{ $medical_record->type }}_release_at" class="col-sm-3 col-form-label">Release Date:</label>
                    <div class="col-sm-9">
                        <input name="medical_records[{{ $medical_record->type }}][release_at]" id="medical_records_{{ $medical_record->type }}_release_at" type="date" class="form-control" value="{{ $medical_record->release_at }}">
                        <small class="form-text text-muted">*Optional</small>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="medical_records_{{ $medical_record->type }}_expired_at" class="col-sm-3 col-form-label">Expiration Date.:</label>
                    <div class="col-sm-9">
                        <input name="medical_records[{{ $medical_record->type }}][expired_at]" id="medical_records_{{ $medical_record->type }}_expired_at" type="date" class="form-control" value="{{ $medical_record->expired_at }}">
                        <small class="form-text text-muted">*Optional</small>
                    </div>
                </div>
                @endforeach
                <livewire:licence-table-form :crew="$crew"/>
                <livewire:certificate-table-form :crew="$crew"/>
                <div class="row">
                    <div class="col-md">
                        <h3 class="mt-3">Passport</h3>
                        <div class="form-group">
                            <label for="passport_number">Passport Number</label>
                            <input name="passport[number]" id="passport_number" class="form-control" type="text" value="{{ $crew->passport->number }}" >
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md">
                                <label for="passport_release_at">Release Date</label>
                                <input name="passport[release_at]" id="passport_release_at" class="form-control" type="date" name="passportReleaseDate" value="{{ $crew->passport->release_at }}" >
                            </div>
                            <div class="form-group col-md">
                                <label for="passport_expired_at">Expiration Date</label>
                                <input name="passport[expired_at]" id="passport_expired_at" class="form-control" type="date" name="passportExpirationDate" value="{{ $crew->passport->expired_at }}" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <h3 class="mt-3">Bank Account</h3>
                        <div class="form-group">
                            <label for="bank_bank_code">Bank</label>
                            <select name="bank[bank_code]" id="bank_bank_code" class="form-control">
                                @foreach ($banks as $bank)
                                <option value="{{ $bank->id }}" @if($bank->id == $crew->bank_account->bank_code) selected @endif>{{ $bank->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bank_account_number">Account Number</label>
                            <input name="bank[account_number]" id="bank_account_number" class="form-control" type="text" value="{{ $crew->bank_account->account_number }}" >
                        </div>
                        <div class="form-group">
                            <label for="bank_owner_name">Owner Name</label>
                            <input name="bank[owner_name]" id="bank_owner_name" class="form-control" type="text" value="{{ $crew->bank_account->owner_name }}" >
                        </div>
                    </div>
                </div>
                <h3 class="mt-3">Others</h3>
                <livewire:address-form :crew="$crew"/>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="religion">Religion</label>
                        <select name="religion_id" id="religion" class="form-control">
                            @foreach ($religions as $religion)
                            <option value="{{ $religion->id }}" @if($religion->id == $crew->religion_id) selected @endif>{{ $religion->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="blood_type">Blood Type</label>
                        <select name="blood_type_id" id="blood_type" class="form-control">
                            @foreach ($bloodTypes as $bloodType)
                            <option value="{{ $bloodType->id }}" @if($bloodType->id == $crew->blood_type_id) selected @endif>{{ $bloodType->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="family_card_number">Family Card Number</label>
                    <input name="family_card_number" id="family_card_number" class="form-control" type="text" value="{{ $crew->family_card_number }}">
                </div>
                <div class="form-group">
                    <label for="npwp_card_number">NPWP Number</label>
                    <input name="npwp_card_number" id="npwp_card_number" class="form-control" type="text" value="{{ $crew->npwp_card_number }}">
                </div>
                <div class="form-group">
                    <label for="bpjstk_number">BPJS-TK Number</label>
                    <input name="bpjstk_number" id="bpjstk_number" class="form-control" type="text" value="{{ $crew->bpjstk_number }}">
                </div>
                <div class="form-group">
                    <label for="bpjskes_number">BPJS-Kes Number</label>
                    <input name="bpjskes_number" id="bpjskes_number" class="form-control" type="text" value="{{ $crew->bpjskes_number }}">
                </div>
                <livewire:family-form :crew="$crew"/> 
                <button type="submit" class="btn btn-success btn-block">Update Crew Record</button>
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
@endsection