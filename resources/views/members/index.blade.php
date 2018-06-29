@extends('layouts.app')

@section('content')
   <p>daiki</p>
   
        
        <div>
            <a href="{!!link_to_route ('members.anna')}"><img src="pictures/annie.jpg" alt="アンナ">anna</a>
        </div>
       
       //kanna
        <div>
            <a href="{!!link_to_route ('members.kanna')}"><img src="pictures/kanna.jpg" alt="カンナ">kanna</a>
        </div>
       
       //shingo
        <div>
            <a href="{!!link_to_route ('members.shingo')}"><img src="pictures/shingo.jpg" alt="シンゴ">shingo</a>
        </div>
       
       //shungo
        <div>
            <a href="{!!link_to_route ('members.shungo')}"><img src="pictures/shungo.jpg" alt="シュンゴ">shungo</a>
        </div>
       
       //daiki
        <div>
            <a href="{!!link_to_route ('members.daiki')}"><img src="pictures/daiki.jpg" alt="ダイキ">daiki</a>
        </div>
       
       //hisashi
        <div>
            <a href="{!!link_to_route ('members.hisashi')}"><img src="pictures/shisashi.jpg" alt="ヒサシ">hisashi</a>
        </div>
    </div>    
@endsection