<div>
    <div>
        <div class="row mt-3">
            <div class="col col-9">
                <h3>Certificate</h3>
            </div>
            <div class="col col-3">
                <div class="row">
                    <div class="col">
                        <button wire:click="decreaseCertificate" type="button" class="btn btn-outline-secondary btn-block" >-</button>
                    </div>
                    <div class="col align-middle">
                        <h4 class="text-center mb-0">{{ $certificate_count }}</h4>
                    </div>
                    <div class="col">
                        <button wire:click="increaseCertificate" type="button" class="btn btn-outline-secondary btn-block" >+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Certificate Name</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Expiration Date</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < $certificate_count; $i++)
                    <tr>
                        <th scope="col">
                            <div class="form-group">
                                <select name="certificates[{{ $i }}][certificate_id]" class="form-control" required>
                                    @foreach ($certificates as $certificate)
                                    <option value="{{ $certificate->id }}">{{ $certificate->name }}</option>
                                    @endforeach
                                </select>    
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="certificates[{{ $i }}][release_at]" class="form-control" type="date" required>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="certificates[{{ $i }}][expired_at]" class="form-control" type="date" required>
                            </div>
                        </th>
                    </tr> 
                    @endfor
                </tbody>
            </table>
        </div>
    </div>    
</div>
