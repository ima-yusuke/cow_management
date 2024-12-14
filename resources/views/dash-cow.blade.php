<x-app-layout>
    <form class="md:m-6 flex flex-col gap-6">
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
            <select name="sex" class="md:flex-1 md:m-0 m-6">
                <option value="0">オス</option>
                <option value="1">メス</option>
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="牧場">
            <select name="ranch" class="md:flex-1 md:m-0 m-6">
                @if(count($ranchArray)<1)
                    <option value="0">牧場が登録されていません</option>
                @else
                    @foreach($ranchArray as $ranch)
                        <option value="{{$ranch["id"]}}">{{$ranch["name"]}}</option>
                    @endforeach
                @endif
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="牛舎">
            <select name="cattle_barn" class="md:flex-1 md:m-0 m-6">
                @if(count($cattleBarnArray)<1)
                    <option value="0">牛舎が登録されていません</option>
                @else
                    @foreach($cattleBarnArray as $cattleBarn)
                        <option value="{{$cattleBarn["id"]}}">{{$cattleBarn["name"]}}</option>
                    @endforeach
                @endif
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="ステータス">
            <select name="status" class="md:flex-1 md:m-0 m-6">
                @if(count($statusArray)<1)
                    <option value="0">ステータスが登録されていません</option>
                @else
                    @foreach($statusArray as $status)
                        <option value="{{$status["id"]}}">{{$status["name"]}}</option>
                    @endforeach
                @endif
            </select>
        </x-dash-register-cow>

        <x-dash-register-cow title="親">
            <select name="parent" class="md:flex-1 md:m-0 m-6">
                <option value="0">中村</option>
                <option value="1">今井</option>
                <option value="2">平</option>
            </select>
        </x-dash-register-cow>
    </form>
</x-app-layout>
