@extends('layouts.app')

@section('content')
@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Koders</h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">member紹介ページにクリック</a>
                @endif
                
            </div>
        </div>
    </div>
@endsection

   
