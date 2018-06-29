@extends('layouts.app')

@section('content')

        <!--anna-->
        <div>
            <a href="{!!link_to_route ('members.anna')!!}"><img src="pictures/annie.jpg" alt="アンナ"></a>
        </div>
       
       <!--kanna-->
        <div>
            <a href="{!!link_to_route ('members.kanna')!!}"><img src="pictures/kanna.jpg" alt="カンナ"></a>
        </div>
       
       <!--shingo-->
        <div>
            <a href="{!!link_to_route ('members.shingo')!!}"><img src="pictures/shingo.jpg" alt="シンゴ"></a>
        </div>
       
       <!--shungo-->
        <div>
            <a href="{!!link_to_route ('members.shungo')!!}"><img src="pictures/shungo.jpg" alt="シュンゴ"></a>
        </div>
       
       <!--daiki-->
        <div>
            <a href="{!!link_to_route ('members.daiki')!!}"><img src="pictures/daiki.jpg" alt="ダイキ"></a>
        </div>
       
       <!--hisashi-->
        <div>
            <a href="{!!link_to_route ('members.hisashi')!!}"><img src="pictures/shisashi.jpg" alt="ヒサシ"></a>
        </div>
    </div>    
@endsection