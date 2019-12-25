@extends('layouts.main')



@section('css')
    <style>
    .avatar-custom {
        -webkit-border-top-left-radius: 4px;
        -moz-border-top-left-radius: 4px;
        border-top-left-radius: 4px;
        -webkit-border-top-right-radius: 4px;
        -moz-border-top-right-radius: 4px;
        border-top-right-radius: 4px;
        -webkit-border-bottom-left-radius: 4px;
        -moz-border-bottom-left-radius: 4px;
        border-bottom-left-radius: 4px;
        -webkit-border-bottom-right-radius: 4px;
        -moz-border-bottom-right-radius: 4px;
        border-bottom-right-radius: 4px;
        background: #fafaf8;
        border: 1px solid #f2f2f0;
        display: block;
        position: absolute;
        top: 4px;
        z-index: 1;
    }
    .avatar-custom img {
        height: 80px !important;
        width: 80px !important;
    }
    .row.mx-0 {
        margin-left: 0 !important;
        margin-right:  0 !important;
    }
    .just .form-group {
        margin-left: unset !important ;
        margin-right: unset !important;
    }
    .expand-row {
        display: block !important;
    }
    .form-group.mx-0 {
        margin-left: 0 !important;
        margin-right:  0 !important;
    }
    </style>
@endsection

@php
    function getSession($session) {
        if(\Session::has($session)) {
            return Session::get($session);
        }
        return false;
    }
@endphp

@section('content')

@include('templates.template')


        <form action="{{ route('admin.user.update') }}" class="form-horizontal" method="post" >
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">    
       
            
         

        <section class="activity worker" data-user-id="" data-username="demo" data-status="stopped" data-sub-status="" data-stats="{}" data-config="{&quot;like&quot;:true,&quot;comment&quot;:false,&quot;follow&quot;:false,&quot;unfollow&quot;:false,&quot;schedule&quot;:null,&quot;scheduleTz&quot;:null,&quot;speed&quot;:&quot;slow&quot;,&quot;source&quot;:&quot;tag&quot;,&quot;mediaAge&quot;:&quot;&quot;,&quot;mediaType&quot;:&quot;&quot;,&quot;minimumLikes&quot;:0,&quot;maximumLikes&quot;:0,&quot;minComments&quot;:0,&quot;maxComments&quot;:0,&quot;userRelationFilter&quot;:&quot;&quot;,&quot;userProfileFilter&quot;:&quot;&quot;,&quot;minFollowers&quot;:0,&quot;maxFollowers&quot;:0,&quot;tagAndTag&quot;:false,&quot;locationAndTag&quot;:false,&quot;usernameAndTag&quot;:false,&quot;commentDontSpam&quot;:false,&quot;comments&quot;:[&quot;Brilliant one&quot;,&quot;Flawless&quot;,&quot;Aww sweet&quot;,&quot;This is sweet :)&quot;,&quot;Very nice! 😃&quot;,&quot;Impressive content!&quot;,&quot;Very cool!&quot;,&quot;Excellent!&quot;,&quot;So nice!&quot;,&quot;Pretty awesome :)&quot;,&quot;👍&quot;,&quot;Great post&quot;,&quot;Awesome&quot;,&quot;Good shot!&quot;,&quot;Perfect one!&quot;,&quot;Super cool :)&quot;,&quot;Pretty awesome&quot;,&quot;Wow like it!&quot;,&quot;Aw nice&quot;,&quot;This is terrific&quot;],&quot;followSource&quot;:&quot;media&quot;,&quot;followCycle&quot;:1000,&quot;followDontSpam&quot;:false,&quot;followNotPrivate&quot;:false,&quot;unfollowSource&quot;:&quot;db&quot;,&quot;unfollowCycle&quot;:1000,&quot;unfollowSmart&quot;:false,&quot;tags&quot;:[&quot;hungry&quot;,&quot;plot&quot;,&quot;sister&quot;,&quot;iphoneonly&quot;,&quot;tourism&quot;,&quot;ilovemyfollowers&quot;,&quot;dad&quot;,&quot;travelgram&quot;,&quot;tweegram&quot;,&quot;instapassport&quot;,&quot;sis&quot;,&quot;tiny&quot;,&quot;life&quot;,&quot;lunch&quot;,&quot;visiting&quot;,&quot;illustration&quot;,&quot;follow4follow&quot;,&quot;travel&quot;,&quot;young&quot;,&quot;style&quot;],&quot;locations&quot;:[],&quot;usernames&quot;:[],&quot;likeLimit&quot;:0,&quot;commentLimit&quot;:0,&quot;followLimit&quot;:0,&quot;unfollowLimit&quot;:0,&quot;timeLimit&quot;:&quot;&quot;,&quot;downtimeLimit&quot;:&quot;3h&quot;,&quot;stopTags&quot;:[],&quot;stopUsernames&quot;:[],&quot;stopKeywords&quot;:[]}" data-cat-states="{&quot;main&quot;:1,&quot;tags&quot;:1,&quot;autostop&quot;:1}">
           
            @include('layouts.head-data')

        <div class="activity-settings container">
            <div class="mt40 mb20">
                {{-- <a href="#" class="link-ajax mr10 js-btn-settings-expand">Expand all</a>
                <a href="#" class="link-ajax js-btn-settings-collapse">Collapse all</a> --}}
                <button class="btn btn-dark px-4" type="submit"> 
                    Save/Load settings    
                </button> 
            </div>
            


            {{-- Main action --}}

            @include('components.action')
            {{-- start tags --}}
            
            {{-- end tags --}}
            {{-- start filter --}}
           

            {{-- <a href="#" class="link-ajax text-small js-btn-settings-reset">
            Reset all settings to default values
        </a> --}}
        </div>
  
</section>

</form>

@include('modal.popup')
@include('modal.init')
@endsection