@extends('administration.layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    About
@endsection
@push('style')
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropify/css/dropify.css') }}">
    <link rel="stylesheet" href="{{ asset('administration/assets2/bundles/plugins/dropzone/dropzone.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@endpush
@section('content')
    <div class="nk-content-body">
        <div class="components-preview wide-md mx-auto">
            <div class="nk-block-head nk-block-head-lg wide-sm">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Edit About</h2>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="row g-gs">
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <form action="{{ route('admin.update.about.image') }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Logo</label>
                                                <input type="file" name="image" class="form-file-input dropify"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-secondary">Change
                                                    Logo
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-4">
                                                @isset($about->image)
                                                    <img height="250" width="400"
                                                        src="{{ asset('/storage/logo/' . $about->image) }}">
                                                @endisset
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <hr>
                                <form action="{{ route('admin.update.about') }}" method="post">
                                    @method('post')
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Organization Name</label>
                                        <input type="text" value="{{ $about->name ?? 'none' }}" name="name"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" value="{{ $about->email ?? 'none' }}" name="email"
                                            class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input type="text" value="{{ $about->phone ?? 'none' }}" name="phone"
                                            class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Location</label>
                                        <input type="text" value="{{ $about->location ?? 'none' }}" name="location"
                                            class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-sm" name="description" required>{{ $about->description ?? 'none' }}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="form-label">Message</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control form-control-sm" name="welcome_message" placeholder="Write your message" required>{{ $about->welcome_message ?? 'none' }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group"><button type="submit" class="btn btn-secondary">Save
                                        </button></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('administration/assets/js/bundle0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/scripts0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/demo-settings0226.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('administration/assets/js/libs/datatable-btns0226.js?ver=3.1.2') }}"></script>

    <script src="{{ asset('administration/assets2/bundles/plugins/dropify/js/dropify.js') }}"></script> <!-- Dropify Plugin Js -->
    <script src="{{ asset('administration/assets2/bundles/plugins/dropzone/dropzone.js') }}"></script> <!-- Dropzone Plugin Js -->
    <script type="text/javascript">
        $(function() {
            $('.dropify').dropify();
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#employee_data').DataTable();
        });
    </script>
@endpush
