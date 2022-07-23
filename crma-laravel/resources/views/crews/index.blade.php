@extends("layouts.master")

@section("Content")
<div class="containe-fluid">
    <h1>Crews</h1>
    <p>List of Crew in ENL</p>
    <a class="btn btn-outline-primary btn-sm" href="/crews/create" role="button">New Crew</a>
    <div class="table-responsive mt-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Crew Name</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($crews as $crew)
                <tr>
                    <th scope="col">
                        <a href="/crews/{{ $crew->id_card_number }}">
                            <i class="bi bi-person-badge"></i><span> {{ $crew->fullname }}</span>
                        </a>
                    </th>
                    <th scope="col">Available</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection