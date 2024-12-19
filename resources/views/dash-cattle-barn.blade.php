<x-app-layout>
    {{--新規牛舎--}}
    <x-dash-register-with-ranch :ranchArray="$ranchArray" title="牛舎" name="cattle_barn" route="add_cattle_barn"/>

    {{--登録済 牛舎一覧--}}
    <x-dash-list-table-2 :dataArray="$dataArray" tableTitle="牛舎名" title="牛舎" route="cattle_barn"/>
</x-app-layout>
