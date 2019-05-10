<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
   <url>
      <loc>{{ route('trangchu.pages.trangchu') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.gioithieu') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.sanpham') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.tintuc') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.lienhe') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.congtrinh') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.pages.tuyendung') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.timkiem.news') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>
   <url>
      <loc>{{ route('trangchu.timkiem.product') }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>1</priority>
   </url>

   @foreach ($news as $item)
   <url>
      <loc>{{ route('trangchu.chitiet.news',['slug'=>str_slug($item->tieuDe),'id'=>$item->id,'ma'=>$item->maLoaiTin]) }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.8</priority>
   </url>
   @endforeach
   @foreach ($sanpham as $item)
   <url>
      <loc>{{ route('trangchu.chitiet.product',['name'=>str_slug($item->tenSP),'id'=>$item->id,'ma'=>$item->maLoaiSanPham]) }}</loc>
      <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
      <changefreq>daily</changefreq>
      <priority>0.8</priority>
   </url>
   @endforeach

</urlset>
