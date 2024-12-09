<x-app-layout>
    {{--新規牧場--}}
    <x-dash-register-data title="新規牛舎登録" route="add_cattle_barn" placeholder="牛舎名"/>

    {{--登録済 牧場一覧--}}
    <x-dash-list-table :dataArray="$dataArray" tableTitle="牛舎名" title="牛舎" route="cattle_barn"/>
</x-app-layout>
