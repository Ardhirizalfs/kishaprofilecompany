

      <!-- JS untuk load otomatis saat scroll bawah di mobile -->
  <script>
    function isMobile() {
        return window.innerWidth <= 768; // Atur breakpoint sesuai kebutuhan
    }

    let sectionLoaded = false;

    window.addEventListener('scroll', function () {
        if (!isMobile() || sectionLoaded) return;

        const scrollBottom = window.innerHeight + window.scrollY;
        const docHeight = document.body.offsetHeight;

    
        if (scrollBottom >= docHeight - 100) {
            sectionLoaded = true;

         
            const loader = document.getElementById('load-trigger');
            if (loader) loader.innerText = 'Memuat...';

    
            fetch('/portofolio#galeri')
                .then(res => res.text())
                .then(html => {
             
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');
                    const content = doc.querySelector('main')?.innerHTML;

                    document.getElementById('next-section').innerHTML = content || html;

                    if (loader) loader.style.display = 'none';
                })
                .catch(() => {
                    if (loader) loader.innerText = 'Gagal memuat konten.';
                });
        }
    });
  </script>


