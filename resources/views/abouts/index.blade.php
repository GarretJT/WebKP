@extends('layouts.admin')

@section('title', 'About')

@section('breadcrumbs', 'About')

@section('second-breadcrumb')
    <li> About</li>
@endsection

@section('content')
  <!-- table  -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
              
            @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                
            @endif
            
         <h3 class="text-center mt-3 mb-5">Halaman Home</h3>
            <div class="row justify-content-center">
              <div class="col-md-10">
                <div class="row align-items-center">
                  <!-- Gambar -->
                  <div class="col-md-5 mb-3 mb-md-0">
                    <img src="{{ asset('about_image/' . $abouts[0]->image) }}"
                         alt="image"
                         class="img-fluid rounded shadow w-100" />
                  </div>
            
                  <!-- Caption -->
                  <div class="col-md-7">
                    <div class="p-2 text-dark">
                      {!! $abouts[0]->caption !!}
                    </div>
                  </div>
                </div>
            
                <!-- Tombol Edit -->
                <div class="text-center mt-4">
                  <a href="{{ route('abouts.edit', [$abouts[0]->id]) }}" class="btn btn-warning text-light">
                    <i class="fa fa-pencil"></i> Edit
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /table -->
@endsection