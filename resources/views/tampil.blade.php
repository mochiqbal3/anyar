@section('js')
  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
          $('#showgambar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>
@extends('layouts.index')
@section('content')

<div class="section">
	<div class="card-panel purple darken-3 white-text">Tutorial CRUD Laravel 5.2 dengan Materializecss</div>
</div>

<div class="section">
	
	<div class="row">
		<div class="col s12">
			<h5>{{ $tampilkan->judul }}</h5>

            <div class="divider"></div>
            <img src="{{ ('image/'.$tampilkan->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;">
            <p>{!! $tampilkan->isi !!}</p>
                
		</div>
	</div>

</div>

@endsection