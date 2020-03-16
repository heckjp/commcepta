<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon">
          <img src="img/logo.png" width="75" height="75">
        </div>
        <div class="sidebar-brand-text">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php?menu=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Gerenciar
      </div>

      <!-- Nav Item - Produto Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduto" aria-expanded="true" aria-controls="collapseProduto">
          <i class="fas fa-fw fa-cog"></i>
          <span>Produto</span>
        </a>
        <div id="collapseProduto" class="collapse" aria-labelledby="headingProduto" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="home.php?menu=produto&submenu=listar">Listar</a>
            <a class="collapse-item" href="home.php?menu=produto&submenu=cadastrar">Cadastrar</a>
          </div>
        </div>
      </li>

        <!-- Nav Item - Cliente Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCliente" aria-expanded="true" aria-controls="collapseCliente">
          <i class="fas fa-fw fa-cog"></i>
          <span>Cliente</span>
        </a>
        <div id="collapseCliente" class="collapse" aria-labelledby="headingCliente" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="home.php?menu=cliente&submenu=listar">Listar</a>
            <a class="collapse-item" href="home.php?menu=cliente&submenu=cadastrar">Cadastrar</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Vendedor Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVendedor" aria-expanded="true" aria-controls="collapseVendedor">
          <i class="fas fa-fw fa-cog"></i>
          <span>Vendedor</span>
        </a>
        <div id="collapseVendedor" class="collapse" aria-labelledby="headingVendedor" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="home.php?menu=vendedor&submenu=listar">Listar</a>
            <a class="collapse-item" href="home.php?menu=vendedor&submenu=cadastrar">Cadastrar</a>
          </div>
        </div>
      </li>

       <!-- Nav Item - Usuario Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuario" aria-expanded="true" aria-controls="collapseUsuario">
          <i class="fas fa-fw fa-cog"></i>
          <span>Usuário</span>
        </a>
        <div id="collapseUsuario" class="collapse" aria-labelledby="headingUsuario" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="home.php?menu=vendedor&submenu=listar">Listar</a>
            <a class="collapse-item" href="home.php?menu=vendedor&submenu=cadastrar">Cadastrar</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Vendas
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Gerenciar</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Relatórios</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>