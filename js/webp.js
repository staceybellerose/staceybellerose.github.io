document.body.classList.remove('no-js');
var i = new Image;
i.onload = i.onerror = function(){
  document.body.classList.add(i.height == 1 ? "webp" : "no-webp")
};
i.src="data:image/webp;base64,UklGRhoAAABXRUJQVlA4TA0AAAAvAAAAEAcQERGIiP4HAA==";
