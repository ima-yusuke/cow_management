<section class="flex flex-col items-center justify-center py-4">
    <h2 class="text-base pb-4 md:text-xl font-semibold text-gray-800">登録済 {{$title}}一覧</h2>
    <table class="table-auto w-[90%]">
        <thead>
        <tr>
            <th class="text-start border px-4 py-2 bg-gray-700 text-white">牧場名</th>
            <th class="text-start border px-4 py-2 bg-gray-700 text-white">{{$tableTitle}}</th>
            <th class="px-4 py-2 border bg-gray-700 text-white">編集</th>
            <th class="px-4 py-2 border bg-gray-700 text-white">削除</th>
        </tr>
        </thead>
        <tbody>
        @foreach($dataArray as $data)
            <tr>
                <form method="post" action="{{route("update_$route")}}" class="updateForm">
                    @csrf
                    @method('patch')
                    <td class="border px-4 py-2 w-[40%]">
                        <p data-id="{{$data->ranch["id"]}}">{{$data->ranch["name"]}}</p>
                        <select name="ranch_id" class="hidden newSelect">
                            @foreach($ranchArray as $ranch)
                                <option value="{{$ranch["id"]}}">{{$ranch["name"]}}</option>
                            @endforeach
                        </select>
                        <input class="hidden" name="id" value="{{$data["id"]}}">
                    </td>
                    <td class="border px-4 py-2 w-[40%]">
                        <p>{{$data->name}}</p>
                        <input type="text" name="name" class="hidden newName">
                    </td>
                </form>

                <td class="border px-4 py-2 md:w-[10%]">
                    <div class="flex justify-center">
                        <button type="button" class="bg-gray-800 text-white rounded-lg p-2 editBtn2 flex-shrink-0">編集</button>
                    </div>
                </td>
                <td class="border px-4 py-2 w-[10%]">
                    <form method="post" action="{{route("delete_$route")}}" class="flex justify-center">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <button type="submit" class="bg-gray-800 text-white rounded-lg p-2 flex-shrink-0">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
