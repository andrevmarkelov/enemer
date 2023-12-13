document.addEventListener('DOMContentLoaded', function() {
    if (!getCookie('cookiesAccepted')) {
        setTimeout(() => {
            showCookieModal();
        }, 5000);
    }
});

const showCookieModal = () => document.getElementById('cookieModal').style.display = 'block';

const hideCookieModal =() => document.getElementById('cookieModal').style.display = 'none';

const acceptCookies = () => {
    setCookie('cookiesAccepted', 'true', 1);
    hideCookieModal();
}

const rejectCookies = () => hideCookieModal();

const setCookie = (name, value, days) => {
    const expires = days ? `; expires=${new Date(Date.now() + days * 24 * 60 * 60 * 1000).toUTCString()}` : '';
    document.cookie = `${name}=${value}${expires}; path=/`;
}

const getCookie = (name) => {
    const nameEQ = name + '=';
    const cookies = document.cookie.split(';').map(cookie => cookie.trim());

    for (const cookie of cookies) {
        if (cookie.startsWith(nameEQ)) {
            return cookie.substring(nameEQ.length);
        }
    }

    return null;
}