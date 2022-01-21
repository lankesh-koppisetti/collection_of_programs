<div class="d-flex flex-row ">
    <img src="{{$userprofile}}" class="default_img" width="60" height="50"/> 
    <div>
        <div class="d-flex flex-row justify-content-between" >
            <div style="font-size: 18px;">
                {{ Auth::user()->name }}              
                <span style="color: #8d989f">@ {{ Auth::user()->name }}</span>   
            </div>
            <div>. . . .</div>
        </div>   

        <p class="mt-4">
            {{$info}}
        </p>
        <p class="mt-4">
            {{$info}}
        </p>

        @include('layout.reactions')
    </div>
</div>
