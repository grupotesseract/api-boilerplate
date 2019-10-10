<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="/js/App.js"></script>
@yield('scripts')

@if (env('APP_ENV') === 'local')
    <script async src="http://localhost:3000/browser-sync/browser-sync-client.js?v=2.26.7"></script>
@endif
