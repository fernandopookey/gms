<div class="row">
    <div class="col-xl-12">
        <form action="#" method="POST" id="deleteMembersForm">
            @csrf
            @method('delete')
            
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('member.create') }}" class="btn btn-info mb-4">Add New</a>
                </div>
                <div class="card-body shadow">
                    <div class="table-responsive full-data">
                        <table class="table-responsive-lg table display dataTablesCard student-tab dataTable"
                            id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Member Name</th>
                                    <th>Member Code</th>
                                    <th>gender</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Staff</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $item)
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
                                            <h6>{{ $item->full_name }}</h6>
                                        </td>
                                        <td>
                                            <h6>{{ $item->member_code }}</h6>
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
                                            <h6>{{ $item->users->name }}</h6>
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
            </div>
        </form>
    </div>
</div>



