@extends('layouts.app')

@section('title', 'Page Title')


@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="box">
                  <div class="text-white box-body bg-info py-60">
                    <div class="flexbox">
                      <a href="social.html#">
                        <img class="avatar avatar-xxl avatar-bordered" src="../../../images/avatar/6.jpg" alt="">
                      </a>
                      <div class="flex-grow pl-20">
                        <h4><a class="text-white" href="social.html#">IMAKULATE EYE CLINIC </a></h4>
                        <div><i class="fa fa-fw fa-map-marker w-20px"></i> 205 Old Lagos-Asaba Road</div>
                        <div><i class="fa fa-fw fa-phone w-20px"></i> 07037195145, 07055471105</div>
                        <div><i class="fa fa-fw fa-envelope w-20px"></i> info@imaculateeyeclinic.com</div>
                      </div>
                    </div>
                  </div>
                  {{-- <ul class="flexbox flex-justified text-center p-20">
                    <li class="br-1 border-light">
                      <span class="text-muted">Followers</span><br>
                      <span class="font-size-20">6.6K</span>
                    </li>
                    <li class="br-1 border-light">
                      <span class="text-muted">Following</span><br>
                      <span class="font-size-20">5148</span>
                    </li>
                    <li>
                      <span class="text-muted">Tweets</span><br>
                      <span class="font-size-20">2154</span>
                    </li>
                  </ul> --}}
                </div>
              </div>
          
              <div class="col-md-6 col-lg-8">
                <div class="media align-items-center py-30 bg-white">
                  <img class="avatar avatar-xxl" src="../../../images/avatar/7.jpg" alt="...">
                  <div class="media-body">
                    <h5> Smith</h5>
                    <p class="text-light font-size-12 my-3">Continually underwhelm stand-alone relationships via information. Dramatically productivate extensive process improvements for pandemic niches.</p>
                    <div class="gap-items font-size-16">
                      <a class="text-dark" href="social.html#"><i class="fa fa-twitter"></i></a>
                      <a class="text-dark" href="social.html#"><i class="fa fa-instagram"></i></a>
                      <a class="text-dark" href="social.html#"><i class="fa fa-facebook"></i></a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <!-- /.row -->
    </section>


    @endsection