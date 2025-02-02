var quill = new Quill("#snow-editor", {
    theme: "snow",
    modules: {
        toolbar: [[
            {
                size: []
            }], ["bold", "italic", "underline", "strike"], [{
                color: []
            }, {
                background: []
            }],
        [{
            header: [!1, 1, 2, 3, 4, 5, 6]
        }, "blockquote"], [{
            list: "ordered"
        }, {
            list: "bullet"
        }, {
            indent: "-1"
        }, {
            indent: "+1"
        }], ["direction", {
            align: []
        }], ["link", "image"]]
    }
});
