<div class="modal-header">
    <div>
        <h5 class="modal-title" id="exampleModalLabel">
            Edit Info
        </h5>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form method="POST" action="{{ route('user_information_update',$user->id) }}">
        @csrf
        <div class="form-group mb-4">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group mb-4">
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
        </div>
        <div class="form-group mb-4">
            <label for="">CV link</label>
            <textarea type="text" class="form-control" name="cv_link" value="">{{ $user->cv_link }}</textarea>
        </div>
        <button class="btn btn-success">Submit</button>
    </form>
</div>
