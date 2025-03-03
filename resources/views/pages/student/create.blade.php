@extends('layout.app')
@section('main')

  <form>
<div class="row p-5">
  <div class="col-md-12">
    <h3>Student Create</h3>
  </div>
   <!-- Movie name -->
  <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputEmail1">Movie Name</label>
        <input type="text" class="form-control" placeholder="Enter Movie">
    </div>
  </div>

  <!--  Author name-->
  <div class="col-md-6">
      <div class="form-group">
        <label for="author name">Author Name</label>
        <input type="text" class="form-control"  placeholder="Author name">
      </div>
  </div>

<!-- Time duration -->
  <div class="col-md-6">
      <div class="form-group">
        <label for="time duration">Duratin</label>
        <input type="time" class="form-control"  placeholder="Time duration">
      </div>
  </div>

  <!-- Choose plan -->
  <div class="col-md-6">
    <div class="form-group">
      <label for="plan">Choose plan</label><br>
      <select class="form-control">
        <option value="free">Free</option>
        <option value="premium">Premium</option>
      </select>
    </div>
  </div>

  <!-- Video URL -->
  <div class="col-md-12">
      <div class="form-group">
        <label for="time duration">URL</label>
        <input type="text" class="form-control"  placeholder="Enter URL">
      </div>
  </div>


  <!--  submit button-->
  <div class="col-md-12 mt-5">
    <button type="submit" class="btn btn-success">Submit</button>
  </div>


</div>  
</form>

@endsection