<x-app-layout>
    <form method="post" action="{{route("add_cow")}}" class="md:m-6 flex flex-col gap-6">
        @csrf
        <x-dash-register-cow title="名号">
            <input type="text" name="name" class="md:flex-1 md:m-0 m-6" placeholder="工">
        </x-dash-register-cow>

        <x-dash-register-cow title="耳標番号">
            <input type="number" name="tag_num" class="md:flex-1 md:m-0 m-6" placeholder="5851">
        </x-dash-register-cow>

        <x-dash-register-cow title="生年月日">
            <input type="date" name="birthday" class="md:flex-1 md:m-0 m-6">
        </x-dash-register-cow>

        <x-dash-register-cow title="性別">
            <select name="sex" class="md:flex-1 md:m-0 m-6 sexSelect">
                <option value="0">オス</option>
                <option value="1">メス</option>
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="区分">
            <select name="category" class="md:flex-1 md:m-0 m-6 categorySelect">
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="牧場">
            <select name="ranch_id" class="md:flex-1 md:m-0 m-6" id="cow_ranch_select">
                @if(count($ranchArray)<1)
                    <option value="">牧場が登録されていません</option>
                @else
                    @foreach($ranchArray as $ranch)
                        <option value="{{$ranch["id"]}}">{{$ranch["name"]}}</option>
                    @endforeach
                @endif
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="牛舎">
            <select name="cattle_barn_id" class="md:flex-1 md:m-0 m-6" id="cow_cattle_barn_select">
                @if(count($cattleBarnArray)<1)
                    <option value="" disabled selected>牛舎が登録されていません</option>
                @endif
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="種牛">
            <select name="parent_id" class="md:flex-1 md:m-0 m-6" id="cow_parent_select">
                @if(count($parentArray)<1)
                    <option value="" disabled selected>種牛が登録されていません</option>
                @endif
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="状態">
            <select name="status_id" class="md:flex-1 md:m-0 m-6">
                @if(count($statusArray)<1)
                    <option value="" disabled selected>状態が登録されていません</option>
                @else
                    @foreach($statusArray as $status)
                        <option value="{{$status["id"]}}">{{$status["name"]}}</option>
                    @endforeach
                @endif
            </select>
        </x-dash-register-cow>

        <div class="flex justify-center">
            <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md">登録</button>
        </div>
    </form>
</x-app-layout>

<script>
    window.ranches = @json($ranchArray);
    window.cattleBarns = @json($cattleBarnArray);
    window.parents = @json($parentArray);
</script>
