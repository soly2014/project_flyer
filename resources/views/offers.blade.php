@extends('layout.master')
@section('header.scripts')
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/adminstration/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="/adminstration/assets/admin/pages/css/portfolio-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->

@endsection
@section('content')
	







































      



      <!-- BEGIN PAGE CONTENT-->
      <div class="row">
        <div class="col-md-12">
                        <h2 class="text-center">جميع العروض</h2><br><br>

          <div class="tabbable-line boxless">

            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- BEGIN FILTER -->
                <div class="margin-top-10">
                  <div class="row mix-grid">


                    <div class="col-md-3 col-sm-4 mix category_1">
                      <div class="mix-inner">
                        <img class="img-responsive" src="/adminstration/assets/admin/pages/media/works/img1.jpg" alt="">
                        <div class="mix-details">
                          <h4>Cascusamus et iusto odio</h4>
                          <a class="mix-link">
                          <i class="fa fa-link"></i>
                          </a>
                          <a class="mix-preview fancybox-button" href="/adminstration/assets/admin/pages/media/works/img2.jpg" title="Project Name" data-rel="fancybox-button">
                          <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>

               @foreach($photos as $photo)
                    <div class="col-md-3 col-sm-4 mix category_2">
                      <div class="mix-inner">
                        <img class="img-responsive" src="{{ $photo }}" alt="">
                        <div class="mix-details">
                          <h4></h4>

                          <a class="mix-preview fancybox-button" href="{{ $photo }}" title="" data-rel="fancybox-button">
                          <i class="fa fa-search"></i>
                          </a>
                        </div>
                      </div>
                    </div>
              @endforeach


                 



                  </div>
                </div>
                <!-- END FILTER -->
              </div>


            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE CONTENT-->
    </div>
  </div>
  <!-- END CONTENT -->










@endsection


@section('footer.scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" ></script>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/adminstration/assets/global/plugins/jquery-mixitup/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="/adminstration/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="/adminstration/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/adminstration/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/adminstration/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/adminstration/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/adminstration/assets/admin/pages/scripts/portfolio.js"></script>

@endsection