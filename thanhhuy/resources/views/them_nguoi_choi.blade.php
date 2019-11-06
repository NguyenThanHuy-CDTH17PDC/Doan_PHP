@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm người chơi</h4>
                <form>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="Nhập ID">
                    </div>
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" class="form-control" placeholder="Nhập nội dung">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="text" class="form-control" placeholder="Nhập lĩnh vực">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án A">
                    </div>
                    <div class="form-group">
                        <label>Hình đại diện</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án B">
                    </div>
                    <div class="form-group">
                        <label>Điểm cao nhất</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án C">
                    </div>
                    <div class="form-group">
                        <label>Credit</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án D">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection