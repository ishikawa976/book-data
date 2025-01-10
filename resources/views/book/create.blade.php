<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           新規登録
        </h2>
    </x-slot>
        <div class="mt-4 text-lg font-bold">
            <form method="post" action="{{ route('book.store') }}" >
                @csrf
            <div class="bg-white mx-20 my-4">
                <div class="mx-5 my-5 grid grid-cols-2 gap-5">
                    <label for="title" class="flex items-center">書名（必須）</label>
                    <div>
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        <input type="text" name="title" class="mt-4 w-full" id="title" value="{{old('title')}}">
                    </div>
                    <label for="author">著者名（必須）</label>
                    <div>
                        <x-input-error :messages="$errors->get('author')" class="mt-2" />
                        <input type="text" name="author" class="w-full" id="author" value="{{old('author')}}">
                    </div>
                    <label for="publish">出版社（必須）</label>
                    <div>
                        <x-input-error :messages="$errors->get('publish')" class="mt-2" />
                        <input type="text" name="publish" class="w-full" id="publish" value="{{old('publish')}}">
                    </div>
                    <label for="publish_year">出版年（必須）</label>
                    <div>
                        <x-input-error :messages="$errors->get('publish_year')" class="mt-2" />
                        <input type="text" name="publish_year" class="w-full" id="publish_year" value="{{old('publish_year')}}">
                    </div>
                    <label for="publish_month">出版月（必須）</label>
                    <div>
                        <x-input-error :messages="$errors->get('publish_month')" class="mt-2" />
                        <select type="text" name="publish_month" class="w-full" id="publish_month">
                            <option></option>
                             @for ($i = 1; $i <= 12; $i++)
                                <option value = {{ $i }} @if(old('publish_month') == $i) selected @endif>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <label for="isbn">ISBN</label> 
                    <div>
                        <x-input-error :messages="$errors->get('isbn')" class="mt-2" />
                        <input type="text" name="isbn" class="w-full" id="isbn" value="{{old('isbn')}}">
                    </div>
                    <label for="book_size">判型（必須）</label>
                    <div>
                        <x-input-error :messages="$errors->get('book_size')" class="mt-2" />
                        <select type="text" name="book_size" class="w-full" id="book_size">
                            <option></option>
                            @foreach (Config::get('pulldown.book_size') as $key => $val)
                                <option value="{{ $key }}" @if(old('book_size')== $key) selected @endif>{{ $val }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="purchase_date">購入日</label>
                    <div>
                        <x-input-error :messages="$errors->get('purchase_date')" class="mt-2" />
                        <input type="date" name="purchase_date" class="w-full" id="purchase_date" value="{{old('purchase_date')}}"> 
                    </div>
                    <label for="status">現状（必須）</label>
                    <div>
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        <select type="text" name="status" class="w-full" id="status">
                            <option></option>
                            <option  value="所蔵" @if(old('status')=="所蔵") selected @endif>所蔵</option>
                            <option value="処分済" @if(old('status')=="処分済") selected @endif>処分済</option>
                        </select>
                    </div>
                    <label for="disposal_date">処分日</label>
                    <div>
                        <x-input-error :messages="$errors->get('disposal_date')" class="mt-2" />
                        <input type="date" name="disposal_date" class="w-full" id="disposal_date" value="{{old('disposal_date')}}"> 
                    </div>
                    <label for="disposal_type">処分方法</label>
                    <div>
                        <x-input-error :messages="$errors->get('disposal_type')" class="mt-2" />
                        <select type="text" name="disposal_type" class="w-full" id="disposal_type">
                            <option></option>
                            <option value="売却" @if(old('disposal_type')=="売却") selected @endif>売却</option>
                            <option  value="廃棄" @if(old('disposal_type')=="廃棄") selected @endif>廃棄</option>
                            <option value="その他" @if(old('disposal_type')=="その他") selected @endif>その他</option>
                        </select>
                    </div>
                    </div>
                </div>
        
                <x-primary-button class="my-4 mx-20">
                    登録
                </x-primary-button>
            
        </form>
    </div>
</x-app-layout>