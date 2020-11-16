<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="author" content="Công Ty Hoàng Phúc">
    <meta name="copyright" content="Công Ty TNHH Hoàng Phúc">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Hầm rượu vang Hoàng Phúc - Đơn vị nhập khẩu và phân phối rượu vang cao cấp chính hãng từ các quốc gia nổi tiếng như vang Ý, vang Pháp, vang Chile, vang Mỹ,,.. - với giá tốt, cạnh tranh nhất trên thị trường. Ngoài ra, tại Hoàng Phúc còn vô số các buổi thử nếm rượu vang để quý khác có sự lựa chọn chai vang phù hợp">
    <meta name="twitter:title" content="Hầm rượu vang Hoàng Phúc - We are master of wine">
    <meta name="twitter:site" content="@WineHoangPhucVn">
    <meta name="twitter:creator" content="@WineHoangPhucVn">
    <link rel="canonical" href="https://winehoangphuc.vn/">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://winehoangphuc.vn/">
    <meta property="og:site_name" content="WINEHOANGPHUC.vn">
    @yield('meta')
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    @include('frontend.partial.head')

</head>
<body>
    @include('frontend.partial.header')
    @yield('content')
    @include('frontend.partial.footer')
</body>
</html>
