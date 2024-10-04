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

    @vite(['resources/scss/admin.scss', 'resources/js/orders.js'])
</head>

<body class="hold-transition dark-mode">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div>
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
                            <h3 class="card-title">Редактирование заявки</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <tbody>
                                        <form class="orders-show__form" action="{{ route('orders.change', $order->id) }}" method="POST">
                                            @csrf
                                            <div class="orders-show__form__first-two-inputs">

                                                <div class="orders-show__form__first-two-inputs__left-input">
                                                    <div class="orders-show__form__input-container">
                                                        <input name="car" value="{{ $order->car }}" class="active-input"
                                                            type="text" placeholder="АВТО">
                                                    </div>
                                                </div>
                                                <div class="orders-show__form__first-two-inputs__right-input">
                                                    <div class="orders-show__form__select-container">
                                                        <div class="orders-show__form__select-container__select">
                                                            <p class="orders-show__form__select-container__select__time-select">Время бронирования</p>
                                                            <select name="time" id="timeSelect">
                                                                <option value="{{ $order->time }}" selected>
                                                                    {{ $order->time }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="orders-show__form__select-container">
                                                        <div class="orders-show__form__select-container__select">
                                                            <p>День</p>
                                                            <select name="day" id="daySelect">
                                                                <option value="{{ $day }}" selected>{{ $day }}</option>
                                                            </select>
                                                        </div>

                                                        <div class="orders-show__form__select-container__select">
                                                            <p>Месяц</p>
                                                            <select name="month" id="monthSelect">
                                                                <option value="{{ $month }}" selected>{{ $month }}
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="orders-show__form__select-container__select">
                                                            <p>Год</p>
                                                            <select name="year" id="yearSelect">
                                                                <option value="{{ $year }}" selected>{{ $year }}
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="orders-show__form__select-container__select">
                                                            <p>Статус</p>
                                                            <select name="status" id="statusSelect">
                                                                <option value="1">Открыта</option>
                                                                <option value="2">Закрыта</option>
                                                                <option value="3">Отменена</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="orders-show__form__textarea">
                                                <textarea name="description" id="textarea"
                                                    placeholder="ОПИСАНИЕ ПРОБЛЕМЫ"
                                                    class="orders-show__form__textarea__input"
                                                    maxlength="4000">{{ $order->description }}</textarea>
                                                <p class="orders-show__form__textarea__counter"><span
                                                        class="orders-show__form__textarea__counter__count"
                                                        id="textareaCounter">0</span>/4000</p>
                                            </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">

                            <button class="btn btn-success btn-secondary" type="submit">Сохранить</button>

                            <a href="{{ route('admin.home') }}" class="btn btn-danger float-right">Вернуться</a>
                        </div>
                        </form>
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