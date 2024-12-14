<x-app-layout>
    {{--新規ステータス--}}
    <x-dash-register-data title="新規状態登録" route="add_status" placeholder="状態"/>

    {{--登録済 ステータス一覧--}}
    <x-dash-list-table :dataArray="$dataArray" tableTitle="状態名" title="状態" route="status"/>
</x-app-layout>
