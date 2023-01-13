@extends('frontend.layouts.base')

@push('page-specific-css')

	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@endpush

@section('frontend-page-content')
   <div class="container-fluid">
      

      {{-- File Upload Moda; --}}
      <!-- Modal Upload-->
      @php
      $ts = time();
      $user_id = $user_obj;
      $date = date("Y-m-d");
      @endphp

      <section id="contest_rules_section" class="page-section-ptb">
         <div class="container">

            <div id="uploaderHolder">
               <form action="{{ route('file-upload') }}"
               class="dropzone"
               id="datanodeupload">
               @csrf

                  <input type="file" name="file"  style="display: none;">
                  <input type="hidden" name="dataTS" id="dataTS" value="{{ $ts }}">
                  <input type="hidden" name="dataDATE" id="dataDATE" value="{{ $date }}">
               </form>

               <div class="modal-footer">
                  <button type="button" class="btn btn-primary" onClick="window.location.reload();">{{ __('Done') }}</button>
               </div>
            </div>


         </div>
      </section>

      <div class="row justify-content-center">
         <div class="col-md-8">
            {{-- <div class="col-md-12 mb-4">
               <button type="button" class="btn btn-primary btn-ico" data-toggle="modal" data-target="#uploaderModal"><i class="fa fa-files-o"></i> {{ __('File Upload') }}</button>
            </div> --}}
            <div class="row">
               {{-- @foreach($media_obj as $media)
                  <div class="col-md-2 border m-1 p-1">
                     <img src="{!! env('APP_URL').'/'.$media->url !!}" style="width:100%; height:auto">
                     <div>name: {{ $media->name }}</div>
                     <div>mime: {{ $media->mime }}</div>
                     <div>size: {{ $media->humanFileSize() }}</div>
                  </div>
               @endforeach --}}
            </div>
         </div>
      </div>
   </div>
@endsection


@push('page-specific-js')
	@parent
		<!-- Scripts -->
		<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
		<script src="{{ asset('js/file_upload.js') }}" defer></script>

		<script>
			var home_url = "{{env('APP_URL') }}";
			var deleteAction = '{{ route("file-delete") }}';
			var generalTS =  document.getElementById('dataTS').value;
			var generalDATE = document.getElementById('dataDATE').value;
			var token = '{!! csrf_token() !!}';
		</script>

@endpush

