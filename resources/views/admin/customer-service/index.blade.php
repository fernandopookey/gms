<div class="row">
    <div class="col-lg-12">
        <div class="card-header text-right">
            <a href="{{ route('member.create') }}" class="btn btn-primary" role="button">
                <i class="fas fa-file-medical"></i> <span style="margin-left: 5px;">Tambah Member</span>
            </a>
        </div>
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
                    <table id="example" class="table table-hover table-bordered" style="width:100%">
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
                                                <img src="{{ asset('default.png') }}" class="img-fluid" alt="">
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
                                        {{-- <a href="{{ route('member.edit', ['id' => $item->id]) }}"
                                                class="btn btn-warning" role="button">Edit</a> --}}
                                        <a href="{{ route('editMember', $item->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a onclick="confirmDelete(this)"
                                            data-url="{{ route('deleteMember', ['id' => $item->id]) }}"
                                            class="btn btn-danger btn-sm" role="button">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
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
    </div>
