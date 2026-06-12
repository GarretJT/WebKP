@extends('layouts.admin')

@section('title', 'Create Article')

@section('breadcrumbs', 'Articles')

@section('second-breadcrumb')
    <li>Create</li>
@endsection

@section('css')
    <script src="/templateEditor/ckeditor/ckeditor.js"></script>
@endsection

@section('title', 'Create Article')

@section('breadcrumbs', 'Articles')

@section('second-breadcrumb')
    <li>Create</li>
@endsection

@section('css')
    <script src="/templateEditor/ckeditor/ckeditor.js"></script>
    <style>
        .required-label::after {
            content: " *";
            color: red;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <h3 align="center"></h3>
                    </div>
                    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-10">
                            {{-- Title --}}
                            <div class="mb-4">
                                <label for="title" class="font-weight-bold required-label">Judul <span
                                        style="color: red">*</label>
                                <input type="text" name="title" placeholder="Article Title"
                                    class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}"
                                    value="{{ old('title') }}" required>
                                @if ($errors->first('title'))
                                    <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                                @endif
                            </div>

                            {{-- Category --}}
                            <div class="mb-3">
                                <label for="categories" class="font-weight-bold required-label">Kategori <span
                                        style="color: red">*</label>
                                <select class="form-control {{ $errors->first('categories') ? 'is-invalid' : '' }}"
                                    name="categories[]" id="categories" multiple required>
                                </select>
                                @if ($errors->first('categories'))
                                    <div class="invalid-feedback">{{ $errors->first('categories') }}</div>
                                @endif
                            </div>

                            {{-- Content --}}
                            <div class="mb-3">
                                <label for="content" class="font-weight-bold required-label">Konten</label>
                                <textarea id="content" class="form-control ckeditor {{ $errors->first('content') ? 'is-invalid' : '' }}"
                                    name="content" rows="10" required>{{ old('content') }}</textarea>
                                @if ($errors->first('content'))
                                    <div class="invalid-feedback">{{ $errors->first('content') }}</div>
                                @endif
                            </div>

                            {{-- Buttons --}}
                            <div class="mb-3 mt-4">
                                <button class="btn btn-secondary" name="save_action" value="DRAFT">Simpan sebagai
                                    Draft</button>
                                <button class="btn btn-success" name="save_action" value="PUBLISH">Publish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    {{-- ckeditor --}}
    <script>
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{ route('articles.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>

    {{-- select --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('#categories').select2({
            ajax: {
                url: '{{ url('/admin/ajax/categories/search') }}',
                processResults: function(data) {
                    return {
                        results: data.map(function(item) {
                            return {
                                id: item.id,
                                text: item.name
                            }
                        })
                    }
                }
            }
        });
    </script>

@endsection
