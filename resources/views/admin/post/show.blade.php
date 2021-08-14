@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

@endsection

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Posts Table With Full Features</h3>
      </div>
      <a class="col-lg-offset-5 btn btn-success" href="{{ route('post.create') }}"> Add New</a>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>S No</th>
              <th>Title</th>
              <th>Subtitle</th>
              <th>Slug</th>
              <th>Created at</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>          
          <tr>
            @foreach($posts as $post)

            <td>{{  $loop->index + 1 }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->subtitle }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->created_at }}</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          @endforeach
          
          </tbody>
          <tfoot>
            <tr>
              <th>S No</th>
              <th>Title</th>
              <th>Subtitle</th>
              <th>Slug</th>
              <th>Created at</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true, 
      "autoWidth": false
    });
  });
</script>

@endsection