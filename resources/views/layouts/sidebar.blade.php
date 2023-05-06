<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pengguna
              </p>
            </a>
            @else
            <a href="/pengguna" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pengguna
              </p>
            </a>
            @endif
          </li>
          @if($side == 'barang')
          <li class="nav-item">
            <a href="/barang" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          @else
          <li class="nav-item">
            <a href="/barang" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="/#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pembelian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Penjualan
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>