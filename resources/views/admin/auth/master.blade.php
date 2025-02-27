<!doctype html>
<html lang="en">
@include('admin.auth.partials.head')

<body class="light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl @endif">
    @include('admin.partials.langSwitcher')
    @yield('content')
    @include('admin.auth.partials.scripts')
</body>

</html>
