<x-user-layout>
    <section class="p-8 flex flex-col gap-8">
        <article class="flex justify-between items-center">
            <h1 class="text-4xl">基本情報</h1>
            <a href="{{route("show_list")}}" class="text-white bg-blue-500 px-4 py-2 rounded-lg shadow-xl">一覧へ戻る</a>
        </article>

        @php
            $categoryMap = [
                0 => '子',
                1 => '父',
                2 => '祖父',
                3 => '母',
                4 => '祖母',
            ];
        @endphp

        <article class="border-t border-l border-r border-solid border-gray-500 shadow-xl rounded-t-lg">
            <aside class="flex justify-between items-center bg-white p-4 rounded-t-lg border-b border-solid border-gray-500">
                <p><i class="fa-solid fa-cow text-4xl"></i></p>
                <p><i class="fa-solid fa-pen-to-square text-xl editCowDetail"></i></p>
            </aside>


            <aside>
                <x-cow-detail-row key="耳標番号" :value="$cowDetail['tag_num']" editFlag="{{false}}"/>
                <x-cow-detail-row key="名号" :value="$cowDetail['name']" editFlag="{{false}}"/>
                <x-cow-detail-row key="性別" :value="$cowDetail['sex'] == 0 ? 'オス' : 'メス'" editFlag="{{false}}"/>
                <x-cow-detail-row key="生年月日" :value="$cowDetail['birthday']" editFlag="{{false}}"/>
                <x-cow-detail-row key="区分"  :value="isset($categoryMap[$cowDetail['category']]) ? $categoryMap[$cowDetail['category']] : '不明'" editFlag="{{false}}"/>
                <x-cow-detail-row key="牧場" :value="$cowDetail->ranch['name']" editFlag="{{false}}"/>
                <x-cow-detail-row key="牛舎" :value="$cowDetail->cattle_barn['name']" editFlag="{{false}}"/>
                <x-cow-detail-row key="種牛" :value="$cowDetail->parent_cows['name']" editFlag="{{false}}"/>
                <x-cow-detail-row key="状態" :value="$cowDetail->status['name']" editFlag="{{false}}"/>
            </aside>
        </article>

        <article class="border-t border-l border-r border-solid border-gray-500 shadow-xl rounded-t-lg">
            <aside class="flex justify-between items-center bg-white p-4 rounded-t-lg border-b border-solid border-gray-500">
                <p><i class="fa-solid fa-cow text-4xl"></i></p>
                <p><button type="submit" class="bg-blue-500 px-4 py-2 rounded-lg text-white shadow-xl">更新</button></p>
            </aside>

            <x-cow-detail-row key="耳標番号" editFlag="{{true}}">
                <input type="number" value="{{$cowDetail['tag_num']}}" class="w-1/2">
            </x-cow-detail-row>
            <x-cow-detail-row key="名号" editFlag="{{true}}">
                <input type="text" value="{{$cowDetail['name']}}" class="w-1/2">
            </x-cow-detail-row>
            <x-cow-detail-row key="性別" editFlag="{{true}}">
                <select name="sex" class="w-1/2 sexSelect">
                    <option value="0" {{ $cowDetail['sex'] == 0 ? 'selected' : '' }}>オス</option>
                    <option value="1" {{ $cowDetail['sex'] == 1 ? 'selected' : '' }}>メス</option>
                </select>
            </x-cow-detail-row>
            <x-cow-detail-row key="生年月日" editFlag="{{true}}">
                <input type="date" value="{{$cowDetail['birthday']}}" class="w-1/2">
            </x-cow-detail-row>

            <x-cow-detail-row key="区分" editFlag="{{true}}">
                <select name="category" class="w-1/2 categorySelect">
                </select>
            </x-cow-detail-row>
            <x-cow-detail-row key="牧場" :value="$cowDetail->ranch['name']" editFlag="{{true}}"/>
            <x-cow-detail-row key="牛舎" :value="$cowDetail->cattle_barn['name']" editFlag="{{true}}"/>
            <x-cow-detail-row key="種牛" :value="$cowDetail->parent_cows['name']" editFlag="{{true}}"/>
            <x-cow-detail-row key="状態" :value="$cowDetail->status['name']" editFlag="{{true}}"/>
        </article>
    </section>
</x-user-layout>

<script>
    window.cowDetail = @json($cowDetail);
</script>
