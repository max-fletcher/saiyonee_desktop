@extends('frontend.layouts.base')

@push('page-specific-css')

	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

@endpush

@section('frontend-page-content')
   <div class="container-fluid">
      

      {{-- File Upload Moda; --}}
      <!-- Modal Upload-->

      <section id="contest_rules_section" class="page-section-ptb">
         <div class="container">

            <div id="uploaderHolder">
               <form action="{{ route('file-upload') }}"
               class="dropzone"
               id="datanodeupload">
               @csrf
                  <input type="file" name="file"  style="display: none;">
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
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

		<!-- DROPZONE JS -->
		<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
		<script src="{{ asset('js/file_upload_image.js') }}" defer></script>

		<script>
			var deleteImage = '{{ route("image-file-delete") }}';
		</script>

@endpush

