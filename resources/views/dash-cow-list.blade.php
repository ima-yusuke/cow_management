<x-app-layout>
    <section class="flex justify-center items-center">
        <table class="table-auto w-full">
            <thead>
            <tr>
                <th class="text-center border px-4 py-2 bg-gray-700 text-white">/</th>
                <th class="text-center border px-4 py-2 bg-gray-700 text-white">耳標番号</th>
                <th class="text-center border px-4 py-2 bg-gray-700 text-white">名号</th>
                <th class="text-center border px-4 py-2 bg-gray-700 text-white">性別</th>
                <th class="px-4 py-2 border bg-gray-700 text-white">詳細</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dataArray as $idx=>$data)
                <tr>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center">
                            {{$idx+1}}
                        </div>
                    </td>
                    <td class="border px-4 py-2 md:w-[10%]">
                        <div class="flex justify-center">
                            {{$data->tag_num}}
                        </div>
                    </td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center">
                            {{$data->name}}
                        </div>
                    </td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center">
                            @if($data->sex == 0)
                                オス
                            @else
                                メス
                            @endif
                        </div>
                    </td>
                    <td class="border px-4 py-2">
                        <form method="post" action="" class="flex justify-center">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <button type="submit" class="bg-gray-800 text-white rounded-lg p-2 flex-shrink-0">詳細</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
</x-app-layout>
