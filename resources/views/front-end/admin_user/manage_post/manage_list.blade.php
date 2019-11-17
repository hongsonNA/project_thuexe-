@extends('front-end.admin_user.layout_user.main')
@section('content')
    <style>.fc-add {background: #f0f0f0;padding: 10px 30px 10px 30px;}  .card-header {display: flex;justify-content: space-between;}</style>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Simple Table</h4>
                        <a href="#" class="text-right fc-add card-title"><a href="{{ route('add_vehicles') }}" class="text-right fc-add card-title"><span><i class="fas fa-plus"></i>
    </span>Them moi</a></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                            <table class="table">
                                <thead class=" text-primary">
                                <th>1</th>
                                <th>
                                    Tên Xe
                                </th>
                                <th>
                                    Hình ảnh
                                </th>
                                <th>
                                    trang thai
                                </th>
                                <th class="text-right">
                                    Thao tác
                                </th>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($manage as $key => $id)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>
                                        {{ $id->name }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('image_upload/img_vehicle/'.$id->image) }}" alt="" width="100">
                                    </td>
                                    <td>
                                        @if($id->status == 1)
                                            <span>đang chờ...</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a type="button" href="{{ route('edit_vehicles', $id->id) }}" class="btn btn-success">Sua</a>
                                        <a onclick="return confirm('Xoa muuc nay')" type="button" href="{{ route('remote', $id->id) }}" class="btn btn-danger">Xoa</a>
                                    </td>

                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
          <!-- col 12 -->
        </div>
    </div>
@endsection
