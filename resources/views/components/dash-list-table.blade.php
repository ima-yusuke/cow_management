<table class="table-auto w-[90%]">
    <thead>
    <tr>
        <th class="text-start border px-4 py-2 bg-gray-700 text-white">{{$title}}</th>
        <th class="px-4 py-2 border bg-gray-700 text-white">編集</th>
        <th class="px-4 py-2 border bg-gray-700 text-white">削除</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dataArray as $data)
        <tr>
            <td class="border px-4 py-2 w-[80%]">
                <p>{{$data->name}}</p>
                <form method="post" action="{{route("update_$route")}}" class="flex justify-start">
                    @csrf
                    @method('patch')
                    <input type="text" class="hidden" name="name">
                    <input class="hidden" name="id" value="{{$data["id"]}}">
                </form>
            </td>
            <td class="border px-4 py-2 w-[10%]">
                <div class="flex justify-center">
                    <button type="button" class="bg-gray-800 text-white rounded-lg p-2 editBtn">編集</button>
                </div>
            </td>
            <td class="border px-4 py-2 w-[10%]">
                <form method="post" action="{{route("delete_$route")}}" class="flex justify-center">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <button type="submit" class="bg-gray-800 text-white rounded-lg p-2">削除</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
