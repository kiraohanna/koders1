@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @include('members.index')
    @else
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Koders</h1>
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">member紹介ページにクリック</a>
            </div>
        </div>
    </div>
    @endif
@endsection

   
