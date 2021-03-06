 <aside class="main-sidebar" style="background-color:   ">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar" style="height: auto;">
     <!-- Sidebar user panel -->
     <!-- search form -->
     <!-- <form action="#" method="get" class="sidebar-form">
       <div class="input-group">
         <input type="text" name="q" class="form-control" placeholder="Search...">
         <span class="input-group-btn">
           <button type="submit" name="search" id="search-btn" class="btn btn-flat">
             <i class="fa fa-search"></i>
           </button>
         </span>
       </div>
     </form> -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p>{{$user_login->name}}</p>
         <a class="fa-color" href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>

     <style>
       .input-group {
         width: 226px;
       }

       section.sidebar {
         width: 226px;
         margin-top: 0px;
         background-color: #3366CC;
       }

       a.fa-color {
         color: white;
       }
     </style>
     <!-- /.search form -->
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu tree" data-widget="tree">



       <li>
         <a class="fa-color" href="{{route('master')}}">
           <i class="fa fa-th"></i> <span>Trang Chủ</span>
           <span class="pull-right-container">
             <!-- <small class="label pull-right bg-green">new</small> -->
           </span>
         </a>
       </li>

       <li>
         <a class="fa-color" href="{{route('thongke')}}">
           <i class="fa fa-th"></i> <span>Thống Kê</span>
           <span class="pull-right-container">
             <small class="label pull-right bg-green">new</small>
           </span>
         </a>
       </li>

       <li class="treeview">
         <a class="fa-color" href="#">
           <i class="fa fa-pie-chart"></i>
           <span>QL-Loại sản phẩm</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu">
           <li><a class="fa-color" href="admin/loaisp/danhsach"><i class="fa fa-circle-o"></i>Danh Sách</a></li>

           <li><a class="fa-color" href="admin/loaisp/them"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
       </li>
     </ul>
     </li>

     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-pie-chart"></i>
         <span>QL-Sản Phẩm</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a class="fa-color" href="admin/sanpham/danhsach"><i class="fa fa-circle-o"></i>Danh Sách </a></li>

         <li><a class="fa-color" href="admin/sanpham/them"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
     </li>
     </ul>
     </li>



     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-pie-chart"></i>
         <span>QL-Khách Hàng</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a class="fa-color" href="admin/khachhang/danhsach"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
         <li><a class="fa-color" href="admin/khachhang/them"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
     </li>
     </ul>
     </li>

     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-pie-chart"></i>
         <span>QL-Hóa Đơn</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a class="fa-color" href="admin/hoadon/danhsach"><i class="fa fa-circle-o"></i>Danh Sách</a></li>

         <li><a class="fa-color" href="admin/hoadon/them"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
     </li>
     </ul>
     </li>

     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-pie-chart"></i>
         <span>QL-Hóa Đơn Chi Tiết</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a class="fa-color" href="admin/hoadonct/danhsach"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
         <li><a class="fa-color" href="admin/hoadonct/them"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
     </li>
     </ul>
     </li>

     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-pie-chart"></i>
         <span>QL-Người Dùng</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a class="fa-color" href="admin/user/danhsach"><i class="fa fa-circle-o"></i>Danh Sách</a></li>

     </li>
     </ul>
     </li>

     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-pie-chart"></i>
         <span>QL-Slide</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a class="fa-color" href="admin/slide/danhsach"><i class="fa fa-circle-o"></i>Danh Sách</a></li>
         <li><a class="fa-color" href="admin/slide/them"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
     </li>
     </ul>
     </li>




     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-edit"></i> <span>QL-Nhà Cung Cấp</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a class="fa-color" href="admin/nhacungcap/danhsach"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
         <li><a class="fa-color" href="admin/nhacungcap/them"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>

       </ul>
     </li>




     <li class="treeview">
       <a class="fa-color" href="#">
         <i class="fa fa-laptop"></i>
         <span>UI Elements</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
         <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
         <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
         <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
         <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
         <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
       </ul>
     </li>
     <li class="treeview">
       <a href="#">
         <i class="fa fa-edit"></i> <span>Forms</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
         <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>

       </ul>
     </li>
     <li class="treeview">
       <a href="#">
         <i class="fa fa-table"></i> <span>Tables</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
       </ul>
     </li>

     <li>
       <a href="pages/calendar.html">
         <i class="fa fa-calendar"></i> <span>Calendar</span>
         <span class="pull-right-container">
           <small class="label pull-right bg-red">3</small>
           <small class="label pull-right bg-blue">17</small>
         </span>
       </a>
     </li>
     <li>
       <a href="pages/mailbox/mailbox.html">
         <i class="fa fa-envelope"></i> <span>Mailbox</span>
         <span class="pull-right-container">
           <small class="label pull-right bg-yellow">12</small>
           <small class="label pull-right bg-green">16</small>
           <small class="label pull-right bg-red">5</small>
         </span>
       </a>
     </li>
     <li class="treeview">
       <a href="#">
         <i class="fa fa-folder"></i> <span>Examples</span>
         <span class="pull-right-container">
           <i class="fa fa-angle-left pull-right"></i>
         </span>
       </a>
       <ul class="treeview-menu">
         <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
         <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
         <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
         <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
         <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
         <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
         <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
         <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
         <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
       </ul>
     </li>


     <li class="header">LABELS</li>
     <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
     <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
     <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>