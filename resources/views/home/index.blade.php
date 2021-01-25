@extends('layout/main')

@section('maincontent')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <p class="lead p-jumbo">Let's drop a<br> <span style="color:#76448e;"> link </span> below</p>
    </div>

</div>

<div class="input-box">
  <div class="form-group">
    <form class="" action="{{ route('download_page') }}" method="post">
      @csrf
        <label id="label-input-link" for="link">Simply put a share-link of <br> the post you want</label>
        <input class="form-control form-link" type="text" name="link" id="link" placeholder="Link here">
        <!-- <p id="p-andlet">and let the...</p> -->
        <div class="divbutton">
          <button type="submit" class="btn btn-putih-bulat">PROCESS <span class="fas fa-arrow-right" style="color: #ffc7f5;"></span> </button>
        </div>

    </form>
  </div>

</div>

<div class="row" style="margin-top:50px;">
  <div class="col-1">

  </div>
  <div class="col-2" style="padding-right:0;">
    <div class="copyright">
      <span class="fas fa-copyright" style="color:gray;"></span>

    </div>
  </div>
  <div class="col-8">
    <p class="p-worry">Worry about copyrights?</p>
    <p class="p-learn">Learn more about it <a href="#" style="font-weight:600;">here</a></p>
  </div>
  <div class="col-1">

  </div>
</div>
<div class="" style="height:100px;">

</div>
@endsection
