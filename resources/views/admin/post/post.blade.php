    @extends('admin.layouts.app')

    @section('headSection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
    @endsection

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
              <h3 class="box-title">Titles</h3>
            </div>
         
            {{-- Including Error messages --}}
            @include('includes.messages')
            <form role="form" action="{{ route('post.store') }}" method="post">

              {{ csrf_field() }}
              <div class="box-body">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="title">Post Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label for="subtitle">Post Sub Title</label>
                        <input type="text" name="subtitle"  id="subtitle" class="form-control" placeholder="Enter subtitle">
                      </div>
                      <div class="form-group">
                        <label for="slug">Post Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                      </div>

                </div>
                
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="pull-right">
                      <label for="exampleInputFile" >File input</label>
                      <input type="file" id="image" name="image"/>
                      
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" name="status"
                          value="1"
                          > Publish
                        </label>
                      </div>
                  </div>
  
                    <div class="form-group" style="margin-top: 16px;">
                      <label>Select Tags</label>
                      <select class="form-control select2"
                       multiple="multiple" data-placeholder="Select a State" 
                       style="width: 100%;"
                       name="tags[]">
                       
                       @foreach($tags as $tag)
                        <option value={{ $tag->id }}>{{ $tag->name }}</option>
                      @endforeach
                      </select>
                    </div>
                    
                    <div class="form-group" style="margin-top: 16px;">
                      <label>Select Categories</label>
                      <select class="form-control select2" 
                      multiple="multiple" data-placeholder="Select a State" 
                      style="width: 100%;"
                      name="categories[]">
                        @foreach($categories as $category)
                        <option value={{ $category->id }}>{{ $category->name }}</option>
                      @endforeach
                      </select>
                    </div>
              </div>
                
               
              </div>
              <!-- /.box-body -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Write a Post Body 
                    
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                  
                    <textarea  name="body"     
                     style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                     id="editor1"
                     >{{ $post->body }}
                </textarea>
                  
                </div>
              </div>
            </div>
            <!-- /.col-->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <!-- /.box -->

          
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      //bootstrap WYSIHTML5 - text editor
      $(".textarea").wysihtml5();
    });
  </script>

<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></scr>
<script>
  $(document).ready(function() {
    $(".select2").select2();
  });
</script>
@endsection