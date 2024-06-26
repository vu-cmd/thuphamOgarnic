 <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="{{ route('admin.getLogout') }} "><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfV72jN_mCWtvAqBcmTtmXbVu00GVbAyLFYA&s" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"></i>{{ ucwords(Auth::user()->name) }}</p>
        <!-- <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p> -->
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item " href="{{ route('admin.getListContact') }}"><i class="app-menu__icon fa-regular fa-message"></i><span
            class="app-menu__label">Phản hồi</span></a></li>
      <li><a class="app-menu__item " href="table-data-table.html"><i class="app-menu__icon fa-solid fa-user-lock"></i> <span
            class="app-menu__label">Cấp lại tài khoản</span></a></li>
      <li><a class="app-menu__item" href="{{ route('admin.getUser') }} "><i class="app-menu__icon fa-regular fa-user"></i><span
            class="app-menu__label">Quản lý thành viên</span></a></li>
      <li><a class="app-menu__item"  href="{{ route('admin.getListProduct') }} "><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="{{ route('admin.getListOrder') }} "><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="table-data-banned.html"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý nội bộ
          </span></a></li>
      <li><a class="app-menu__item" href="table-data-money.html"><i class='app-menu__icon bx bx-dollar'></i><span
            class="app-menu__label">Bảng kê lương</span></a></li>
      <!-- <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li> -->
      <!-- <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span
            class="app-menu__label">Lịch công tác </span></a></li> -->
      <!-- <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li> -->
    </ul>
  </aside>