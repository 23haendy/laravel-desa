<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" >SuratKu</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('sipil.index')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Warga</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">



      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="{{ route('petugas.index')}}">
          <i class="fas fa-fw fa-cog"></i>
          <span>Petugas</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
      <a class="nav-link" href="{{ route('suket.index')}}">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Surat Keterangan</span>
        </a>

      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


    </ul>
