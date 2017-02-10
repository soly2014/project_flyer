@extends('layout.master')

@section('content')
	
	<div class="row">
				
				<div class="col-md-4">
				 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>{{ $flyer->street }}</h1>
        <p> {!! nl2br($flyer->description) !!} </p>

        <form action="/{{ $flyer->zip.'/'.$flyer->street }}/file_upload"
                      class="dropzone"
                      id="myAwesomeDropzone">
                      	
<!--          <input type="file" name="files" multiple/>
 -->
 		{!! csrf_field() !!}
        </form>
            
      </div>
    </div>
				</div>
				
				<div class="col-md-8" style="padding-bottom:50px;">

          <?php $x=0; ?>
          @foreach(array_chunk($photos,4) as $key)
          <div class="row">
              
              @foreach($key as $path)

                <div class="col-md-3">
                    <a id="btn{{$x}}" onclick="myFunction()">
                    <img  src="{{ $path }}" style="margin-top:5px;margin-left:8px;">
                    </a>
                </div>
          <?php $x++; ?>

              @endforeach


          </div>
       @endforeach

				</div>
	</div>
   




 <button>Open PhotoSwipe</button>
 <!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

@endsection


@section('footer.scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" ></script>
<script>


    

            var openPhotoSwipe = function() {
            var pswpElement = document.querySelectorAll('.pswp')[0];

            // build items array
            var items = [

                @foreach($photos as $key)

                  {


                      src: '{{ $key }}',
                      w: 964,
                      h: 1024
                  },

                @endforeach
                
            ];
            
            // define options (if needed)
            var options = {
                     // history & focus options are disabled on CodePen        
                history: false,
                focus: false,

                showAnimationDuration: 0,
                hideAnimationDuration: 0
                
            };
            
            var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

      


@for($x=0;$x<80;$x++)
document.getElementById('btn{{$x}}').onclick = openPhotoSwipe;
@endfor



</script>

@endsection