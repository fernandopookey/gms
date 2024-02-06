<div class="row">
    <form action="{{ route('member.update', $member->id) }}" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
            @method('PUT')
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
                        <input type="text" name="name" value="{{ $member->name }}" class="form-control"
                            id="exampleFormControlInput1" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender</label>
                        <select name="gender" class="form-control" aria-label="Default select example" required>
                            {{-- <option disabled selected value> --}}
                            <option value="{{ $member->id }}">{{ $member->gender }}</option>
                            {{-- </option> --}}
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" value="{{ $member->phone_number }}"
                            class="form-control" id="exampleFormControlInput1" autocomplete="off" required>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary">
                            Address
                        </label>
                        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="6"
                            placeholder="Enter Address">{{ $member->address }}</textarea>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-primary">
                            Description
                        </label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="6"
                            placeholder="Enter Description">{{ $member->description }}</textarea>
                    </div>
                </div>
                <div class="col-xl-6">
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
            <button type="submit" class="btn btn-primary">Update</button>
            @if (Auth::user()->role == 'PT')
                <a href="{{ route('personal-trainer-index') }}" class="btn btn-secondary light">Cancel</a>
            @elseif (Auth::user()->role == 'CS')
                <a href="{{ route('customer-service-index') }}" class="btn btn-secondary light">Cancel</a>
            @elseif (Auth::user()->role == 'MEMBER')
                <a href="{{ route('member.index') }}" class="btn btn-secondary light">Cancel</a>
            @else
                <a href="{{ route('member.index') }}" class="btn btn-secondary light">Cancel</a>
            @endif
        </div>
    </form>
</div>
