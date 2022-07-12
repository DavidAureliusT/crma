<div>
    <div class="row mt-3">
        <div class="col-md-9">
            <h3>Family</h3>
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
                @for ($i = 0; $i < $family_count; $i++)
                <tr>
                    <th scope="col">
                        <select name="crew_family_members[{{ $i }}][role]" class="form-control" required>
                            <option value="">-</option>
                            <option value="Wife">Wife</option>
                            <option value="Husband">Husband</option>
                            <option value="Son">Son</option>
                            <option value="Daughter">Daughter</option>
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
            </tbody>
        </table>
    </div>
</div>
