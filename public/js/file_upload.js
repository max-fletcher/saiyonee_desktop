/**
* GooTools.net custom JS for file upload
*/

Dropzone.options.datanodeupload =
{
   parallelUploads: 1,  // since we're using a global 'currentFile', we could have issues if parallelUploads > 1, so we'll make it = 1
   maxFiles: 1, // If not null defines how many files this Dropzone handles. If it exceeds, the event maxfilesexceeded will be called.
   maxFilesize: 1024,   // max individual file size 1024 MB
   chunking: true,      // enable chunking
   forceChunking: true, // forces chunking when file.size < chunkSize
   parallelChunkUploads: true, // allows chunks to be uploaded in parallel (this is independent of the parallelUploads option)
   chunkSize: 2000000,  // chunk size 2,000,000 bytes (~2MB)
   retryChunks: true,   // retry chunks on failure
   retryChunksLimit: 5, // retry maximum of 5 times (default is 5)
   renameFile: function(file) {
      var dt = new Date();
      var time = dt.getTime();
      return time+"_"+file.name;
   },
   acceptedFiles: ".jpeg,.jpg,.png,.txt",
   // acceptedFiles: "video/x-flv,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/avi,video/mpeg,video/mp4,video/ogg,video/x-ms-wmv",
   addRemoveLinks: true,
   timeout: null,
   removedfile: function(file) {
      var name = file.upload.filename;
      $.ajax({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         type: 'POST',
         url: deleteAction,
         data: {
         filename: name,
         ts: generalTS,
         date: generalDATE,
         },
         success: function (data){
         console.log("File has been successfully removed!!");
         },
         error: function(e) {
         console.log(e);
         }});
         var fileRef;
         return (fileRef = file.previewElement) != null ?
         fileRef.parentNode.removeChild(file.previewElement) : void 0;
      },

      success: function(file, response)
         {
            console.log(response);
         },
      error: function(file, response)
         {
            return false;
         }
};