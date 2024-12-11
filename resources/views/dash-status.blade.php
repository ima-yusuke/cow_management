<x-app-layout>
    {{--新規ステータス--}}
    <x-dash-register-data title="新規ステータス登録" route="add_status" placeholder="ステータス"/>

    {{--登録済 ステータス一覧--}}
    <x-dash-list-table :dataArray="$dataArray" tableTitle="ステータス名" title="ステータス" route="status"/>
</x-app-layout>
