<div class="main-sidebar">
  <!-- Inner sidebar -->
  <div class="sidebar">
    <!-- user panel (Optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>User Name</p>

        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div><!-- /.user-panel -->

    <!-- Search Form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form><!-- /.sidebar-form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="#"><span>Link</span></a><</li>
      <li><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i> <span>Posts</span></a></li>
      <li><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i><span>Tags</span></a></li>
      <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i><span>Categories</span></a></li>
      <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i><span>Users</span></a></li>
    
     
    </ul><!-- /.sidebar-menu -->

  </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->