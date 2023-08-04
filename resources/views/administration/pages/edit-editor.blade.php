@extends('administration.layout.master', [($bodyClass = 'nk-body bg-lighter npc-default has-sidebar')])
@section('pageName')
    Edit Editor
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
                    <h2 class="nk-block-title fw-normal">Edit Editor</h2>
                </div>
            </div>
            <div class="nk-block nk-block-lg">
                <div class="row g-gs">
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <form action="{{ route('admin.update.editor.image', $editor->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('post')
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Editor's
                                                    Image</label>
                                                <input type="file" name="image" class="form-file-input dropify"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn  btn-secondary">Change
                                                    Image
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mt-4">
                                                <img height="250" width="400"
                                                    src="{{ asset('/storage/editors/' . $editor->image) }}">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>

                                <form action="{{ route('admin.update.editor', $editor->id) }}" method="POST">
                                    @method('post')
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" value="{{ $editor->name }}" name="name"
                                            class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Institution</label>
                                        <input type="text" value="{{ $editor->institution }}" name="institution"
                                            class="form-control" required>
                                    </div>
                                    <div class="form-group"><label class="form-label">Designation</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2 select2-hidden-accessible"
                                                data-select2-id="3" aria-hidden="true" name="designation_id" required>
                                                <option value="default_option" data-select2-id="5">Select Designation
                                                </option>
                                                @foreach ($designations as $item)
                                                    <option {{ $item->id == $editor->designation_id ? 'selected' : '' }}
                                                        value="{{ $item->id }}">
                                                        {{ $item->designation }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"><button type="submit" class="btn  btn-secondary">Save
                                        </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-bordered h-100">
                            <div class="card-inner">
                                <div class="nk-block-head-content mb-5">
                                    Editor Table</div>
                                <div class="table-responsive">
                                    <table id="employee_data" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Institution</td>
                                                <td>Designation</td>
                                                <td>Image</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($editors as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->institution }}</td>
                                                    <td>{{ $item->designation->designation }}</td>
                                                    <td> <img width="200" height="100"
                                                            src="{{ asset('/storage/editors/' . $item->image) }}">
                                                    </td>
                                                    <td>
                                                        <div class="dropdown"><a href="#" class="btn btn-secondary"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><span>Action
                                                                </span><em class="icon ni ni-chevron-down"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-auto mt-1"
                                                                style="">
                                                                <ul class="link-list-plain">
                                                                    <li><a
                                                                            href="{{ route('admin.edit.editor', $item->id) }}">Edit</a>
                                                                    </li>
                                                                    <li><a
                                                                            href="{{ route('admin.delete.editor', $item->id) }}">Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @empty
                                                    No data found
                                                </tr>
                                            @endforelse

                                        </tbody>
                                    </table>
                                </div>
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
