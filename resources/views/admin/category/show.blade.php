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
          <td><a href="{{ route('category.edit', $category->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
          <td>
          <form id="delete-category{{ $category->id }}" method="POST" action="{{ route('category.destroy', $category->id) }}" style="display: none">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
          </form>
            <a href=""
             onclick="if(confirm('Are you sure you want to delete this?')) 
             {
               event.preventDefault();
               document.getElementById('delete-category{{ $category->id }}')
             .submit();
             }else
             {
               event.preventDefault();
               }">
               <span class="glyphicon glyphicon-trash"></span></a></td>
          
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