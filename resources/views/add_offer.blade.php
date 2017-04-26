@extends('layout.master')

@section('content')

   
   <h1>اضافه عرض</h1>
   <hr>
   <div class="row">

<!-- start image dropzone -->


  <div class="form-group">
    <label for="field-4" class="col-md-2">العروض</label>
    <div class="col-md-10">

     <form enctype="multipart/form-data" method="POST" action="/add_offers">
             
            <div class="dropzone dropzone-previews" id="my-awesome-dropzone"></div><br><br>

            <button type="submit" class="btn btn-success"> اضف العروض </button>

      </form>
 

    </div>
  </div>

<!--  End image dropzone -->
	

   </div>

@endsection

@section('footer.scripts')


<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/basic.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
 
<script>
  
Dropzone.autoDiscover = false;
  jQuery(document).ready(function() {

    $("div#my-awesome-dropzone").dropzone({
      url: "/add_offer",
      addRemoveLinks: true,
      removedfile: function(file) {
    var name = file.name;

    $.ajax({
      type: "post",
      url: "{{ url('/image/clear') }}",
      data: { file: name },
      dataType: 'html'
    });

    // remove the thumbnail
    var previewElement;
    return (previewElement = file.previewElement) != null ? (previewElement.parentNode.removeChild(file.previewElement)) : (void 0);
      },

    });

  });


</script>
@endsection