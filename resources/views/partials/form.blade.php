
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
   		<div class="form-group">
   			<label for="street">street</label>
   			<input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}">
   		</div>

        <div class="form-group">
   			<label for="street">city</label>
   			<input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
   		</div>

   		<div class="form-group">
   			<label for="zip">zip</label>
   			<input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
   		</div>


   		<div class="form-group">
   			<label for="country">country</label>
   			<select name="country" id="country" class="form-control" value="{{ old('country') }}">
   			@foreach(Country::countryList() as $code => $country)
   			<option value="{{ $code }}">{{ $country }}</option>
   			@endforeach
   			</select>
   		</div>


   		
   		<div class="form-group">
   			<label for="state">state</label>
   			<select name="state" id="state" class="form-control" value="{{ old('state') }}">
   			<option>lol</option>
   			</select>
   		</div>

	    <div class="form-group">
   			<label for="price">price</label>
   			<input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
   		</div>




         <div class="dropzone-previews">
            
            <div class="form-group">
               <label for="photos">photos</label>
               <input type="file" name="files"  multiple >
            </div>

         </div> <!-- this is were the previews should be shown. -->



   		<div class="form-group">
   			<label for="description">description</label>
   			<textarea type="text" name="description" id="description" class="form-control" rows="10">
   			{{ old('description') }}
   			</textarea>
   		</div>


         <hr>
	    <div class="form-group">
	      <button name="submit" type="submit" class="btn btn-primary">submit</button>
   		</div>
