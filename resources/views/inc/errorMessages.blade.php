@if(session('errorMessage'))
    @section('rightsidebar')
        <section>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{session('errorMessage')}}
            </div>
        </section>
            
        @parent
    @endsection
@endif



    
