@extends('layout/main')

@section('maincontent')
<div class="imageshow">
  <div class="headercard">
    <div class="profilepic" style="background-image: url('{{$linkerpic}}'); background-size: cover; background-position:center;">

    </div>
    <p class="iguname">{{ $username }}</p>
  </div>
  <div class="imgcard">
    <?php if ($type == "image"): ?>
      <img src="{{ $linker }}" alt="" width="288px">
    <?php $ext = "jpg"; else: ?>
      <video controls="" autoplay="" width="288px" name="media"><source src="{{$linker}}" type="video/mp4"></video>
    <?php $ext = "mp4"; endif; ?>

  </div>
  <div class="footercard">
    <p class="pready"><span class="fas fa-heart" style="font-size:20px; position:relative; top:2px;"></span>&emsp;The image is ready to download</p>

  </div>
</div>

<div class="btndiv">
  <a class="adownload nav-link" href="{{ $filename }}" download="yourdownload.{{$ext}}">DOWNLOAD</a>

</div>


@endsection
