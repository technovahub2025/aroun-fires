(function () {
    'use strict';


    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileValidateSize,
        FilePondPluginFileEncode,
        FilePondPluginImageEdit,
        FilePondPluginFileValidateType,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageTransform
    );


    const multipleElement = document.querySelector('.multiple-filepond');
FilePond.create(multipleElement, {
    allowReorder: true,
    maxFileSize: '3MB',
    maxFiles: 15,
    imagePreviewHeight: 170,
    imageCropAspectRatio: '1:1',
    imageResizeTargetWidth: 200,
    imageResizeTargetHeight: 200,
    imagePreview: true,
});

// If you want to globally change the preview size across all instances, then you would use setOptions like this:
FilePond.setOptions({
    imagePreviewHeight: 500,
    // imagePreviewWidth: 500,
});

    const multipleElements = document.querySelectorAll('.multiple-fileponds');
    multipleElements.forEach((element) => {
        FilePond.create(element, {
            allowReorder: true,
            maxFileSize: '50MB',
            maxFiles: 10,
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            imagePreview: true,
        });
    });

    FilePond.create(document.querySelector('.single-fileupload'), {
        labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
        imagePreviewHeight: 170,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleButtonRemoveItemPosition: 'center bottom'
    });
})();
