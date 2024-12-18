<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           書籍データ更新
        </h2>
    </x-slot>
        <div class="mt-4 text-lg font-bold">
            <form method="post" action="{{ route('book.update', $book) }}" >
                @csrf
                @method('patch')
            <div class="bg-white mx-20 my-4">
                <div class="mx-5 my-5 grid grid-cols-2 gap-5">
                    <label for="title" class="flex items-center">書名</label>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    <input type="text" name="title" class="mt-4 w-full" id="title" value="{{old('title', $book->title)}}">
                    <label for="author">著者名</label>
                    <x-input-error :messages="$errors->get('author')" class="mt-2" />
                    <input type="text" name="author" class="mt-4 w-full" id="author" value="{{old('author', $book->author)}}">
                    <label for="publish">出版社</label>
                    <x-input-error :messages="$errors->get('publish')" class="mt-2" />
                    <input type="text" name="publish" class="w-auto py-2" id="publish" value="{{old('publish', $book->publish)}}">
                    <label for="publish_year">出版年</label>
                    <x-input-error :messages="$errors->get('publish_year')" class="mt-2" />
                    <input type="text" name="publish_year" class="w-20" id="publish_year" value="{{old('publish_year', $book->publish_year)}}">
                    <label for="publish_month">出版月</label>
                    <x-input-error :messages="$errors->get('publish_month')" class="mt-2" />
                    <select type="text" name="publish_month" class="w-20" id="publish_month">
                         @for ($i = 1; $i <= 12; $i++)
                            <option value = {{ $i }} @if(old('publish_month', $book->publish_month)== $i) selected @endif>{{ $i }}</option>
                        @endfor
                    </select>
                    <label for="isbn">ISBN</label>
                    <x-input-error :messages="$errors->get('isbn')" class="mt-2" />
                    <input type="text" name="isbn" id="isbn" value="{{old('isbn', $book->isbn)}}">
                    <label for="book_size">判型</label>
                    <x-input-error :messages="$errors->get('book_size')" class="mt-2" />
                    <select type="text" name="book_size" id="book_size">
                        <option></option>
                        @foreach (Config::get('pulldown.book_size') as $key => $val)
                            <option value="{{ $key }}" @if(old('book_size', $book->book_size)== $key) selected @endif>{{ $val }}</option>
                        @endforeach
                    </select>
                    <label for="purchase_date">購入日</label>
                    <x-input-error :messages="$errors->get('purchase_date')" class="mt-2" />
                    <input type="date" name="purchase_date" id="purchase_date" value="{{old('purchase_date', $book->purchase_date)}}"> 
                    <label for="status">現状</label>
                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    <select type="text" name="status" class="w-25" id="status">
                        <option value="所蔵" @if(old('status', $book->status)=="所蔵") selected @endif>所蔵</option>
                        <option value="処分済" @if(old('status', $book->status)=="処分済") selected @endif>処分済</option>
                    </select>
                        <label for="disposal_date">処分日</label>
                        <x-input-error :messages="$errors->get('disposal_date')" class="mt-2" />
                        <input type="date" name="disposal_date" id="disposal_date" value="{{old('disposal_date', $book->disposal_date)}}"> 
                        <label for="disposal_type">処分方法</label>
                        <x-input-error :messages="$errors->get('disposal_type')" class="mt-2" />
                        <select type="text" name="disposal_type" class="w-25" id="disposal_type">
                            <option></option>
                            <option value="売却" @if(old('disposal_type', $book->disposal_type)=="売却") selected @endif>売却</option>
                            <option  value="廃棄" @if(old('disposal_type', $book->disposal_type)=="廃棄") selected @endif>廃棄</option>
                            <option  value="その他" @if(old('disposal_type', $book->disposal_type)=="その他") selected @endif>その他</option>
                        </select>
                    </div>
                </div>
        
                <x-primary-button class="my-4 mx-20">
                    登録
                </x-primary-button>
            
        </form>
    </div>
</x-app-layout>