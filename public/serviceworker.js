const CACHE_NAME = "pwa-cache-v3";
const OFFLINE_URL = "/offline";

// Статические ресурсы, которые точно нужны
const URLS_TO_CACHE = [
    OFFLINE_URL,
    "/images/pwa/icon-72_72.png",
    "/images/pwa/icon-192_192.png",
    "/images/pwa/icon-512_512.png",
];

// Устанавливаем только нужные файлы
self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => cache.addAll(URLS_TO_CACHE))
    );
    self.skipWaiting();
});

// Удаляем старые кэши
self.addEventListener("activate", (event) => {
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames
                    .filter((name) => name !== CACHE_NAME)
                    .map((name) => caches.delete(name))
            );
        })
    );
    self.clients.claim();
});

// Только навигационные запросы (HTML-страницы)
self.addEventListener("fetch", (event) => {
    // Не кешируем расширения и POST-запросы
    if (
        event.request.method !== "GET" ||
        event.request.url.startsWith("chrome-extension://") ||
        event.request.url.includes("/api/") || // игнорировать API
        event.request.url.includes("/admin") // игнорировать админку
    ) {
        return;
    }

    // Для навигации — offline fallback
    if (event.request.mode === "navigate") {
        event.respondWith(
            fetch(event.request).catch(() => caches.match(OFFLINE_URL))
        );
        return;
    }

    // Для остальных ресурсов — только если они есть в кеше
    event.respondWith(
        caches.match(event.request).then((cachedResponse) => {
            return cachedResponse || fetch(event.request);
        })
    );
});
