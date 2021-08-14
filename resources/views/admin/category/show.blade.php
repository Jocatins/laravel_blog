@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

@endsection

@section('main-content')

  <!-- Content Wrapper. Contains page content -->
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Category Table With Full Features</h3>
    </div>
    <a class="col-lg-offset-5 btn btn-success" href="{{ route('category.create') }}"> Add New</a>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>S No</th>
          <th>Name</th>
          <th>Slug</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>          
        <tr>
          @foreach($categories as $category)

          <td>{{  $loop->index + 1 }}</td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->slug }}</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
        @endforeach
        
        </tbody>
        <tfoot>
          <tr>
            <th>S No</th>
            <th>Name</th>
            <th>Slug</th>
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