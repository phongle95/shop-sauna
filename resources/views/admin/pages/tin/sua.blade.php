@extends('admin.menu.master')
@section('noidung')
<div class="row">
   <div class="col-md-12">
      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      <!-- DATA TABLE -->
      <div class="card">
         <div class="card-header">
            <strong>Sửa Tin Tức</strong>
         </div>
         <div class="card-body card-block">
            <form action="{{ route('admin.pages.tin.sua',$tin->id) }}"  enctype="multipart/form-data" method="POST" class="form-horizontal">
               <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tiêu Đề</label><br><br>
                     <input type="text" id="text-input" name="tieuDe" value="{{ $tin->tieuDe }}" placeholder="Nhập tiêu đề" class="form-control">
                  </div>
               </div>

               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Tóm Tắt</label><br>
                     <input type="text" id="text-input" name="tomTat" value="{{ $tin->tomTat }}" placeholder="Nhập tóm tắt" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Keyword Meta (SEO)</label><br>
                     <input type="text" id="text-input" name="keyword" value="{{ $tin->keyword }}" placeholder="Nhập Keyword" class="form-control">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Chọn Hình (1280px - 500px)</label><br>
                     <input type="file" style="width:200px" name="img">
                  </div>
                  <div class="col-12 col-md-6">
                     <label class="badge badge-info">Hình Củ</label><br>
                     <img src="/upload/{{ $tin->img }}" width="200px" height="150px" alt="salme">
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Chọn Ngày</label><br><br><br>
                     <input type="date" name="date" value="{{ $tin->date }}">
                     <br><br>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Nội Dung Tin Tức</label><br>
                     <textarea  id="editor1" rows="5" placeholder="Nhập nội dung" class="form-control" name="noiDung">{{ $tin->noiDung }}</textarea>
                  </div>
               </div>
               <div class="row form-group">
                  <div class="col-12 col-md-12">
                     <label class="badge badge-info">Mã Tin Tức</label><br>
                     <select name="maLoaiTin" class="form-control">
                     @foreach ($loaitin as $lt)
                     <option  @if($tin->maLoaiTin == $lt->id) {{ "selected" }} @endif value="{{ $lt->id }}">{{ $lt->tenLoaiTin }}</option>
                     @endforeach
                     </select>
                  </div>
               </div>
               <div class="card-footer">
                  <button type="submit" class="btn btn-success btn-fw">
                  Sửa
                  </button>
                  <a href="{{ route('admin.pages.tin.danhsach') }}" class="btn btn-info btn-fw">
                  Quay về
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
