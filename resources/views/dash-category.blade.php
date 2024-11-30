<x-app-layout>
    {{--表示商品一覧--}}
    <div class="flex flex-col items-center w-full pt-12">
        <div class="flex justify-start w-[80%]">
            <h2 class="text-base pb-4 md:text-xl font-semibold text-gray-800">カテゴリー 一覧</h2>
        </div>
    </div>

    {{--JS--}}
    @vite(['resources/js/admin/dash-category.js'])
</x-app-layout>



