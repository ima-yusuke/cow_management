<x-app-layout>
    {{--新規牧場--}}
    <x-dash-register-data title="新規牧場登録" route="add_ranch" placeholder="牧場名"/>

    {{--登録済 牧場一覧--}}
    <section class="flex flex-col items-center justify-center py-4">
        <h2 class="text-base pb-4 md:text-xl font-semibold text-gray-800">登録済 牧場一覧</h2>
        <x-dash-list-table :dataArray="$dataArray" title="牧場名" route="ranch"/>
    </section>
</x-app-layout>
