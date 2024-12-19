<x-app-layout>
    {{--新規種牛--}}
    <section class="flex flex-col items-center justify-center gap-4 py-4">
        <h2 class="text-base pb-4 md:text-xl font-semibold text-gray-800">新規種牛登録</h2>
        <form action="{{ route("add_parent_cow") }}" method="post" class="flex flex-col gap-4">
            @csrf
            <select name="ranch_id" class="md:flex-1 md:m-0 m-6">
                @if(count($ranchArray)<1)
                    <option value="">牧場が登録されていません</option>
                @else
                    @foreach($ranchArray as $ranch)
                        <option value="{{$ranch["id"]}}">{{$ranch["name"]}}</option>
                    @endforeach
                @endif
            </select>
            <input placeholder="新規種牛名" type="text" name="name">
            <button type="submit" class="bg-gray-800 text-white rounded-lg p-2">登録</button>
        </form>
    </section>

    {{--登録済 種牛一覧--}}
    <x-dash-list-table-2 :dataArray="$dataArray" tableTitle="種牛名" title="種牛" route="parent_cow"/>
</x-app-layout>
