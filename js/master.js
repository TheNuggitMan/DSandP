function openModal() {
  document.getElementById("lightbox").style.display = "block";
}

var picker = new Lightpick({ field: document.getElementById('datepicker'),
singleDate: false
});
