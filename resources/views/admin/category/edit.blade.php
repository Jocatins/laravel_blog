@extends('admin.layouts.app')

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">


               <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">category Titles</h3>
            </div>
           {{-- Including Error messages --}}
           @include('includes.messages') 

            <form role="form" action="{{ route('category.update', $category->id) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="box-body">

                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="name">Editing category Title</label>
                        <input type="text" class="form-control" id="name" 
                        name="name" placeholder="Enter category Title"
                        value="{{ $category->name }}">
                      </div>
                      
                      <div class="form-group">
                        <label for="slug">category Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug"
                         placeholder="Slug" value="{{ $category->slug }}">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>

                      </div>
                    </form>
                  </div>

                </div>
              </div>
              <!-- /.box-body -->
              <div class="box">
                
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection