 @extends('admin.layout.index')

@section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>{{$slide->Ten}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">

                         @if(count($errors)>0)
                        
                              <div class="alert alert-danger" > 
                            @foreach($errors ->all() as $err )
                               {{$err}} <br>

                            @endforeach
                        </div>
                      
                         @endif

                            @if(session('thongbao'))
                            <div  class="alert alert-success" >
                            {{session('thongbao')}}

                            </div>

                         @endif

                        <form action="admin/slide/sua/{{$slide->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                           
                           <div class="form-group">
                                <label> Tên Slide</label>
                                <input class="form-control" name="Ten" placeholder="{{$slide->Ten}}" />
                            </div>
                            <div class="form-group">
                                <label>Hình</label>
                                <input class="form-control" name="Hinh" placeholder="{{$slide->Hinh}}" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <input class="form-control" name="NoiDung" placeholder="{{$slide->NoiDung}}" />
                            </div>
                             <div class="form-group">
                                <label>Link Ảnh</label>
                                <input class="form-control" name="link" placeholder="" />
                            </div>
                           
                            </div>
                            <button type="submit" class="btn btn-default">Lưu</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection 