<<<<<<< HEAD

=======
<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <form action="#" method="POST" id="deleteMembersForm">
                @csrf
                {{-- @method('delete') --}}
                <div class="col-xl-12">
                    <div class="page-title flex-wrap justify-content-between">
                        {{-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-lg">+ New Member</button> --}}
                        <a href="{{ route('member.create') }}" class="btn btn-info mb-4">Add New</a>
                        {{-- <a href="{{ route('member-report') }}" target="_blank" class="btn btn-info">Print PDF</a> --}}
                    </div>
                </div>
                <!--column-->
                <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="table-responsive full-data">
                        <table class="table-responsive-lg table display dataTablesCard student-tab dataTable"
                            id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Member Name</th>
                                    <th>gender</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="trans-list">
                                                @if ($item->count())
                                                    <img src="{{ asset($item->photos ?? '') }}" class="lazyload"
                                                        width="150" alt="image">
                                                @else
                                                    <img src="{{ asset('default.png') }}" class="img-fluid"
                                                        alt="">
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <h6>{{ $item->name }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $item->gender }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $item->phone_number }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $item->address }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $item->description }}</h6>
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('member.edit', ['id' => $item->id]) }}"
                                                class="btn btn-warning btn-sm" role="button">Edit</a> --}}
                                            <a href="{{ route('member.edit', ['id' => $item->id]) }}"
                                                class="btn btn-warning" role="button">Edit</a>
                                            <a onclick="confirmDelete(this)"
                                                data-url="{{ route('deleteMember', ['id' => $item->id]) }}"
                                                class="btn btn-danger btn-sm" role="button">Hapus</a>
                                            {{-- <a onclick="confirmDelete(this)"
                                                data-url="{{ route('member.destroy', ['id' => $item->id]) }}"
                                                class="btn btn-danger btn-sm" role="button">Hapus</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
            <!--/column-->
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
    <!-- /.content-header -->
>>>>>>> 8b1b25cc4006a8c21156f283a99032982045a288
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
>>>>>>> 73cf6c69eb5d1a1fd51edb67521cad4d3a446a98
