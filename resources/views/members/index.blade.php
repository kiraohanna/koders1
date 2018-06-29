@extends('layouts.app')

@section('content')

        <!--anna-->
        <div>
            <a href="{!! link_to_route('anna') !!}"><img src="{{ secure_asset("pictures/annie.jpg") }}" alt="アンナ"></a>
        </div>
        <div>
            <a href="{!! link_to_route('anna') !!}"><img src="{{ secure_asset("pictures/kanna.jpg") }}" alt="カンナ"></a>
        </div>
        <div>
            <a href="{!! link_to_route('anna') !!}"><img src="{{ secure_asset("pictures/daiki.jpg") }}" alt="だいき"></a>
        </div>
        <div>
            <a href="{!! link_to_route('anna') !!}"><img src="{{ secure_asset("pictures/shingo.jpg") }}" alt="しんご"></a>
        </div>
        <div>
            <a href="{!! link_to_route('anna') !!}"><img src="{{ secure_asset("pictures/shungo.jpg") }}" alt="しゅんご"></a>
        </div>
        <div>
            <a href="{!! link_to_route('anna') !!}"><img src="{{ secure_asset("pictures/hisashi.jpg") }}" alt="ひさし"></a>
        </div>
        
           
@endsection