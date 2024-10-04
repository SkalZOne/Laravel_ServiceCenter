<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminMenu</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">

  @vite(['resources/scss/admin.scss', 'resources/js/admin.js'])
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="/admin/dist/img/AdminLTELogo.png" alt="Admin menu Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Admin menu</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">{{ $user->login }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">ЗАКАЗЫ</li>
            <li class="nav-item">
              <a href="/admin/pages/calendar.html" class="nav-link">
                <img src="/admin/dist/img/wrench.svg" alt="wrench" style="max-width: 20px; margin-right: 10px;">
                <p>
                  Все заказы
                  <span class="badge badge-info right">{{ $orders->total()}}</span>
                </p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Главная страница</li>
                <!-- <li class="breadcrumb-item active">Главная страница</li> -->
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <!-- Main row -->
          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Последние заказы</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive" style="padding: 10px 0;">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Авто</th>
                      <th style="text-align: center;">Описание проблемы</th>
                      <th>Дата бронирования</th>
                      <th>Время бронирования</th>
                      <th>Статус</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $order)
            <tr>
              <th>
              <p>{{ $order->id }} <a href="{{ route('admin.order', $order->id) }}"><img src="{{ URL::asset('/image/pencil-redact.svg') }}"
                  alt="orderRedact"></a></p>
              </th>
              <th>{{ $order->car }}</th>
              <th id="tableDescription" class="description">
              <div class="description__container">
                <span class="description__container__text text-hidden">{{ $order->description }}</span>
                <img id="arrowDown" class="description__container__arrow-down"
                src="{{ URL::asset('/image/arrow-down.svg') }}" alt="arrowDown" style="display: none">
              </div>
              </th>
              <th>{{ $order->date }}</th>
              <th>{{ $order->time }}</th>
              @if ($order->status == 1)
          <th class="open">Открыта</th>
        @elseif ($order->status == 2)
        <th class="closed">Закрыта</th>
      @elseif ($order->status == 3)
      <th class="canceled">Отменена</th>
    @endif
            </tr>
          @endforeach
                  </tbody>
                </table>
                {!! $orders->links() !!}
              </div>
            </div>
          </div>
          
        </div>
    </div>
  </div>
  </section>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/admin/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="/admin/plugins/raphael/raphael.min.js"></script>
  <script src="/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="/admin/plugins/chart.js/Chart.min.js"></script>

</body>

</html>