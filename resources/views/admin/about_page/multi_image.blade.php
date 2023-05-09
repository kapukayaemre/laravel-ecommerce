@extends('admin.admin_master')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title mb-4">Add Multi Image</h4>
                            <form action="{{ route('store.multi.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="short_title" class="col-sm-2 col-form-label">About Multi Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="multi_image[]" class="form-control" id="about_image" multiple>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}" alt="Card image cap">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-outline-success waves-effect waves-light" value="Add Multi Image">
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>

    {{-- Display updated images --}}
    <script>
        $(document).ready(function (){
            $('#about_image').change(function (e){
                var reader = new FileReader();
                reader.onload = function (e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
