  @extends('admin.layout.index')

  @section('content')

  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<h1>
  			Dashboard
  			<small>Control panel</small>
  		</h1>
  		<ol class="breadcrumb">
  			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  			<li class="active">Dashboard</li>
  		</ol>
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<!-- Small boxes (Stat box) -->
  		<div class="row">
  			<div class="col-lg-3 col-xs-6">
  				<!-- small box -->
  				<div class="small-box bg-aqua">
  					<div class="inner">
  						<h3>{{$tongsoHD}}</h3>

  						<p>Hóa đơn trong ngày</p>
  					</div>
  					<div class="icon">
  						<i class="ion ion-bag"></i>
  					</div>
  					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  				</div>
  			</div>
  			<!-- ./col -->
  			<div class="col-lg-3 col-xs-6">
  				<!-- small box -->
  				<div class="small-box bg-green">
  					<div class="inner">
  						<h3>53<sup style="font-size: 20px">%</sup></h3>

  						<p>Bounce Rate</p>
  					</div>
  					<div class="icon">
  						<i class="ion ion-stats-bars"></i>
  					</div>
  					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  				</div>
  			</div>
  			<!-- ./col -->
  			<div class="col-lg-3 col-xs-6">
  				<!-- small box -->
  				<div class="small-box bg-yellow">
  					<div class="inner">
  						<h3>{{$tongsoKH}}</h3>

  						<p>Khách hàng đăng kí mới</p>
  					</div>
  					<div class="icon">
  						<i class="ion ion-person-add"></i>
  					</div>
  					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  				</div>
  			</div>
  			<!-- ./col -->
  			<div class="col-lg-3 col-xs-6">
  				<!-- small box -->
  				<div class="small-box bg-red">
  					<div class="inner">
  						<h3>65</h3>

  						<p>Unique Visitors</p>
  					</div>
  					<div class="icon">
  						<i class="ion ion-pie-graph"></i>
  					</div>
  					<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
  				</div>
  			</div>
  			<!-- ./col -->
  		</div>
  		<!-- /.row -->

  		<!-- ./box-body -->
  		<div>
  			<div class="box-footer">
  				<div class="row">
  					<div class="col-sm-3 col-xs-6">
  						<div class="description-block border-right">
  							<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
  							<h5 class="description-header">{{number_format($tongtienban)}}</h5>
  							<span class="description-text">Tổng Doanh Thu</span>
  						</div>
  						<!-- /.description-block -->
  					</div>
  					<!-- /.col -->
  					<div class="col-sm-3 col-xs-6">
  						<div class="description-block border-right">
  							<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
  							<h5 class="description-header">{{number_format($chiphi)}}</h5>
  							<span class="description-text"> Tổng Chi Phí</span>
  						</div>
  						<!-- /.description-block -->
  					</div>
  					<!-- /.col -->
  					<div class="col-sm-3 col-xs-6">
  						<div class="description-block border-right">
  							<span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
  							<h5 class="description-header">{{number_format(($tongtienban)-($chiphi))}}</h5>
  							<span class="description-text">Tổng Lợi Nhuận</span>
  						</div>
  						<!-- /.description-block -->
  					</div>
  					<!-- /.col -->
  					<div class="col-sm-3 col-xs-6">
  						<div class="description-block">
  							<span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
  							<h5 class="description-header">{{number_format($tongtiennhap)}}</h5>
  							<span class="description-text">Tổng Tiền Nhập</span>
  						</div>
  						<!-- /.description-block -->
  					</div>
  				</div>
  				<!-- /.row -->
  			</div>
  		</div>

  		<!-- Main row -->
  		<div class="row">
  			<!-- Left col -->
  			<section class="col-lg-7 connectedSortable">
  				<!-- Custom tabs (Charts with tabs)-->

  				<div class="box box-info">
  					<div class="box-header with-border">
  						<h3 class="box-title">QL-Loại Sản Phẩm</h3>

  						<div class="box-tools pull-right">
  							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
  							</button>
  							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  						</div>
  					</div>
  					<!-- /.box-header -->
  					<div class="box-body">
  						<div class="table-responsive">
  							<table class="table no-margin">
  								<thead>
  									<tr>
  										<th>Mã ID</th>
  										<th>Tên Sản Phẩm</th>
  										<th>Mô Tả</th>
  										<th>Hình Ảnh</th>

  									</tr>
  								</thead>
  								<tbody>
  									@foreach($loaisanpham as $lsp)
  									<tr>
  										<td><a href="" class="id-color">{{$lsp->id}}</a></td>

  										<td>{{$lsp->TenSP}}</td>

  										<td><span class="label label-success">{{$lsp->MoTa}}</span></td>



  										<td>{{$lsp->img}}</td>
  									</tr>
  									@endforeach
  								</tbody>
  								<style>
  									a.id-color {
  										color: black;
  									}
  								</style>
  							</table>
  						</div>
  						<!-- /.table-responsive -->
  					</div>
  					<!-- /.box-body -->
  					<div class="box-footer clearfix">
  						<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
  						<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
  					</div>
  					<!-- /.box-footer -->
  				</div>

  				<!-- /.nav-tabs-custom -->

  				<!-- Chat box -->

  				<!-- /.box (chat box) -->

  				<!-- TO DO List -->
  				<div class="box box-primary">
  					<div class="box-header">
  						<i class="ion ion-clipboard"></i>

  						<h3 class="box-title">To Do List</h3>

  						<div class="box-tools pull-right">
  							<ul class="pagination pagination-sm inline">
  								<li><a href="#">&laquo;</a></li>
  								<li><a href="#">1</a></li>
  								<li><a href="#">2</a></li>
  								<li><a href="#">3</a></li>
  								<li><a href="#">&raquo;</a></li>
  							</ul>
  						</div>
  					</div>
  					<!-- /.box-header -->
  					<div class="box-body">
  						<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
  						<ul class="todo-list">
  							<li>
  								<!-- drag handle -->
  								<span class="handle">
  									<i class="fa fa-ellipsis-v"></i>
  									<i class="fa fa-ellipsis-v"></i>
  								</span>
  								<!-- checkbox -->
  								<input type="checkbox" value="">
  								<!-- todo text -->
  								<span class="text">Design a nice theme</span>
  								<!-- Emphasis label -->
  								<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
  								<!-- General tools such as edit or delete-->
  								<div class="tools">
  									<i class="fa fa-edit"></i>
  									<i class="fa fa-trash-o"></i>
  								</div>
  							</li>
  							<li>
  								<span class="handle">
  									<i class="fa fa-ellipsis-v"></i>
  									<i class="fa fa-ellipsis-v"></i>
  								</span>
  								<input type="checkbox" value="">
  								<span class="text">Make the theme responsive</span>
  								<small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
  								<div class="tools">
  									<i class="fa fa-edit"></i>
  									<i class="fa fa-trash-o"></i>
  								</div>
  							</li>
  							<li>
  								<span class="handle">
  									<i class="fa fa-ellipsis-v"></i>
  									<i class="fa fa-ellipsis-v"></i>
  								</span>
  								<input type="checkbox" value="">
  								<span class="text">Let theme shine like a star</span>
  								<small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
  								<div class="tools">
  									<i class="fa fa-edit"></i>
  									<i class="fa fa-trash-o"></i>
  								</div>
  							</li>
  							<li>
  								<span class="handle">
  									<i class="fa fa-ellipsis-v"></i>
  									<i class="fa fa-ellipsis-v"></i>
  								</span>
  								<input type="checkbox" value="">
  								<span class="text">Let theme shine like a star</span>
  								<small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
  								<div class="tools">
  									<i class="fa fa-edit"></i>
  									<i class="fa fa-trash-o"></i>
  								</div>
  							</li>
  							<li>
  								<span class="handle">
  									<i class="fa fa-ellipsis-v"></i>
  									<i class="fa fa-ellipsis-v"></i>
  								</span>
  								<input type="checkbox" value="">
  								<span class="text">Check your messages and notifications</span>
  								<small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
  								<div class="tools">
  									<i class="fa fa-edit"></i>
  									<i class="fa fa-trash-o"></i>
  								</div>
  							</li>
  							<li>
  								<span class="handle">
  									<i class="fa fa-ellipsis-v"></i>
  									<i class="fa fa-ellipsis-v"></i>
  								</span>
  								<input type="checkbox" value="">
  								<span class="text">Let theme shine like a star</span>
  								<small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
  								<div class="tools">
  									<i class="fa fa-edit"></i>
  									<i class="fa fa-trash-o"></i>
  								</div>
  							</li>
  						</ul>
  					</div>
  					<!-- /.box-body -->
  					<div class="box-footer clearfix no-border">
  						<button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
  					</div>
  				</div>
  				<!-- /.box -->

  				<!-- quick email widget -->


  			</section>
  			<!-- /.Left col -->
  			<!-- right col (We are only adding the ID to make the widgets sortable)-->
  			<section class="col-lg-5 connectedSortable">

  				<!-- Map box -->

  				<!-- /.box -->

  				<!-- solid sales graph -->

  				<!-- /.box -->

  				<!-- Calendar -->
  				<div class="box box-solid bg-green-gradient">
  					<div class="box-header">
  						<i class="fa fa-calendar"></i>

  						<h3 class="box-title">Calendar</h3>
  						<!-- tools box -->
  						<div>
  							<div class="datepicker datepicker-inline">
  								<div class="datepicker-days" style="">
  									<table class="table-condensed">
  										<thead>
  											<tr>
  												<th colspan="7" class="datepicker-title" style="display: none;"></th>
  											</tr>
  											<tr>
  												<th class="prev">«</th>
  												<th colspan="5" class="datepicker-switch">{{date('d/m/y')}} </th>
  												<th class="next">»</th>
  											</tr>
  											<tr>
  												<th class="dow">Su</th>
  												<th class="dow">Mo</th>
  												<th class="dow">Tu</th>
  												<th class="dow">We</th>
  												<th class="dow">Th</th>
  												<th class="dow">Fr</th>
  												<th class="dow">Sa</th>
  											</tr>
  										</thead>
  										<tbody>
  											<tr>
  												@for($i=24;$i<31;$i++) <td class="day" data-date="1584230400000">{{$i}}</td>

  													@endfor

  											</tr>
  											<tr>
  												@for($i=1;$i<8;$i++) <td class="day" data-date="1584230400000">{{$i}}</td>

  													@endfor

  											</tr>
  											<tr>
  												@for($i=8;$i<15;$i++) <td class="day" data-date="1584230400000">{{$i}}</td>

  													@endfor

  											</tr>
  											<tr>
  												@for($i=15;$i<22;$i++) <td class="day" data-date="1584230400000">{{$i}}</td>

  													@endfor

  											</tr>
  											<tr>
  												@for($i=22;$i<29;$i++) <td class="day" data-date="1584230400000">{{$i}}</td>

  													@endfor

  											</tr>
  											<tr>
  												@for($i=29;$i<31;$i++) <td class="day" data-date="1584230400000">{{$i}}</td>

  													@endfor

  													<td class="new day" data-date="1585699200000">1</td>
  													<td class="new day" data-date="1585785600000">2</td>
  													<td class="new day" data-date="1585872000000">3</td>
  													<td class="new day" data-date="1585958400000">4</td>
  											</tr>
  										</tbody>
  										<tfoot>
  											<tr>
  												<th colspan="7" class="today" style="display: none;">Today</th>
  											</tr>
  											<tr>
  												<th colspan="7" class="clear" style="display: none;">Clear</th>
  											</tr>
  										</tfoot>
  									</table>
  								</div>
  								<div class="datepicker-months" style="display: none;">
  									<table class="table-condensed">
  										<thead>
  											<tr>
  												<th colspan="7" class="datepicker-title" style="display: none;"></th>
  											</tr>
  											<tr>
  												<th class="prev">«</th>
  												<th colspan="5" class="datepicker-switch">2020</th>
  												<th class="next">»</th>
  											</tr>
  										</thead>
  										<tbody>
  											<tr>
  												<td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month focused">Mar</span><span class="month">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td>
  											</tr>
  										</tbody>
  										<tfoot>
  											<tr>
  												<th colspan="7" class="today" style="display: none;">Today</th>
  											</tr>
  											<tr>
  												<th colspan="7" class="clear" style="display: none;">Clear</th>
  											</tr>
  										</tfoot>
  									</table>
  								</div>
  								<div class="datepicker-years" style="display: none;">
  									<table class="table-condensed">
  										<thead>
  											<tr>
  												<th colspan="7" class="datepicker-title" style="display: none;"></th>
  											</tr>
  											<tr>
  												<th class="prev">«</th>
  												<th colspan="5" class="datepicker-switch">2020-2029</th>
  												<th class="next">»</th>
  											</tr>
  										</thead>
  										<tbody>
  											<tr>
  												<td colspan="7"><span class="year old">2019</span><span class="year focused">2020</span><span class="year">2021</span><span class="year">2022</span><span class="year">2023</span><span class="year">2024</span><span class="year">2025</span><span class="year">2026</span><span class="year">2027</span><span class="year">2028</span><span class="year">2029</span><span class="year new">2030</span></td>
  											</tr>
  										</tbody>
  										<tfoot>
  											<tr>
  												<th colspan="7" class="today" style="display: none;">Today</th>
  											</tr>
  											<tr>
  												<th colspan="7" class="clear" style="display: none;">Clear</th>
  											</tr>
  										</tfoot>
  									</table>
  								</div>
  								<div class="datepicker-decades" style="display: none;">
  									<table class="table-condensed">
  										<thead>
  											<tr>
  												<th colspan="7" class="datepicker-title" style="display: none;"></th>
  											</tr>
  											<tr>
  												<th class="prev">«</th>
  												<th colspan="5" class="datepicker-switch">2000-2090</th>
  												<th class="next">»</th>
  											</tr>
  										</thead>
  										<tbody>
  											<tr>
  												<td colspan="7"><span class="decade old">1990</span><span class="decade">2000</span><span class="decade">2010</span><span class="decade focused">2020</span><span class="decade">2030</span><span class="decade">2040</span><span class="decade">2050</span><span class="decade">2060</span><span class="decade">2070</span><span class="decade">2080</span><span class="decade">2090</span><span class="decade new">2100</span></td>
  											</tr>
  										</tbody>
  										<tfoot>
  											<tr>
  												<th colspan="7" class="today" style="display: none;">Today</th>
  											</tr>
  											<tr>
  												<th colspan="7" class="clear" style="display: none;">Clear</th>
  											</tr>
  										</tfoot>
  									</table>
  								</div>
  								<div class="datepicker-centuries" style="display: none;">
  									<table class="table-condensed">
  										<thead>
  											<tr>
  												<th colspan="7" class="datepicker-title" style="display: none;"></th>
  											</tr>
  											<tr>
  												<th class="prev">«</th>
  												<th colspan="5" class="datepicker-switch">2000-2900</th>
  												<th class="next">»</th>
  											</tr>
  										</thead>
  										<tbody>
  											<tr>
  												<td colspan="7"><span class="century old">1900</span><span class="century focused">2000</span><span class="century">2100</span><span class="century">2200</span><span class="century">2300</span><span class="century">2400</span><span class="century">2500</span><span class="century">2600</span><span class="century">2700</span><span class="century">2800</span><span class="century">2900</span><span class="century new">3000</span></td>
  											</tr>
  										</tbody>
  										<tfoot>
  											<tr>
  												<th colspan="7" class="today" style="display: none;">Today</th>
  											</tr>
  											<tr>
  												<th colspan="7" class="clear" style="display: none;">Clear</th>
  											</tr>
  										</tfoot>
  									</table>
  								</div>
  							</div>

  						</div>

  						<div class="pull-right box-tools">
  							<!-- button with a dropdown -->
  							<div class="btn-group">
  								<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
  									<i class="fa fa-bars"></i></button>
  								<ul class="dropdown-menu pull-right" role="menu">
  									<li><a href="#">Add new event</a></li>
  									<li><a href="#">Clear events</a></li>
  									<li class="divider"></li>
  									<li><a href="#">View calendar</a></li>
  								</ul>
  							</div>
  							<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
  							</button>
  							<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
  							</button>
  						</div>
  						<!-- /. tools -->
  					</div>
  					<!-- /.box-header -->
  					<div class="box-body no-padding">
  						<!--The calendar -->
  						<div id="calendar" style="width: 100%"></div>
  					</div>
  					<!-- /.box-body -->
  					<div class="box-footer text-black">
  						<div class="row">
  							<div class="col-sm-6">
  								<!-- Progress bars -->
  								<div class="clearfix">
  									<span class="pull-left">Task #1</span>
  									<small class="pull-right">90%</small>
  								</div>
  								<div class="progress xs">
  									<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
  								</div>

  								<div class="clearfix">
  									<span class="pull-left">Task #2</span>
  									<small class="pull-right">70%</small>
  								</div>
  								<div class="progress xs">
  									<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
  								</div>
  							</div>
  							<!-- /.col -->
  							<div class="col-sm-6">
  								<div class="clearfix">
  									<span class="pull-left">Task #3</span>
  									<small class="pull-right">60%</small>
  								</div>
  								<div class="progress xs">
  									<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
  								</div>

  								<div class="clearfix">
  									<span class="pull-left">Task #4</span>
  									<small class="pull-right">40%</small>
  								</div>
  								<div class="progress xs">
  									<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
  								</div>
  							</div>
  							<!-- /.col -->
  						</div>
  						<!-- /.row -->
  					</div>
  				</div>
  				<!-- /.box -->

  			</section>
  			<!-- right col -->
  		</div>
  		<!-- /.row (main row) -->

  	</section>
  	<!-- /.content -->
  </div>

  @endsection