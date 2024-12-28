<x-user-layout>
    <section class="p-8 flex flex-col gap-8">
        <article class="flex justify-between items-center">
            <h1 class="text-4xl">基本情報</h1>
            <a href="{{route("show_list")}}" class="text-white bg-blue-500 px-4 py-2 rounded-lg">一覧へ戻る</a>
        </article>

        <article class="border-t border-l border-r border-solid border-gray-500 shadow-xl rounded-t-lg">
            <aside class="flex justify-between items-center bg-white p-4 rounded-t-lg border-b border-solid border-gray-500">
                <p><i class="fa-solid fa-cow text-4xl"></i></p>
                <p><i class="fa-solid fa-pen-to-square text-xl"></i></p>
            </aside>

            @php
                $categoryMap = [
                    0 => '子',
                    1 => '父',
                    2 => '祖父',
                    3 => '母',
                    4 => '祖母',
                ];
            @endphp
            <aside>
                <x-dash-cow-detail-row key="耳標番号" :value="$cowDetail['tag_num']"/>
                <x-dash-cow-detail-row key="名号" :value="$cowDetail['name']"/>
                <x-dash-cow-detail-row key="性別" :value="$cowDetail['sex'] == 0 ? 'オス' : 'メス'"/>
                <x-dash-cow-detail-row key="生年月日" :value="$cowDetail['birthday']"/>
                <x-dash-cow-detail-row key="区分"  :value="isset($categoryMap[$cowDetail['category']]) ? $categoryMap[$cowDetail['category']] : '不明'"/>
                <x-dash-cow-detail-row key="牧場" :value="$cowDetail->ranch['name']"/>
                <x-dash-cow-detail-row key="牛舎" :value="$cowDetail->cattle_barn['name']"/>
                <x-dash-cow-detail-row key="種牛" :value="$cowDetail->parent_cows['name']"/>
                <x-dash-cow-detail-row key="状態" :value="$cowDetail->status['name']"/>
            </aside>
        </article>
    </section>
</x-user-layout>
