<body>
   <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a href="/" class="d-flex align-items-center navbar-brand col-md-3 col-lg-2 me-0 px-3 text-white text-decoration-none">
         <img alt="Logo" src="/img/logo/apple-touch-icon.png" width="32" height="32" />
         <strong class="ms-1">{{ config('app.name') }}</strong>
      </a>

      <div class="col-md-3 col-lg-2 me-0 px-3 d-md-none">
         <button class="navbar-toggler d-md-none collapsed py-0 px-1" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
            <span class="navbar-toggler-icon"></span>
         </button>
      </div>

      <div class="navbar-nav me-0 px-3 d-none d-md-inline">
         <div class="nav-item text-nowrap">
            <button class="btn btn-outline-warning" style="padding: .2rem .5rem .65rem .5rem; line-height: 1rem;" type="submit">
               <i class="fas fa-sign-out-alt" style="position: relative; top: 3px;"></i>
               &nbsp;خروج
            </button>
         </div>
      </div>
   </header>

   <div class="container-fluid">
      <div class="row">
         <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">

               <div class="navbar-nav me-0 px-3 d-md-none">
                  <div class="nav-item text-nowrap d-flex flex-column align-items-center">
                     <button class="btn btn-warning" style="padding: .2rem .5rem .65rem .5rem; line-height: 1rem;" type="submit">
                        <i class="fas fa-sign-out-alt" style="position: relative; top: 3px;"></i>
                        &nbsp;خروج
                     </button>
                  </div>
               </div>


               <ul class="nav flex-column">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">
                        <i class="fas fa-home"></i>&nbsp;<div class="nav-link-text">الصفحة الرئيسية</div>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">
              الطلبات
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              المنتجات
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              الزبائن
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              التقارير
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              التكاملات
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>التقارير المحفوظة</span>
          <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              الشهر الحالي
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              الربع الأخير
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              التفاعل الإجتماعي
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              مبيعات نهاية العام
            </a>
          </li>
        </ul>
      </div>
    </nav>