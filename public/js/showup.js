const display = document.querySelector('.bagian-display'),
      navigasi = document.querySelector('.bagian-navigasi'),
      beranda = document.querySelector('.bagian-beranda'),
      mitra = document.querySelector('.bagian-mitra'),
      galeri = document.querySelector('.bagian-galeri'),
      kontak = document.querySelector('.bagian-kontak'),
      about = document.querySelector('.bagian-about'),
      footer = document.querySelector('.bagian-footer'),
      // toggle1 = document.querySelector('label[for=navigasi]'),
      toggle2 = document.querySelector('label[for=beranda]');
      toggle3 = document.querySelector('label[for=mitra]');
      toggle4 = document.querySelector('label[for=galeri]');
      toggle5 = document.querySelector('label[for=kontak]');
      toggle6 = document.querySelector('label[for=about]');
      toggle7 = document.querySelector('label[for=footer]');

      // toggle1.addEventListener("click",()=>{
      //   navigasi.classList.toggle("show");
      // });
      toggle2.addEventListener("click",()=>{
        beranda.classList.toggle("show");
      });
      toggle3.addEventListener("click",()=>{
        mitra.classList.toggle("show");
      });
      toggle4.addEventListener("click",()=>{
        galeri.classList.toggle("show");
      });
      toggle5.addEventListener("click",()=>{
        kontak.classList.toggle("show");
      });
      toggle6.addEventListener("click",()=>{
        about.classList.toggle("show");
      });
      toggle7.addEventListener("click",()=>{
        footer.classList.toggle("show");
      });
      