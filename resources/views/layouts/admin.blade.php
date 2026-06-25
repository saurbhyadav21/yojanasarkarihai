<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>

document.querySelectorAll('.editor').forEach((element)=>{

    ClassicEditor
        .create(element)
        .catch(error => {
            console.error(error);
        });

});

</script>