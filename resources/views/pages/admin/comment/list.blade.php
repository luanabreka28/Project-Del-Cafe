<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
    <thead>
        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">No</th>
            <th class="min-w-200px">Nama Customer</th>
            <th class="min-w-200px">Kritik</th>
            <th class="min-w-200px text-end">Actions</th>
        </tr>
    </thead>
    <tbody class="fw-bold text-gray-600">
        @foreach($collection as $item)
        <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td class=" pe-0">
                <span class="fw-bolder text-dark">{{ $item->user->name }}</span>
            </td>
            <td class=" pe-0">
                <span class="fw-bolder text-dark">{{ $item->comment }}</span>
            </td>
            <td class="text-end pe-0">
                <a href="javascript:;" onclick="handle_delete('{{route('admin.comment.destroy',$item->id)}}');" class="menu-link px-3">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $collection->links('theme.admin.pagination') }}