<x-layout.guest>
  <main class="w-full flex flex-col items-center">
    <div class="md:w-2/3 w-full flex flex-col items-center">
      <div class="bootstrap-styled">
        {!! $greetings->content ?? "" !!}
      </div>
      
      <div class="bootstrap-styled w-full">
        {!! $messages->content ?? "" !!}
      </div>
    </div>
  </main>
  <x-article-slider 
    type="newest"
    slider-title="Berita Terkini"
    slider-description="Dapatkan Update Terbaru dari Sumber Terpercaya"
    slider-url="{{ route('artikel.index.guest') }}"
  />
  <hr class="h-1 my-8 bg-gray-200 border-0 dark:bg-gray-700 w-full">
  <x-article-slider 
    type="important"
    slider-title="Informasi Penting"
    slider-description="Pengumuman dan Informasi Penting yang Harus Anda Ketahui"
    slider-url="{{ route('artikel.index.guest') }}"
  />
  <hr class="h-1 my-8 bg-gray-200 border-0 dark:bg-gray-700 w-full">
  <x-article-slider 
    type="popular"
    slider-title="Paling Sering Dilihat"
    slider-description="Berita Populer yang Sedang Hangat Dibicarakan"
    slider-url="{{ route('artikel.index.guest') }}"
  />
</x-layout.guest>