@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm câu hỏi</h4>
                <form>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" placeholder="Nhập ID">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input type="text" class="form-control" placeholder="Nhập nội dung">
                    </div>
                    <div class="form-group">
                        <label>Lĩnh vực</label>
                        <input type="text" class="form-control" placeholder="Nhập lĩnh vực">
                    </div>
                    <div class="form-group">
                        <label>Phương án A</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án A">
                    </div>
                    <div class="form-group">
                        <label>Phương án B</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án B">
                    </div>
                    <div class="form-group">
                        <label>Phương án C</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án C">
                    </div>
                    <div class="form-group">
                        <label>Phương án D</label>
                        <input type="text" class="form-control" placeholder="Nhập phương án D">
                    </div>
                    <div class="form-group">
                        <label>Đáp án</label>
                        <input type="text" class="form-control" placeholder="Nhập đáp án">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection