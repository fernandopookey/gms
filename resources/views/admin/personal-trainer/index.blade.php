<!-- Content Wrapper. Contains page content -->
{{-- <div class="content-wrapper"> --}}
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ isset($title) ? $title : '' }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Personal Trainer</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

<div class="card">
    <div class="card-header text-right">
        <a href="{{ route('createPersonalTrainer') }}" class="btn btn-info mb-4" role="button">Add Trainer</a>
    </div>
    <div class="card-body shadow">
        <div class="table-responsive full-data">
            <table class="table-responsive-lg table display dataTablesCard student-tab dataTable"
            id="myTable">
        
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
        <table class="table table-hover mb-0">
    