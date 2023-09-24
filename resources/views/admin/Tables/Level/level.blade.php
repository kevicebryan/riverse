@extends('admin.layouts.main')

@section('admin.information')
    <div class="row">
        <div class="col-12">
            <!-- Card -->
            <div class="card">
                <!-- /.Card Body-->
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Id</dt>
                        <dd class="col-sm-8">{{ $level->id }}</dd>

                        <dt class="col-sm-4">Name</dt>
                        <dd class="col-sm-8">{{ $level->name }}</dd>

                        <dt class="col-sm-4">Maximum Experience Point</dt>
                        <dd class="col-sm-8">{{ $level->maximumExperiencePoint }}</dd>

                        <dt class="col-sm-4">Medal Image Url</dt>
                        <dd class="col-sm-8">{{ $level->medalImageUrl !== null ? $level->medalImageUrl : '-' }}</dd>

                        <dt class="col-sm-4">Slug</dt>
                        <dd class="col-sm-8">{{ $level->slug }}</dd>

                        <dt class="col-sm-4">Created At</dt>
                        <dd class="col-sm-8">{{ $level->created_at }}</dd>

                        <dt class="col-sm-4">Updated At</dt>
                        <dd class="col-sm-8">{{ $level->updated_at }}</dd>

                        <dt class="col-sm-4">Deleted At</dt>
                        <dd class="col-sm-8">
                            {{ $level->deleted_at !== null ? $level->deleted_at : '-' }}</dd>
                    </dl>
                </div>
                <!-- /.card-body -->
                <!-- Card Footer -->
                <div class="card-footer">
                    <a href="{{ url()->previous() }}" class="btn btn-default">
                        <i class="fas fa-angle-left">
                        </i>
                        Back
                    </a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
