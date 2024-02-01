<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ isset($title) ? $title : '' }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Personal Trainer</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('storePersonalTrainer') }}" method="post">
                @csrf

             
    
                <div class="form-group">
                    <label for="full_name">Trainer Name</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" required="required" placeholder="Input Trainer's Name">
                </div>

                <div class="form-group">
                    <label for="phone_number">Trainer's Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" required="required" placeholder="Input Trainer's Phone Number">
                </div>

                <!-- Hidden input for Role -->
                <input type="hidden" name="role" value="Personal Trainer">

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control" required="required">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="address">Trainer's Address</label>
                    <input type="text" name="address" id="address" class="form-control" required="required" placeholder="Input Trainer's Address">
                </div>
    
                <div class="text-right">
                    <a href="{{ route('personal-trainer.index') }}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>