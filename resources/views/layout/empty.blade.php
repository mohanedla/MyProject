<form class="form form-horizontal" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="">
    <div class="form-body">
        <div class="row">
            <div class="col-md-4">
                <label>Full Name</label>
            </div>
            <div class="col-md-8">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <input type="text" class="form-control"
                            placeholder="Name" id="first-name-icon" name="fullName" value="">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <label>Photo</label>
            </div>
            <div class="col-md-8">
                <div class="form-group has-icon-lefts">
                    <div class="position-relative">
                        <input type="file" class="form-control"
                        placeholder="Name" id="first-name-icon" name="image"/>
                        {{-- <div class="form-control-icon avatar avatar.avatar-im">
                            <img src="{{ URL::to('/images/'. $data[0]->avatar) }}">
                        </div> --}}
                        <input type="hidden" name="hidden_image" value="">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <label>Email Address</label>
            </div>
            <div class="col-md-8">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <input type="email" class="form-control"
                            placeholder="Email" id="first-name-icon" name="email" value="">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label>Mobile Number</label>
            </div>
            <div class="col-md-8">
                <div class="form-group has-icon-left">
                    <div class="position-relative">
                        <input type="number" class="form-control"
                            placeholder="Mobile" name="phone_number" value="">
                        <div class="form-control-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <label>Status</label>
            </div>
            <div class="col-md-8">
                <div class="form-group position-relative has-icon-left mb-4">
                    <fieldset class="form-group">
                        <select class="form-select" name="status" id="status">
                            {{-- <option value="{{ $data[0]->status }}" {{ ( $data[0]->status == $data[0]->status) ? 'selected' : ''}}>
                                {{ $data[0]->status }}
                            </option>
                            @foreach ($userStatus as $key => $value)
                            <option value="{{ $value->type_name }}"> {{ $value->type_name }}</option>
                            @endforeach --}}
                        </select>
                        <div class="form-control-icon">
                            <i class="bi bi-bag-check"></i>
                        </div>
                    </fieldset>
                </div>
            </div>


            <div class="col-md-4">
                <label>Role Name</label>
            </div>
            <div class="col-md-8">
                <div class="form-group position-relative has-icon-left mb-4">
                    <fieldset class="form-group">
                        <select class="form-select" name="role_name" id="role_name">
                            {{-- <option value="{{ $data[0]->role_name }}" {{ ( $data[0]->role_name == $data[0]->role_name) ? 'selected' : ''}}>
                                {{ $data[0]->role_name }}
                            </option>
                            @foreach ($roleName as $key => $value)
                            <option value="{{ $value->role_type }}"> {{ $value->role_type }}</option>
                            @endforeach --}}
                        </select>
                        <div class="form-control-icon">
                            <i class="bi bi-bag-check"></i>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-end">
                <button type="submit"
                    class="btn btn-primary me-1 mb-1">Update</button>
                <a  href=""
                    class="btn btn-light-secondary me-1 mb-1">Back</a>
            </div>
        </div>
    </div>
</form>
