@include('layouts.app_home')
<div class="container home">
    <div class="row "> 
        <div class="col-3">
       @include('layout.left_section')
        </div>
        <div class="col-5 border d-block p-0 " >
            
            @include('layout.middle_section')
        </div>
        <div class="col-4">
            @include('layout.right_section')
        </div>
    </div>
</div>