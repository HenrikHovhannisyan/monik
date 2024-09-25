const CACHE_NAME = 'pwa-cache-v1';
const OFFLINE_URL = '/offline';
const URLS_TO_CACHE = [
    OFFLINE_URL,
];


self.addEventListener('install', (event) => {
    console.log('[ServiceWorker] Устанавливается...');
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            console.log('[ServiceWorker] Кешируется оффлайн-страница и ресурсы');
            return cache.addAll(URLS_TO_CACHE);
        })
    );
    self.skipWaiting();
});


self.addEventListener('activate', (event) => {
    console.log('[ServiceWorker] Активируется...');
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.map((cacheName) => {
                    if (cacheName !== CACHE_NAME) {
                        console.log('[ServiceWorker] Удаляется старый кеш:', cacheName);
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
    self.clients.claim();
});


self.addEventListener('fetch', (event) => {
    if (event.request.mode === 'navigate') {
        event.respondWith(
            fetch(event.request)
                .then((response) => {
                    return response;
                })
                .catch(() => {
                    return caches.match(OFFLINE_URL);
                })
        );
    } else {
        event.respondWith(
            caches.match(event.request).then((response) => {
                return response || fetch(event.request).then((fetchResponse) => {
                    return caches.open(CACHE_NAME).then((cache) => {
                        cache.put(event.request, fetchResponse.clone());
                        return fetchResponse;
                    });
                });
            }).catch(() => {
            })
        );
    }
});
