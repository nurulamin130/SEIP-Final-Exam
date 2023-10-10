

@extends('front-end.master')

@section('content')

    @foreach($blogs as $blog)

    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{ asset('front-end-assets') }}/images/hero_5.jpg');">
        <div class="container">

            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">Don’t assume your user data in the cloud is safe</h1>
                        <h1 class="mb-4">  {{ $blog->title }}</h1>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 me-3 d-inline-block"><img src="{{ asset($blog->image) }}" alt="Image" class="img-fluid"></figure>
                            <span class="d-inline-block mt-1"> {{$blog->author_name}}</span>
                            <span>&nbsp;-&nbsp;{{ date('j F ,Y', strtotime($blog->date)) }}</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row blog-entries element-animate">

                <div class="col-md-12 col-lg-8 main-content">

                    <div class="post-content-body">


                        <p>Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut?
                            Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur
                            quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque
                            voluptatem. Commodi, sequi.</p>

                        <h1> {{$blog->category->category_name}}</h1>

                        <div class="row my-4">
                            <div class="col-md-12 mb-4">
                                <img src="{{ asset($blog->image) }}" alt="Image placeholder" class="img-fluid rounded">
                            </div>

                        </div>
                        <p>Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat tenetur veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa quidem. Quo voluptate quisquam reiciendis, minus, animi minima eum officia doloremque repellat eos, odio doloribus cum.</p>

                        <h1> {{$blog->description}}</h1>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magni explicabo id molestiae, minima quas assumenda consectetur, nobis neque rem, incidunt quam tempore perferendis provident obcaecati sapiente, animi vel expedita omnis quae ipsa! Obcaecati eligendi sed odio labore vero reiciendis facere accusamus molestias eaque impedit, consequuntur quae fuga vitae fugit?</p>

                    </div>







                </div>

                <!-- END main-content -->


                <!-- END sidebar -->

            </div>
        </div>
    </section>


    @endforeach





@endsection
