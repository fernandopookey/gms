<div class="row">
    <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                            id="exampleFormControlInput1" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                            id="exampleFormControlInput1" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="text" name="password" value="{{ old('password') }}" class="form-control"
                            id="exampleFormControlInput1" autocomplete="off" required>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="role" class="form-label">User Role</label>
                        <select name="role" id="role" class="form-select form-control" required>
                            <option value="MEMBER" selected>Member</option>
                            <option value="PT">Personal Trainer</option>
                            <option value="CS">Customer Service</option>
                            <option value="ADMIN">Admin</option>
                        </select>
                    </div>
                </div>

                <div class="col-xl-6" id="memberFieldsGender">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select name="gender" class="form-control" aria-label="Default select example">
                            {{-- <option disabled selected value>
                                        <- Choose ->
                                    </option> --}}
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6" id="memberFieldsPhoneNumber">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control"
                            id="exampleFormControlInput1" autocomplete="off">
                    </div>
                </div>
                <div class="col-xl-6" id="memberFieldsAddress">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary">
                            Address
                        </label>
                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="6"
                            placeholder="Enter Address">{{ old('address') }}</textarea>
                    </div>
                </div>
                <div class="col-xl-6" id="memberFieldsDescription">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary">
                            Description
                        </label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="6"
                            placeholder="Enter Description">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="col-xl-6" id="memberFieldsPhoto">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Photo</label>
                        <input class="form-control" type="file" name="photos" onchange="loadFile(event)"
                            id="formFile">
                    </div>
                    <img id="output" class="img-fluid mt-2 mb-4" width="200" />
                </div>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('member.index') }}" class="btn btn-secondary light">Cancel</a>
        </div>
    </form>
</div>
