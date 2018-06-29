@extends('layouts.app')

@section('content')
    @include('members.members', ['members' => $members])
    <div class = >    
        
        //anna
        <div>
            <a href="{{route ('members.anna')}}" image src="annie.jpg" alt="アンナ"></a>
        </div>
       
       //kanna
        <div>
            <a href="{{route ('members.kanna')}}" image src="kanna.jpg" alt="カンナ"></a>
        </div>
       
       //shingo
        <div>
            <a href="{{route ('members.shingo')}}" image src="shingo.jpg" alt="シンゴ"></a>
        </div>
       
       //shungo
        <div>
            <a href="{{route ('members.shungo')}}" image src="shungo.jpg" alt="シュンゴ"></a>
        </div>
       
       //daiki
        <div>
            <a href="{{route ('members.daiki')}}" image src="daiki.jpg" alt="ダイキ"></a>
        </div>
       
       //hisashi
        <div>
            <a href="{{route ('members.hisashi')}}" image src="hisashi.jpg" alt="ヒサシ"></a>
        </div>
    </div>    
@endsection