<x-app-layout>
    {{--新規牧場--}}
    <x-dash-register-data title="新規牧場登録" route="add_ranch" placeholder="牧場名"/>

    {{--登録済 牧場一覧--}}
    <x-dash-list-table :dataArray="$dataArray" tableTitle="牧場名" title="牧場" route="ranch"/>
</x-app-layout>
