<div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="province">Province ({{ $provinces->count() }})</label>
            <select wire:model="province_id" name="province_id" id="selectProvince" class="form-control">
                @foreach ($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="regency">Regency ({{ $regencies->count() }})</label>
            <select wire:model="regency_id" name="regency_id" id="selectRegency" class="form-control" @if ($regencies->count() == 0) disabled @endif>
                @foreach ($regencies as $regency)
                <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="district">District ({{ $districts->count() }})</label>
            <select wire:model="district_id" name="district_id" id="selectDistrict" class="form-control" @if ($districts->count() == 0) disabled @endif>
                @foreach ($districts as $district)
                <option value="{{ $district->id }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="village">Village ({{ $villages->count() }})</label>
            <select wire:model="village_id" name="village_id" id="selectVillage" class="form-control" @if ($villages->count() == 0) disabled @endif>
                @foreach ($villages as $village)
                <option value="{{ $village->id }}">{{ $village->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="postalCode">Postal Code</label>
            <input name="postal_code" class="form-control" type="text" placeholder="Ex: 12345" @isset($crew) value="{{ $crew->postal_code }}" @endisset>
        </div>
    </div>
    <div class="form-group">
        <label for="homeAddress">Home Address</label>
        <input name="home_address" id="homeAddress" class="form-control" type="text" placeholder="Ex: Denpasar, Bali" @isset($crew) value="{{ $crew->home_address }}" @endisset>
    </div>
</div>
