  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'dashboard') collapsed @endif" href="{{url('panel/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'user') collapsed @endif" href="{{url('panel/user')}}">
          <i class="bi bi-person"></i>
          <span>User</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'role') collapsed @endif" href="{{url('panel/role')}}">
          <i class="bi bi-person"></i>
          <span>Role</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'category') collapsed @endif" href="{{url('panel/category')}}">
          <i class="bi bi-person"></i>
          <span>Category</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'subcategory') collapsed @endif" href="{{url('panel/subcategory')}}">
          <i class="bi bi-person"></i>
          <span>Sub Category</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'product') collapsed @endif" href="{{url('panel/product')}}">
          <i class="bi bi-person"></i>
          <span>Product</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) != 'sitting') collapsed @endif" href="{{url('panel/sitting')}}">
          <i class="bi bi-person"></i>
          <span>Sitting</span>
        </a>
      </li><!-- End Profile Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->