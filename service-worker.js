var cacheName = 'app-shell-cache-v1';
var fileToCache = [
    '/',
    'index.php',
    'header.html',
    'footer.html',
    'scripts/main.js',
    'styles/header.css',
    'images/2.jpg',
    'images/3.jpg',
    'images/4.jpg',
    'images/5.jpg',
    'images/background.png',
    'images/logo.png',
    'images/6.jpg',
    'images/7.jpg'
];
self.addEventListener('install',function(event){
    console.log('installing service Worker');
    event.waitUntil(
    caches.open(cacheName).then(function(cache){
        return cache.addAll(fileToCache);
        }).then(function(){
        return self.skipWaiting();
    })
    );
});
self.addEventListener('activate',function(event){
    console.log('activating service worker');
    event.waitUntil(
    caches.keys().then(keyList=>{
        return Promise.all(keyList.map(key=>{
            if(key!==cacheName){
                return caches.delete(key);
            }
        }));
    }));
    return self.clients.claim();
});
self.addEventListener('fetch', function(e) {
  console.log('[ServiceWorker] Fetch', e.request.url);
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});