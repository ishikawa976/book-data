<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           一覧表示
        </h2>
    </x-slot>
    <div class="flex flex-col justify-center mt-5 mx-10 space-y-5 text-lg font-bold" >
        @if(session('message'))
            <div class="text-red-600 font-bold">
                {{session('message')}}
            </div>
        @endif
        <!--検索機能ここから-->
        <div>
            <form method="GET" action="{{ route('book.index') }}" >
                <input type="text" name="keyword" value="{{ $keyword }}">
                <x-primary-button class="my-4 mx-20">
                    検索
                </x-primary-button>
            </form>
        </div>
        <!--検索機能ここまで-->
        
        @foreach($books as $book)
            <div class="bg-white px-5 py-5">
                <div class="border-b text-2xl">
                    <a href="{{route('book.show', $book)}}" class="text-blue-600">
                        {{$book->title}}
                    </a>
                </div>
                <div  class="flex flex-row mt-5 space-x-10 text-xl">
                    <p>{{$book->author}}</p>
                    <p>{{$book->publish}}</p>
                    <p>{{$book->publish_year}}年{{$book->publish_month}}月</p>
                    <p>{{$book->isbn}}</p>
                    <p>{{$book->status}}</p>
                </div>
            </div>
        @endforeach
        <div class="mb-4">
            {{ $books->links() }}
        </div>
    </div>
</x-app-layout>