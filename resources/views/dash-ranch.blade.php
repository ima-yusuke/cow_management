<x-app-layout>

    {{--新規牧場--}}
    <x-dash-register-data title="新規牧場登録" route="add_ranch" placeholder="牧場名"/>

    {{--登録済 牧場一覧--}}
    <section class="flex flex-col items-center justify-center py-4">
        <h2 class="text-base pb-4 md:text-xl font-semibold text-gray-800">登録済 牧場一覧</h2>
        <table class="table-auto w-[90%]">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-start">牧場名</th>
                    <th class="px-4 py-2">編集</th>
                    <th class="px-4 py-2">削除</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataArray as $data)
                    <tr>
                        <td class="border px-4 py-2 w-[80%]">
                            <p>{{$data->name}}</p>
                            <form method="post" action="{{route("update_ranch")}}" class="flex justify-center">
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
                            <form method="post" action="{{route("delete_ranch")}}" class="flex justify-center">
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
    </section>

    {{--JS--}}
{{--    @vite(['resources/js/admin/dash-category.js'])--}}
</x-app-layout>
