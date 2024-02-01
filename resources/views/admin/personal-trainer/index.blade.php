
<div class="card">
    <div class="card-header text-right">
        <a href="{{ route('createPersonalTrainer') }}" class="btn btn-primary" role="button">Add Trainer</a>
    </div>
    <div class="card-body">
        <table class="table table-hover mb-0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Trainer Name</th>
                    <th>Phone No.</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($personal_trainers as $personal_trainer)
                <tr>
                    <td> {{ $loop->index + 1 }}</td>
                    <td> {{ $personal_trainer->full_name }}</td>
                    <td> {{ $personal_trainer->phone_number }}</td>
                    <td> {{ $personal_trainer->gender }}</td>
                    <td> {{ $personal_trainer->address }}</td>
                    <td>
                        {{-- <a href="{{route('editPersonalTrainer', ['id' => $personal_trainer->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a> --}}
                        <a href="{{ route('personal-trainer.edit', ['id' => $personal_trainer->id]) }}" class="btn btn-warning btn-sm" role="button">Edit</a>
                        <a href="{{ route('deletePersonalTrainer', ['id' => $personal_trainer->id])}}" class="btn btn-danger btn-sm" role="button">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>