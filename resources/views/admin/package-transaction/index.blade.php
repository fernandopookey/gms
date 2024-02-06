{{-- <div class="row">
    <div class="col-xl-12">
        <form action="#" method="POST" id="deleteMembersForm">
            @csrf

            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('member.create') }}" class="btn btn-info mb-4">Add New</a>
                </div>
                <div class="card-body shadow">
                    <div class="table-responsive full-data"> --}}
<div class="row">
    <div class="col-lg-12">
        <div class="card-header text-right">
            <a href="{{ route('member.create') }}" class="btn btn-primary" role="button">
                <i class="fas fa-file-medical"></i> <span style="margin-left: 5px;">Tambah Member</span>
            </a>
        </div>
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
                                    <img src="{{ Storage::url($item->photos ?? '') }}" class="lazyload" width="150"
                                        alt="image">
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
                            <a href="{{ route('editMember', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            {{-- <a href="{{ route('member.edit', ['id' => $item->id]) }}"
                                                class="btn btn-warning" role="button">Edit</a> --}}
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
