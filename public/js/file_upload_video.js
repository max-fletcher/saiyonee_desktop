/**
* GooTools.net custom JS for file upload
*/

var file_replaced_image = false;
var contest_identifier_token = $('.contest_identifier_token').val()

Dropzone.options.datanodeupload2 =
{
   parallelUploads: 1,  // since we're using a global 'currentFile', we could have issues if parallelUploads > 1, so we'll make it = 1
   maxFiles: 1, // If not null defines how many files this Dropzone handles. If it exceeds, the event maxfilesexceeded will be called.
   // maxfilesexceeded: function(){
   //    Swal.fire({
   //       icon: 'error',
   //       title: 'Only 1 file upload allowed!',
   //       text: 'The last file was accepted. The rest were discarded.',
   //       showConfirmButton: false,
   //       timer: 2000,
   //    })
   // },
   maxFilesize: 350,   // max individual file size 350 MB
   chunking: true,      // enable chunking
   forceChunking: true, // forces chunking when file.size < chunkSize
   parallelChunkUploads: false, // allows chunks to be uploaded in parallel (this is independent of the parallelUploads option)
   chunkSize: 2000000,  // chunk size 2,000,000 bytes (~2MB)
   retryChunks: true,   // retry chunks on failure
   retryChunksLimit: 3, // retry maximum of 5 times (default is 5)
   renameFile: function(file) {
      // var dt = new Date();
      // var time = dt.getTime();
      return file.name;
   },
   // acceptedFiles: ".jpeg,.jpg,.png,.txt",
   acceptedFiles: ".x-flv,.x-mpegURL,.MP2T,.3gpp,.quicktime,.avi,.mpeg,video/mp4,.ogg,.x-ms-wmv",
   addRemoveLinks: true,
   timeout: null,
   // To prevent more than one file being uploaded
   init: function() {
      this.on('addedfile', function(file) {
         if (this.files.length > 1){
            this.removeFile(this.files[0]);

            Swal.fire({
               icon: 'info',
               title: 'Replacing uploaded file! Please wait.',
               showConfirmButton: false,
               timer: 2000,
            })

            file_replaced_video = true
         }
         else{
            Swal.fire({
               icon: 'info',
               title: 'Uploading file! Please wait.',
               showConfirmButton: false,
               timer: 2000,
            })

            file_replaced_video = false
         }

         // this.on("sending", function(file, xhr, formData){
         //    formData.append("contest_identifier_token", contest_identifier_token);
         // });
      });
      this.on("complete", function (file) {
         Swal.fire({
            icon: 'success',
            title: 'File upload complete! Please submit the form with relevant information to complete your participation.',
            showConfirmButton: false,
            timer: 3000,
         })
      });
   },
   removedfile: function(file) {
      var name = file.upload.filename;
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         type: 'POST',
         url: deleteVideo,
         data: {
            
         },
         success: function (response){
            console.log("File has been successfully removed!!");

            if(!file_replaced_video){
               Swal.fire({
                  icon: 'success',
                  title: 'File deleted successfully!',
                  showConfirmButton: false,
                  timer: 2000,
               })
            }
         },
         error: function(e) {
            console.log("Error while removing file !!");
            // Swal.fire({
            //    icon: 'success',
            //    title: 'File deletion failed!',
            //    text: 'Something went wrong. Please try again.',
            //    showConfirmButton: false,
            //    timer: 2000,
            // })
         }
      });
      var fileRef;
      return (fileRef = file.previewElement) != null ?
      fileRef.parentNode.removeChild(file.previewElement) : void 0;
   },
   success: function(file, response){

      // console.log(response.status, this.files.length);

      file_replaced_video = false

   },
   error: function(file, response){
      return false;
   }
};