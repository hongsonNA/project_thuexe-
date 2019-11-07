<table id="datatables" class="table table-striped table-no-bordered table-hover"
       cellspacing="0" width="100%" style="width:100%">
    <thead>
    <tr>
        <th width="50px">ID</th>
        <th width="200px" class="text-center">Tên</th>
        <th class="text-right">Action</th>
    </tr>
    </thead>

    <tbody>

    @foreach($districts as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td class="text-center">{{ $d->name }}</td>
            <td class="text-right">
                <a href="">
                    <button type="button" rel="tooltip" class="btn btn-info btn-link"
                            data-original-title="" title="Sửa tài khoản">
                        <i class="material-icons">edit</i>
                    </button>
                </a>

                <a href="">
                    <button type="button" rel="tooltip" class="btn btn-danger btn-link"
                            data-original-title="" title="Xóa tài khoản">
                        <i class="material-icons">close</i>
                    </button>
                </a>

            </td>
        </tr>

    @endforeach
    </tbody>
</table>
