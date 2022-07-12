<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard PRO by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
</head>

<body class="rtl">
  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="../../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          ط م
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          توقيت الإبداعية
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="{{ auth()->user()->profilePicture() }}" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                تانيا أندرو
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('profile.edit') }}">
                    <span class="sidebar-mini">مع</span>
                    <span class="sidebar-normal">ملفي</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('profile.edit') }}">
                    <span class="sidebar-mini">هوع</span>
                    <span class="sidebar-normal">تعديل الملف الشخصي</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini">و</span>
                    <span class="sidebar-normal">إعدادات</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="material-icons">dashboard</i>
              <p>لوحة القيادة ة
              </p>
            </a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
              <i class="material-icons">image</i>
              <p>صفحات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse show" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.pricing') }}">
                    <span class="sidebar-mini">ع</span>
                    <span class="sidebar-normal">التسعير</span>
                  </a>
                </li>
                <li class="nav-item active ">
                  <a class="nav-link" href="{{ route('page.rtl-support') }}">
                    <span class="sidebar-mini">صو</span>
                    <span class="sidebar-normal">دعم رتل</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.timeline') }}">
                    <span class="sidebar-mini">ر</span>
                    <span class="sidebar-normal">الجدول الزمني</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.lock') }}">
                    <span class="sidebar-mini">هذاع</span>
                    <span class="sidebar-normal">قفل صفحة الشاشة</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('profile.edit') }}">
                    <span class="sidebar-mini">شع</span>
                    <span class="sidebar-normal">ملف تعريفي للمستخدم</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.error') }}">
                    <span class="sidebar-mini">البريد</span>
                    <span class="sidebar-normal">صفحة الخطأم</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p>المكونات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                    <span class="sidebar-mini">ر</span>
                    <span class="sidebar-normal">المكونات
                      <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse" id="componentsCollapse">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="#0">
                          <span class="sidebar-mini">ر</span>
                          <span class="sidebar-normal">طباعة</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.buttons') }}">
                    <span class="sidebar-mini">بت</span>
                    <span class="sidebar-normal">وصفتت</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.grid') }}">
                    <span class="sidebar-mini">زو</span>
                    <span class="sidebar-normal">نظام الشبكةو</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.panels') }}">
                    <span class="sidebar-mini">ع</span>
                    <span class="sidebar-normal">لوحات</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.sweet-alert') }}">
                    <span class="sidebar-mini">ومن</span>
                    <span class="sidebar-normal">التنبيه الحلو</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.notifications') }}">
                    <span class="sidebar-mini">ن</span>
                    <span class="sidebar-normal">إخطارات</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.icons') }}">
                    <span class="sidebar-mini">و</span>
                    <span class="sidebar-normal">الرموز</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.typography') }}">
                    <span class="sidebar-mini">ر</span>
                    <span class="sidebar-normal">طباعة</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">content_paste</i>
              <p>إستمارات
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.regular_forms') }}">
                    <span class="sidebar-mini">صو</span>
                    <span class="sidebar-normal">أشكال منتظمة</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.extended_forms') }}">
                    <span class="sidebar-mini">هوو</span>
                    <span class="sidebar-normal">أشكال موسعة</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.validation_forms') }}">
                    <span class="sidebar-mini">تو</span>
                    <span class="sidebar-normal">نماذج التحقق</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.wizard_forms') }}">
                    <span class="sidebar-mini">ث</span>
                    <span class="sidebar-normal">ساحر</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">grid_on</i>
              <p>الجداول
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.regular_tables') }}">
                    <span class="sidebar-mini">صر</span>
                    <span class="sidebar-normal">الجداول العادية</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.extended_tables') }}">
                    <span class="sidebar-mini">هور</span>
                    <span class="sidebar-normal">الجداول الموسعة</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.datatable_tables') }}">
                    <span class="sidebar-mini">در</span>
                    <span class="sidebar-normal">جداول البيانات صافي</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
              <i class="material-icons">place</i>
              <p>خرائط
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="mapsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.google_maps') }}">
                    <span class="sidebar-mini">زم</span>
                    <span class="sidebar-normal">خرائط جوجل</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.fullscreen_maps') }}">
                    <span class="sidebar-mini">ووم</span>
                    <span class="sidebar-normal">خريطة كاملة الشاشة</span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('page.vector_maps') }}">
                    <span class="sidebar-mini">تم</span>
                    <span class="sidebar-normal">سهم التوجيه، الخريطة</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('page.widgets') }}">
              <i class="material-icons">widgets</i>
              <p>الحاجيات</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('page.charts') }}">
              <i class="material-icons">timeline</i>
              <p>الرسوم البيانية</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('page.calendar') }}">
              <i class="material-icons">date_range</i>
              <p>التقويم</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">وحة القيادة</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-text card-header-warning">
                  <div class="card-text">
                    <h4 class="card-title">لتكاليف يبق</h4>
                    <p class="card-category">بالإنزال وفي. خيار ومضى العمليات تم ذلك, تم معقل مرمى</p>
                  </div>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>وتم</th>
                      <th>لأمريكية هذا</th>
                      <th>شاسعالأمريكية</th>
                      <th>الأمريكية </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>وا حد</td>
                        <td>السبب وفرنسا الصينية </td>
                        <td>$36,738</td>
                        <td>تكاليف</td>
                      </tr>
                      <tr>
                        <td>إثنان</td>
                        <td>بمباركة بها </td>
                        <td>$23,789</td>
                        <td>الأمريكية من</td>
                      </tr>
                      <tr>
                        <td>ثلاثة</td>
                        <td> شاسعالأمريكية </td>
                        <td>$56,142</td>
                        <td>السفن وعُرفت</td>
                      </tr>
                      <tr>
                        <td>أربعة</td>
                        <td> الاندونيسية</td>
                        <td>$38,735</td>
                        <td> فصل.</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-rose">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">منتصف:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item active">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">bug_report</i> ضرب
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">code</i> السفن
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">cloud</i> فصل.
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td> فقد لمحاكم الاندونيسية, بلاده بالتوقيع تم يبق. جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>بحث. كل مما ٢٠٠٤ شاسعة العسكري جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td> تسبب أفريقيا ضرب عن, عن إنطلاق جعل السبب وفرنسا الصينية أي.
                            </td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>قدما مليون بين عن, مرجع منتصف الأمريكية جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>قدما مليون بين عن, مرجع منتصف الأمريكية جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>قدما مليون بين عن, مرجع منتصف الأمريكية جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>قدما مليون بين عن, مرجع منتصف الأمريكية جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>قدما مليون بين عن, مرجع منتصف الأمريكية جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>قدما مليون بين عن, مرجع منتصف الأمريكية جعل السبب وفرنسا الصينية أي.</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="col-lg-6">
                <div class="card card-pricing card-raised">
                  <div class="card-body">
                    <h6 class="card-category">جيوب سليمان، الإنزال</h6>
                    <div class="card-icon icon-rose">
                      <i class="material-icons">home</i>
                    </div>
                    <h3 class="card-title">$29</h3>
                    <p class="card-description">
                      الأجل المتساقطة، من. عرض بسبب وأكثرها الاندونيسية بـ.
                    </p>
                    <a href="#pablo" class="btn btn-rose btn-round">حاملات فعل</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card card-pricing card-plain">
                  <div class="card-body">
                    <h6 class="card-category">المتحدة لتقليعة</h6>
                    <div class="card-icon">
                      <i class="material-icons">weekend</i>
                    </div>
                    <h3 class="card-title">قائمة</h3>
                    <p class="card-description">
                      الأجل المتساقطة، من. عرض بسبب وأكثرها الاندونيسية بـ.
                    </p>
                    <a href="#pablo" class="btn btn-white btn-round">حاملات فعل</a>
                  </div>
                </div>
              </div>
              <div class="col-md-11">
                <div class="card card-testimonial">
                  <div class="icon">
                    <i class="material-icons">format_quote</i>
                  </div>
                  <div class="card-body">
                    <h5 class="card-description">
                      بعد و وسوء الأحمر, دون عقبت الهادي أم, قد حول قادة حكومة يتعلّق. أخذ حصدت اوروبا أن, كلا مهمّات اسبوعين التخطيط عل. وإيطالي الأوروبي و نفس. صفحة احداث أضف ان, هو مرجع نهاية لهيمنة كما. تم مايو لفشل المدن دول, جعل أن عسكرياً التّحول استرجاع.
                    </h5>
                  </div>
                  <div class="card-footer">
                    <h4 class="card-title">أليك طومسون</h4>
                    <h6 class="card-category">@أليك طومسون</h6>
                    <div class="card-avatar">
                      <a href="#pablo">
                        <img class="img" src="../../assets/img/faces/card-profile1-square.jpg" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <ul class="timeline timeline-simple">
                <li class="timeline-inverted">
                  <div class="timeline-badge danger">
                    <i class="material-icons">card_travel</i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <span class="badge badge-pill badge-danger">جهة أي</span>
                    </div>
                    <div class="timeline-body">
                      <p>قام كل ماذا العصبة اوروبا. أي جورج العالمي أخر, كان تم أطراف القوى استبدال. أسر ميناء تكتيكاً الجديدة، كل. جُل اللا التكاليف بـ, عرفها النزاع لليابان بـ أضف. انتهت المدن الثالث من وقد.وقبل قادة إحتار عن أخر. حين ونتج أخرى قد. بالعمل بالمطالبة فقد قد. عن جنوب ومضى الشتاء.</p>
                    </div>
                    <h6>
                      <i class="ti-time"></i> مدن أن هُزم سكان, مكن.
                    </h6>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge success">
                    <i class="material-icons">extension</i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <span class="badge badge-pill badge-success">جُل حكومة</span>
                    </div>
                    <div class="timeline-body">
                      <p>عل فكانت الثقيلة بلا. شيء بخطوط بالرّغم التبرعات عن, يطول بأيدي لم كلّ. معقل الغالي واتّجه لم وتم, أن الصفحة بالمحور حول, بال مرمى الصفحات قُدُماً و. الأخذ سبتمبر العالم من ذلك. ان يبق شدّت الأبرياء, الى الربيع، والمانيا كل. ودول الأهداف التقليدي عل أضف, كلا يقوم الأخذ الآلاف بل.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge info">
                    <i class="material-icons">fingerprint</i>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <span class="badge badge-pill badge-info">هذا غينيا</span>
                    </div>
                    <div class="timeline-body">
                      <p>جهة المارق والديون التقليدية في, هو وترك المجتمع بريطانيا ذلك, لمّ ما العالم، اليابان،. ٣٠ فقامت أوروبا مشاركة بعد, ٢٠٠٤ الجو مساعدة ما حدى. في عليها وبحلول معارضة بعض. عن الأرض وبداية العمليات ولم. الجو جديداً الأوروبيّون أم به،. ثم التي نتيجة الآلاف جعل, عن المارق السادس قام. ما أخر فقامت الأجل الشرق،, فصل كل وسوء الأرواح. ثم بعد وشعار بأيدي. قبل وكسبت الغالي الولايات بل, ٣٠ أمّا أخرى لأداء أضف. هو منتصف معزّزة على. بـ أفريقيا التغييرات مما, أثره،.
                        <hr>
                        <div class="dropdown pull-left">
                          <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">build</i>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li>
                              <a href="#action">ان</a>
                            </li>
                            <li>
                              <a href="#action">إجلاء لفرنسا</a>
                            </li>
                            <li>
                              <a href="#here">أواخر الأرض بل</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                              <a href="#link">عل اليها</a>
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="ml-auto mr-auto">
              <span class="badge filter badge-black active" data-background-color="black"></span>
              <span class="badge filter badge-white" data-background-color="white"></span>
              <span class="badge filter badge-red" data-background-color="red"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger">
            <p>Sidebar Mini</p>
            <label class="ml-auto">
              <div class="togglebutton switch-sidebar-mini">
                <label>
                  <input type="checkbox">
                  <span class="toggle"></span>
                </label>
              </div>
            </label>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger">
            <p>Sidebar Images</p>
            <label class="switch-mini ml-auto">
              <div class="togglebutton switch-sidebar-image">
                <label>
                  <input type="checkbox" checked="">
                  <span class="toggle"></span>
                </label>
              </div>
            </label>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block btn-fill">Buy Now</a>
          <a href="https://demos.creative-tim.com/material-dashboard-pro/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            Documentation
          </a>
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">
            Get Free Demo!
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/ct-material-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
  <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('material') }}/demo/demo.js"></script>
  <script src="{{ asset('material') }}/js/application.js"></script>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
    });
  </script>
</body>

</html>