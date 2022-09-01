
// classic editor page for articles

ClassicEditor
    .create( document.querySelector( '#editor' ), {
        simpleUpload: {
            // The URL that the images are uploaded to.
            uploadUrl: '/imageUpload.php',

            // Enable the XMLHttpRequest.withCredentials property.
            withCredentials: false,
        }
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( error => {
        console.error( 'There was a problem initializing the editor.', error );
    } );

    // $result = [
    //     'url' => 'imageurl',
    // ];
    // return json_encode($result);