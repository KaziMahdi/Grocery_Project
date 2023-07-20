<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.index')}}">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
              <div class="badge badge-danger">new</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="typcn typcn-user-outline menu-icon"></i>
              <span class="menu-title">Customers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('/customers/create')}}">Create Customer</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('customers.index')}}">Manage Customer</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="typcn typcn-group-outline menu-icon"></i>
              <span class="menu-title">Employees</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('employees.create')}}">Create Employee</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('employees.index')}}">Manage Employee</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Inventory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('products.create')}}">Create Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('products.index')}}">Manage Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('uoms.create')}}">Create Uom</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('uoms.index')}}">Manage Uom</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="typcn typcn-shopping-cart menu-icon"></i>
              <span class="menu-title">Sales</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('orders.create')}}">Create Sales</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('orders.index')}}">Manage Sales</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="typcn typcn-clipboard menu-icon"></i> </i>
              <span class="menu-title">Purchase</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('purchases.create')}}">Create Purchase</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('purchases.index')}}">Manage Purchase</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('suppliars.create')}}">Create Suppliar</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('suppliars.index')}}">Manage Suppliar</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="typcn typcn-th-menu menu-icon"></i>
              <span class="menu-title">Stock</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('stocks.index')}}"> Manage Stock </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('transections.create')}}"> Create Transection </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('transections.index')}}"> Manage Transection </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#adjus" aria-expanded="false" aria-controls="adjus">
              <i class="typcn typcn-th-list-outline menu-icon"></i>
              <span class="menu-title">Adjustment</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="adjus">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('stockadjustment.create')}}"> Create Adjustment </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('stockadjustment.index')}}"> Manage  Adjustment </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="typcn typcn-spanner-outline menu-icon"></i>
              <span class="menu-title">System</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('users.create')}}"> Create User </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}"> Manage User </a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">
              <i class="typcn typcn-lock-closed menu-icon"></i> 
              <span class="menu-title">Log-Out</span>
            </a>
          </li>
        </ul>
      </nav>