<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::to('/')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            @if($side == 'dashboard')
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            @else
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            @if($side == 'pengguna')
            <a href="/pengguna" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
              </p>
            </a>
            @else
            <a href="/pengguna" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
              </p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            @if($side == 'hakAkses')
            <a href="/hakAkses" class="nav-link active">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                Hak Akses
              </p>
            </a>
            @else
            <a href="/hakAkses" class="nav-link">
              <i class="nav-icon fa fa-lock"></i>
              <p>
                Hak Akses
              </p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            @if($side == 'barang')
            <a href="/barang" class="nav-link active">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Barang
              </p>
            </a>
            @else
            <a href="/barang" class="nav-link">
              <i class="nav-icon fa fa-archive"></i>
              <p>
                Barang
              </p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            @if($side == 'pembelian')
            <a href="/pembelian" class="nav-link active">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Pembelian
              </p>
            </a>
            @else
            <a href="/pembelian" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Pembelian
              </p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            @if($side == 'suplier')
            <a href="/supplier" class="nav-link active">
              <i class="nav-icon fa fa-truck"></i>
              <p>
                Supplier
              </p>
            </a>
            @else
            <a href="/supplier" class="nav-link ">
              <i class="nav-icon fa fa-truck"></i>
              <p>
                Supplier
              </p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            @if($side == ' penjualan')
            <a href="/penjualan" class="nav-link active">
              <i class="nav-icon fa fa-plus"></i>
              <p>
                Penjualan
              </p>
            </a>
            @else
            <a href="/penjualan" class="nav-link">
              <i class="nav-icon fa fa-plus"></i>
              <p>
                Penjualan
              </p>
            </a>
            @endif
          </li>
          <li class="nav-item">
            @if($side == 'pelanggan')
            <a href="/pelanggan" class="nav-link active">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                Pelanggan
              </p>
            </a>
            @else
            <a href="/pelanggan" class="nav-link">
              <i class="nav-icon fa fa-id-card"></i>
              <p>
                Pelanggan
              </p>
            </a>
            @endif
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>