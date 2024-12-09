<section class="flex flex-col items-center justify-center gap-4 py-4">
    <h2 class="text-base pb-4 md:text-xl font-semibold text-gray-800">{{$title}}</h2>
    <form action="{{ route($route) }}" method="post" class="flex flex-col gap-4">
        @csrf
        <input placeholder="{{$placeholder}}" type="text" name="name">
        <button type="submit" class="bg-gray-800 text-white rounded-lg p-2">登録</button>
    </form>
</section>
