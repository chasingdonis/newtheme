function galleryHover(){
	jQuery('.gallery-thumbs li').mouseenter( function(){
		//grab class name
		var imgClass = this.className;
		//make sure all images are showing
		jQuery('.gallery-img li').show();
		// hide all imgs not of the same class as thumb
		jQuery('.gallery-img li' ).not('.' + imgClass).hide();
	});
			
}


jQuery.fn.bold = function (str, className) {
    var regex = new RegExp(str, "gi");
    return this.each(function () {
        jQuery(this).contents().filter(function() {
            return this.nodeType == 3 && regex.test(this.nodeValue);
        }).replaceWith(function() {
            return (this.nodeValue || "").replace(regex, function(match) {
                return "<span class=\"" + className + "\">" + match + "</span>";
            });
        });
    });
};