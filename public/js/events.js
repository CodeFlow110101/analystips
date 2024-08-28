document.addEventListener("livewire:init", () => {
  Livewire.on("upload-image", event => {
    Livewire.dispatch(event.callbackLoaderDispatch, { value: true });

    if (event.image.files.length == 0) {
      Livewire.dispatch(event.callbackDispatch, {
        validationKey: { image: event.image.files.length == 0 },
        validationMessage: { image: "The Image is required." },
        imageName: null,
        imagePath: null
      });
      return;
    }

    if (event.image.files[0].size >= event.imageSizeLimit * 1024 * 1024) {
      Livewire.dispatch(event.callbackDispatch, {
        validationKey: {
          image: event.image.files[0].size >= event.imageSizeLimit * 1024 * 1024
        },
        validationMessage: {
          image:
            "The Image size should be less than " + event.imageSizeLimit + "."
        },
        imageName: null,
        imagePath: null
      });
      return;
    }

    var formData = new FormData();
    var image = event.image.files[0];
    formData.append("image", image);

    $.ajax({
      url: "/upload-image",
      type: "POST",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        Livewire.dispatch(event.callbackDispatch, {
          validationKey: null,
          validationMessage: null,
          imageName: response["imageName"],
          imagePath: response["imagePath"]
        });
      }
    });
  });
});
