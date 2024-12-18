<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           書籍データ
        </h2>
    </x-slot>
    <div class="flex flex-col justify-center mt-5 mx-20 text-lg font-bold">
        <div class="bg-white mt-5 mt-5 px-5 py-5">
            <div class="border-b text-2xl">
                {{$book->title}}
            </div>
            <div class="text-right flex">
                <a href="{{route('book.edit', $book)}}" class="flex-1">
                    <x-primary-button>
                        編集
                    </x-primary-button>
                </a>
                <form method="post" action="{{route('book.destroy', $book)}}" class="flex-2">
                    @csrf
                    @method('delete')
                        <x-primary-button class="bg-red-700 ml-2">
                            削除
                        </x-primary-button>
                </form>
            </div>
            <div>
                <table class="w-full mt-5">
                    <tbody>
                        <tr class="px-5">
                            <td class="border border-slate-700 px-5 py-1">著作者</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->author}}</td>
                        </tr>
                        <tr>
                            <td class="border border-slate-700 px-5 py-1">出版社</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->publish}}</td>
                        </tr>
                        <tr>
                            <td class="border border-slate-700 px-5 py-1">発行年月</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->publish_year}}年{{$book->publish_month}}月</td>
                        </tr>
                        @if($book->isbn !== null)
                            <tr>
                                <td class="border border-slate-700 px-5 py-1">ISBN</td>
                                <td class="border border-slate-700 px-5 py-1">{{$book->isbn}}</td>
                            </tr>
                        @endif
                         <tr>
                            <td class="border border-slate-700 px-5 py-1">判型</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->book_size}}</td>
                        </tr>
                         @if($book->purchase_date !== null)
                        <tr>
                            <td class="border border-slate-700 px-5 py-1">購入日</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->purchase_date}}</td>
                        </tr>
                         @endif
                        <tr>
                            <td class="border border-slate-700 px-5 py-1">現状</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->status}}</td>
                        </tr>
                        @if($book->status === '処分済')
                            <tr>
                                <td class="border border-slate-700 px-5 py-1">処分日</td>
                                <td class="border border-slate-700 px-5 py-1">{{$book->disposal_date}}</td>
                             </tr>
                             <tr>
                                <td class="border border-slate-700 px-5 py-1">処分方法</td>
                                <td class="border border-slate-700 px-5 py-1">{{$book->disposal_type}}</td>
                             </tr>
                        @endif
                        <tr>
                            <td class="border border-slate-700 px-5 py-1">登録日</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->created_at}}</td>
                        </tr>
                        <tr>
                            <td class="border border-slate-700 px-5 py-1">更新日</td>
                            <td class="border border-slate-700 px-5 py-1">{{$book->updated_at}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>