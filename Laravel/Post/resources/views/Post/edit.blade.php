@extends('Post.Layout.layout')
@extends('Post.navbar')

   @section('content')

   <div class="content">
    <div class="container">
        <div class="row">
            <div class="card card-body">
                <form action="{{route('post.update',$post)}}" method="post">
                    @method('PUT')

                    @include('Post.form')
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
