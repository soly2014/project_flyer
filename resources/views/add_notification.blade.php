@extends('layout.master')

@section('content')

   
   <h1>ارسل اشعارات</h1>
   <hr>
   <div class="row">

<!-- start image dropzone -->


  <div class="form-group">
    <label for="field-4" class="col-md-2"></label>
    <div class="col-md-10">

      <form enctype="multipart/form-data" method="POST" action="/add_notification" class="col-md-6">
             
        <div class="form-group">
        <label for="street">العنوان</label>
        <input type="text" name="address" class="form-control" value="{{ old('address') }}">
      </div>

        <div class="form-group">
        <label for="street">الرساله</label>
        <textarea class="form-control" name="message" placeholder="address">{{ old('message') }}</textarea>
      </div>

        <div class="form-group">
        <label for="street"></label>
        <button type="submit" class="btn btn-primary">ارسا اشعار</button>
      </div>


     </form>
 

    </div>
  </div>

<!--  End image dropzone -->
	

   </div>

@endsection

@section('footer.scripts')



@endsection