<div>
    <div class="row mt-3">
        <div class="col col-9">
            <h3>Licence</h3>
        </div>
        <div class="col col-3">
            <div class="row">
                <div class="col">
                    <button wire:click="decreaseLicence" type="button" class="btn btn-outline-secondary btn-block" >-</button>
                </div>
                <div class="col align-middle">
                    <h4 class="text-center mb-0">{{ $licence_count }}</h4>
                </div>
                <div class="col">
                    <button wire:click="increaseLicence" type="button" class="btn btn-outline-secondary btn-block" >+</button>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Licence Name</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Expiration Date</th>
                </tr>
            </thead>
            <tbody>
                @if ($mode == "edit")
                    @foreach ($crew->licences as $crew_licence )
                    <tr>
                        <th scope="col">
                            <div class="form-group">
                                <select name="licences[{{ $loop->index }}][licence_id]" class="form-control" required>
                                    @foreach ($licences as $licence)
                                    <option value="{{ $licence->id }}" @if($licence->id == $crew_licence->licence_id) selected @endif>{{ $licence->name }}</option>
                                    @endforeach
                                </select>    
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="licences[{{ $loop->index }}][release_at]" class="form-control" type="date" value="{{ $crew_licence->release_at }}" required>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="licences[{{ $loop->index }}][expired_at]" class="form-control" type="date" value="{{ $crew_licence->expired_at }}" required>
                            </div>
                        </th>
                    </tr> 
                    @endforeach
                    @for ($i = 0; $i < $licence_count - $crew->licences->count(); $i++)
                    <tr>
                        <th scope="col">
                            <div class="form-group">
                                <select name="licences[{{ $i + $crew->licences->count() }}][licence_id]" class="form-control" required>
                                    @foreach ($licences as $licence)
                                    <option value="{{ $licence->id }}">{{ $licence->name }}</option>
                                    @endforeach
                                </select>    
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="licences[{{ $i + $crew->licences->count() }}][release_at]" class="form-control" type="date" required>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="licences[{{ $i + $crew->licences->count() }}][expired_at]" class="form-control" type="date" required>
                            </div>
                        </th>
                    </tr>     
                    @endfor
                @elseif ($mode == "create")
                    @for ($i = 0; $i < $licence_count; $i++)
                    <tr>
                        <th scope="col">
                            <div class="form-group">
                                <select name="licences[{{ $i }}][licence_id]" class="form-control" required>
                                    @foreach ($licences as $licence)
                                    <option value="{{ $licence->id }}">{{ $licence->name }}</option>
                                    @endforeach
                                </select>    
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="licences[{{ $i }}][release_at]" class="form-control" type="date" value="2022-06-04" required>
                            </div>
                        </th>
                        <th scope="col">
                            <div class="form-group">
                                <input name="licences[{{ $i }}][expired_at]" class="form-control" type="date" value="2022-12-04" required>
                            </div>
                        </th>
                    </tr> 
                    @endfor
                @endif
            </tbody>
        </table>
    </div>
</div>
