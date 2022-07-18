<div>
    <div class="row mt-3">
        <div class="col-md-9">
            <h3>Family</h3><span>{{ $mode }}</span>
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col">
                    <button wire:click="decreaseFamilyMember" type="button" class="btn btn-outline-secondary btn-block" >-</button>
                </div>
                <div class="col align-middle">
                    <h4 class="text-center mb-0">{{ $family_count }}</h4>
                </div>
                <div class="col">
                    <button wire:click="increaseFamilyMember" type="button" class="btn btn-outline-secondary btn-block" >+</button>
                </div>
            </div>
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
                @if ($mode == "edit")
                    @foreach ($crew->family_members as $crew_family_member)
                    <tr>
                        <th scope="col">
                            <select name="crew_family_members[{{ $loop->index }}][role]" class="form-control" required>
                                <option value="">-</option>
                                @foreach ($family_roles as $role)
                                <option value="{{ $role }}" @if($crew_family_member->role == $role) selected @endif>{{ $role }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th scope="col">
                            <input name="crew_family_members[{{ $loop->index }}][name]" class="form-control" type="text" placeholder="family member's fullname" value="{{ $crew_family_member->name }}" required>
                        </th>
                        <th scope="col">
                            <input name="crew_family_members[{{ $loop->index }}][phone_number]" class="form-control" type="text" placeholder="family member's phone number" value="{{ $crew_family_member->phone_number }}" required>
                        </th>
                    </tr>
                    @endforeach
                    @for ($i = 0; $i < $family_count - $crew->family_members->count(); $i++)
                    <tr>
                        <th scope="col">
                            <select name="crew_family_members[{{ $i + $crew->family_members->count() }}][role]" class="form-control" required>
                                <option value="">-</option>
                                @foreach ($family_roles as $role)
                                <option value="{{ $role }}" >{{ $role }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th scope="col">
                            <input name="crew_family_members[{{ $i + $crew->family_members->count() }}][name]" class="form-control" type="text" placeholder="family member's fullname" required>
                        </th>
                        <th scope="col">
                            <input name="crew_family_members[{{ $i + $crew->family_members->count() }}][phone_number]" class="form-control" type="text" placeholder="family member's phone number" required>
                        </th>
                    </tr>
                    @endfor
                @elseif($mode == "create")
                    @for ($i = 0; $i < $family_count; $i++)
                    <tr>
                        <th scope="col">
                            <select name="crew_family_members[{{ $i }}][role]" class="form-control" required>
                                <option value="">-</option>
                                @foreach ($family_roles as $role)
                                <option value="{{ $role }}" >{{ $role }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th scope="col">
                            <input name="crew_family_members[{{ $i }}][name]" class="form-control" type="text" placeholder="family member's fullname" required>
                        </th>
                        <th scope="col">
                            <input name="crew_family_members[{{ $i }}][phone_number]" class="form-control" type="text" placeholder="family member's phone number" required>
                        </th>
                    </tr>
                    @endfor
                @endif
            </tbody>
        </table>
    </div>
</div>
